<?php
include_once '../config/Database.php';
class Services
{
    private $dbConnect;
    public $clientTable = 'client';

    public function __construct()
    {
        $database = new Database();
        $this->dbConnect = $database->getConnection();
        if (!$this->dbConnect) {
            die("Failed to Connect to Database: " . $this->dbConnect);
        }
    }

    public function insertClient($clientData)
    {
        try {
            $values = [];
            $placeholders = [];

            foreach ($clientData as $key => $value) {
                $values[] = $value;
                $placeholders[] = "?";
            }
            $columns = implode(", ", array_keys($clientData));
            $placeholders = implode(", ", $placeholders);

            $clientQuery = "INSERT INTO " . $this->clientTable . " ($columns) VALUES ($placeholders)";

            $stmt = $this->dbConnect->prepare($clientQuery);
            if (!$stmt) {
                throw new Exception("Query preparation error: " . $this->dbConnect->error);
            }
            $types = str_repeat("s", count($clientData));
            $stmt->bind_param($types, ...$values);
            if ($stmt->execute()) {
                echo "Client inserted successfully.";
            } else {
                throw new Exception("Error inserting client: " . $stmt->error);
            }
            $stmt->close();
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function viewClient()
    {
        try {
            $clientQuery = "SELECT * FROM " . $this->clientTable;
            $result = $this->dbConnect->query($clientQuery);

            if (!$result) {
                throw new Exception("Error Fetching Clients: " . $this->dbConnect->error);
            }
            $clients = [];
            while ($row = $result->fetch_assoc()) {
                $clients[] = $row;
            }

            return $clients;
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }
}
