<?php
session_start();

//<-----------GET REQUEST TO FETCH THE DATA OF THE LOGGED USER----------->
if (isset($_SESSION['user']['id'])) {
    $userId = $_SESSION['user']['id'];
    $apiEndpoint = 'http://localhost/reporting-dashboard/api/users/show.php?id=' . $userId;

    $apiResponse = file_get_contents($apiEndpoint);
    if ($apiResponse !== false) {
        $responseData = json_decode($apiResponse, true);
        if ($responseData !== null) {
            $userData = $responseData;
        } else {
            echo 'Error decoding JSON response.';
        }
    } else {
        echo 'Error making API request.';
    }
} else {
    echo 'User not logged in.';
}

//<-----------GET REQUEST TO FETCH THE DATA OF THE LOGGED USER----------->


//<-----------POST REQUEST TO UPDATE THE DATA OF THE LOGGED USER----------->

if (isset($_POST["update_user"])) {
    $postData = [
        'id' => $_SESSION['user']['id'],
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'client' => $_POST['client'],
        'contracts' => $_POST['contracts'],
        'invoice' => $_POST['invoice'],
        'equipment' => $_POST['equipment'],
        'staff' => $_POST['staff'],
        'report' => $_POST['report']
    ];

    $apiEndpoint = 'http://localhost/reporting-dashboard/api/users/update.php';
    $request = curl_init($apiEndpoint);

    curl_setopt($request, CURLOPT_POST, 1);
    curl_setopt($request, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Content-Type: application/x-www-form-urlencoded",
    );
    curl_setopt($request, CURLOPT_HTTPHEADER, $headers);

    $apiResponse = curl_exec($request);

    if (curl_errno($request)) {
        echo 'Error: ' . curl_error($request);
    } else {
        $response = json_decode($apiResponse, true);

        if (isset($response['error']) && $response['error']) {
            echo 'Error creating user: ' . $response['message'];
        } else {
            echo 'User successfully updated';
        }
    }

    curl_close($request);
}
//<-----------POST REQUEST TO UPDATE THE DATA OF THE LOGGED USER----------->
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Details</title>
</head>

<body>

    <h2>Edit User Details</h2>

    <form action="" method="post">


        <!-- Employee ID -->
        <label for="empId">Employee ID:</label>
        <input type="text" id="empId" name="empId" readonly value="<?php echo $userData['empId']; ?>" required>

        <br>

        <!-- Name -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="username" value="<?php echo $userData['username']; ?>" required>

        <br>

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $userData['email']; ?>" required>

        <br>


        <br>

        <!-- Rights checkboxes -->
        <label>Rights:</label>
        <div>
            <!-- Client -->
            <input type="hidden" name="client" value="0">
            <input type="checkbox" id="client" name="client" value="1" <?php echo ($userData['client'] == 1) ? 'checked' : ''; ?>>
            <label for="client">Client</label>

            <input type="hidden" name="contracts" value="0">
            <input type="checkbox" id="contracts" name="contracts" value="1" <?php echo ($userData['contracts'] == 1) ? 'checked' : ''; ?>>
            <label for="contracts">Contracts</label>

            <br>

            <!-- Invoice -->
            <input type="hidden" name="invoice" value="0">
            <input type="checkbox" id="invoice" name="invoice" value="1" <?php echo ($userData['invoice'] == 1) ? 'checked' : ''; ?>>
            <label for="invoice">Invoice</label>

            <br>

            <!-- Equipment -->
            <input type="hidden" name="equipment" value="0">
            <input type="checkbox" id="equipment" name="equipment" value="1" <?php echo ($userData['equipment'] == 1) ? 'checked' : ''; ?>>
            <label for="equipment">Equipment</label>

            <br>
            <input type="hidden" name="staff" value="0">
            <input type="checkbox" id="staff" name="staff" value="1" <?php echo ($userData['staff'] == 1) ? 'checked' : ''; ?>>
            <label for="equipment">Staff</label>

            <br>
            <input type="hidden" name="report" value="0">
            <input type="checkbox" id="report" name="report" value="1" <?php echo ($userData['report'] == 1) ? 'checked' : ''; ?>>
            <label for="equipment">Report</label>

            <br>
            <br>
        </div>

        <br>

        <!-- Submit button -->
        <input type="submit" value="Update" name="update_user">
    </form>

</body>

</html>