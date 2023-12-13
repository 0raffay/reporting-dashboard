<?php
include_once '../config/Database.php';
include_once "../config/EmailSender.php";
require_once "../../vendor/autoload.php";


class Services
{
    private $dbConnect;
    public $userTable = 'users';

    public function __construct()
    {
        $database = new Database();
        $this->dbConnect = $database->getConnection();
        if (!$this->dbConnect) {
            die("Failed to Connect to Database: " . $this->dbConnect);
        }
    }

    public function createUser($userData)
    {
        try {
            $this->dbConnect->begin_transaction();

            $existingUserQuery = "SELECT id FROM " . $this->userTable . " WHERE email = ?";
            $stmtExistingUser = $this->dbConnect->prepare($existingUserQuery);
            $stmtExistingUser->bind_param("s", $userData['email']);
            $stmtExistingUser->execute();
            $stmtExistingUser->store_result();

            if ($stmtExistingUser->num_rows > 0) {
                echo "User with this email already exists.";
                $stmtExistingUser->close();
                return;
            }

            [$empId, $username, $email, $password] = array_values($userData);
            $userQuery = "INSERT INTO " . $this->userTable . " (empId, username, email, password) VALUES (?, ?, ?, ?)";
            $stmt = $this->dbConnect->prepare($userQuery);

            if (!$stmt) {
                throw new Exception("Query preparation error: " . $this->dbConnect->error);
            };

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bind_param("isss", $empId, $username, $email, $hashedPassword);

            if ($stmt->execute()) {
                echo "User added successfully";
                $subject = "Welcome to air-rite";
                $body = "Hello $username,\n\nThank you for creating an account with Air-Rite. Your password is: $password\n\nBest regards,\nAir-Rite Team";

                $mailer = new EmailSender();
                $mailer->sendEmail($email, $subject, $body);
            } else {
                throw new Exception("Error inserting user: " . $stmt->error);
            }
            $lastInsertId = $stmt->insert_id;
            $stmt->close();

            $userAccessQuery = "INSERT INTO user_access(user, client, contracts, invoice, equipment, staff, report) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmtTwo = $this->dbConnect->prepare($userAccessQuery);
            if (!$stmtTwo) {
                throw new Exception("Query preparation error: " . $this->dbConnect->error);
            }
            $stmtTwo->bind_param("iiiiiii", $lastInsertId, $userData['client'], $userData['contracts'], $userData['invoice'], $userData['equipment'], $userData['staff'], $userData['report']);
            if (!$stmtTwo->execute()) {
                throw new Exception("Error inserting into user_access: " . $stmtTwo->error);
            }
            $stmtTwo->close();

            $this->dbConnect->commit();
            return ['success' => true, 'message' => 'User added successfully'];
        } catch (Exception $e) {

            return ['error' => true, 'message' => 'Error: ' . $e->getMessage()];
        }
    }

    public function indexUser()
    {
        try {
            $userQuery = "SELECT empId, username, email, password, type, client, contracts, invoice, equipment, staff, report FROM users LEFT JOIN user_access ON users.id=user_access.user WHERE users.isdeleted=0";
            $results = $this->dbConnect->query($userQuery);
            if (!$results) {
                throw new Exception("Error executing query: " . $this->dbConnect->error);
            }
            $users = [];
            while ($row = $results->fetch_assoc()) {
                $users[] = $row;
            }
            $results->close();
            return $users;
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function showUser($userId)
    {
        try {
            $userQuery = "SELECT empId, username, email, type, client, contracts, invoice, equipment, staff, report FROM users LEFT JOIN user_access ON users.id=user_access.user WHERE users.id = ? AND users.isdeleted=0";
            $stmt = $this->dbConnect->prepare($userQuery);
            if (!$stmt) {
                throw new Exception("Error executing query: " . $this->dbConnect->error);
            }
            $stmt->bind_param("i", $userId);
            if ($stmt->execute()) {
                $results = $stmt->get_result();
                if ($results) {
                    $users = $results->fetch_assoc();
                    $results->free();
                } else {
                    throw new Exception("Error fetching result: " . $stmt->error);
                }
            } else {
                throw new Exception("Error inserting user: " . $stmt->error);
            }
            $stmt->close();

            return $users;
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function updateUser($userData)
    {
        try {

            session_start();
            //$loggedInUserId = $_SESSION['user']['id'];
            $currentUserType = $_SESSION['user']['type'];

            $userId = $userData['id'];
            $usersData = [
                'username' => $userData['username'],
                'email' => $userData['email'],
            ];

            $userAccessData = [
                'client' => $userData['client'],
                'contracts' => $userData['contracts'],
                'invoice' => $userData['invoice'],
                'equipment' => $userData['equipment'],
                'staff' => $userData['staff'],
                'report' => $userData['report'],
            ];

            if ($currentUserType == 1) {
                $this->updateUserTable($userId, $usersData);
            } else {
                $this->updateUserTable($userId, $usersData);
                $this->updateUserAccessTable($userId, $userAccessData);
            }

            return ['success' => true];
        } catch (Exception $e) {
            return ['error: ' => $e->getMessage()];
        }
    }

    private function updateUserTable($userId, $userData)
    {
        $updateQuery = "UPDATE users SET ";
        $updateFields = [];
        $bindParams = '';

        foreach ($userData as $key => $value) {
            $updateFields[] = "$key = ?";
            $bindParams .= "s";
        }
        $updateQuery .= implode(", ", $updateFields);
        $updateQuery .= " WHERE id = ?";
        $stmt = $this->dbConnect->prepare($updateQuery);
        if (!$stmt) {
            throw new Exception("Error preparing query: " . $this->dbConnect->error);
        }

        $bindValues = array_values($userData);
        $bindValues[] = $userId;
        $stmt->bind_param($bindParams . "i", ...$bindValues);
        if ($stmt->execute()) {
            $stmt->close();
            return ['success' => true];
        } else {
            throw new Exception("Error updating 'users' table: " . $stmt->error);
        }
    }

    private function updateUserAccessTable($userId, $userAccessData)
    {
        $updateQuery = "UPDATE user_access SET ";
        $updateFields = [];
        $bindParams = "i";

        foreach ($userAccessData as $key => $value) {
            $updateFields[] = "$key = ?";
            $bindParams .= "s";
        }
        $updateQuery .= implode(", ", $updateFields);
        $updateQuery .= " WHERE user = ?";

        $stmt = $this->dbConnect->prepare($updateQuery);
        if (!$stmt) {
            throw new Exception("Error preparing query: " . $this->dbConnect->error);
        }

        $bindValues = array_values($userAccessData);
        $bindValues[] = $userId;

        $stmt->bind_param($bindParams, ...$bindValues);
        if ($stmt->execute()) {
            $stmt->close();
            return ['success' => true];
        } else {
            throw new Exception("Error updating 'user access' table:", $stmt->error);
        }
    }

    public function destroyUser($userId)
    {
        try {
            $deleteQuery = "UPDATE users SET isdeleted=1 WHERE id = ?";

            $stmt = $this->dbConnect->prepare($deleteQuery);
            if (!$stmt) {
                throw new Exception("Query preparation error: " . $this->dbConnect->error);
            }
            $stmt->bind_param("i", $userId);

            if ($stmt->execute()) {
                $stmt->close();
                return ['success' => true];
            } else {
                throw new Exception("Error deleting user" . $stmt->error);
            }
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function login($userData)
    {
        try {
            $userQuery = "SELECT u.id, u.empId, u.username, u.email, u.password, u.type, ua.client, ua.contracts, ua.invoice, ua.equipment, ua.staff, ua.report FROM users u LEFT JOIN user_access ua ON u.id=ua.user WHERE u.email=?";
            $stmt = $this->dbConnect->prepare($userQuery);
            if (!$stmt) {
                throw new Exception("Query preparation error: " . $this->dbConnect->error);
            }
            $stmt->bind_param("s", $userData['email']);
            $stmt->execute();

            $stmt->bind_result($userId, $empId, $username, $email, $hashedPassword, $type, $client, $contracts, $invoice, $equipment, $staff, $report);
            $stmt->fetch();

            $stmt->close();
            if ($hashedPassword && password_verify($userData['password'], $hashedPassword)) {

                return ['success' => true, 'user' => ['id' => $userId, 'empId' => $empId, 'username' => $username, 'email' => $email, 'type' => $type, 'client' => $client, 'contracts' => $contracts, 'invoice' => $invoice, 'equipment' => $equipment, 'staff' => $staff, 'report' => $report]];
            } else {
                return ['success' => false, 'message' => 'Login failed. Please check your credentials.'];
            }
        } catch (Exception $e) {
            return ['success' => false, 'message' => 'Error: ' . $e->getMessage()];
        }
    }


    public function forgotPassword($userEmail)
    {
        try {

            $userQuery = "SELECT id, username, email, password FROM users WHERE email = ?";
            $stmt = $this->dbConnect->prepare($userQuery);
            if (!$stmt) {
                throw new Exception("Query preparation error: " . $this->dbConnect->error);
            }
            $stmt->bind_param("s", $userEmail['email']);
            $stmt->execute();
            $stmt->bind_result($userId, $username, $email, $password);
            $stmt->fetch();
            $stmt->close();
            if ($username !== null) {
                $newPassword = $this->generatePassword();

                $subject = "New Password";
                $body = "Hello $username,\n\n Your new password is: $newPassword\n\nBest regards,\nAir-Rite Team";

                $mail = new EmailSender();
                $mail->sendEmail($email, $subject, $body);

                $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

                $updatedQuery = "UPDATE users SET password = ? WHERE id= ?";
                $stmtTwo = $this->dbConnect->prepare($updatedQuery);
                if (!$stmtTwo) {
                    throw new Exception("Query preparation error: " . $this->dbConnect->error);
                }

                $stmtTwo->bind_param("si", $newHashedPassword, $userId);
                $stmtTwo->execute();
                $stmtTwo->close();

                return ['success' => true];
            } else {
                return ['success' => false];
            }
        } catch (Exception $e) {
            return ['success' => false, 'message' => 'Error: ' . $e->getMessage()];
        }
    }

    public function generatePassword($length = 12)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $password;
    }



    // public function isLoggedIn()
    // {
    //     session_start();
    //     if (isset($_SESSION['user'])) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}
