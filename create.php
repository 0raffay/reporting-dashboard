<?php
session_start();

if (isset($_POST["create_user"])) {
    $postData = [
        'empId' => $_POST['empId'],
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'client' => $_POST['client'],
        'contracts' => $_POST['contracts'],
        'invoice' => $_POST['invoice'],
        'equipment' => $_POST['equipment'],
        'staff' => $_POST['staff'],
        'report' => $_POST['report']
    ];

    $apiEndpoint = 'http://localhost/reporting-dashboard/api/users/create.php';
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

        if (isset($responseData['error']) && $responseData['error']) {
            echo 'Error creating user: ' . $responseData['message'];
        } else {
            echo 'User created successfully.';
        }
    }

    curl_close($request);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
</head>

<body>

    <h2>User Registration</h2>

    <form action="" method="post">
        <!-- Employee ID -->
        <label for="empId">Employee ID:</label>
        <input type="text" id="empId" name="empId" required>

        <br>

        <!-- Name -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="username" required>

        <br>

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <br>

        <!-- Password -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <br>

        <!-- Rights checkboxes -->
        <label>Rights:</label>
        <div>
            <!-- Client -->
            <input type="hidden" name="client" value="0">
            <input type="checkbox" id="client" name="client" value="1">
            <label for="client">Client</label>

            <br>

            <!-- Contracts -->
            <input type="hidden" name="contracts" value="0">
            <input type="checkbox" id="contracts" name="contracts" value="1">
            <label for="contracts">Contracts</label>

            <br>

            <!-- Invoice -->
            <input type="hidden" name="invoice" value="0">
            <input type="checkbox" id="invoice" name="invoice" value="1">
            <label for="invoice">Invoice</label>

            <br>

            <!-- Equipment -->
            <input type="hidden" name="equipment" value="0">
            <input type="checkbox" id="equipment" name="equipment" value="1">
            <label for="equipment">Equipment</label>

            <br>
            <input type="hidden" name="staff" value="0">
            <input type="checkbox" id="staff" name="staff" value="1">
            <label for="equipment">Staff</label>

            <br>
            <input type="hidden" name="report" value="0">
            <input type="checkbox" id="report" name="report" value="1">
            <label for="equipment">Report</label>

            <br>
        </div>

        <br>

        <!-- Submit button -->
        <input type="submit" value="Submit" name="create_user">
    </form>

</body>

<?php

?>

</html>