<?php
session_start();
// Includes Global Site URL;
include("../includes/site-info.php");
$error = "";
global $site_url;

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

    $apiEndpoint = $site_url . '/api/users/create.php';
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
            $error = 'Error creating user: ' . $responseData['message'];
        } else {
            $error = 'User created successfully.';
        }
    }

    curl_close($request);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create User/Admin</title>

    <!-- Compatibility -->
    <?php include("../includes/compatibility.php"); ?>
    <!-- Compatibility -->


    <!-- styles start -->
    <?php include("../includes/header-styles.php"); ?>
    <!-- styles end -->
</head>

<body data-layout="horizontal">
    <!-- Begin page -->
    <div id="wrapper">

        <!-- Navigation Bar-->
        <?php include("../includes/header.php"); ?>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Start container-fluid -->
                <div class="container-fluid">

                    <!-- PAGE HEADING -->
                    <div class="page-heading-wrapper">
                        <h1 class="text-center page-heading mb-5">Create User</h1>
                    </div>
                    <!-- PAGE HEADING -->

                    <div class="form-main-layout pb-5">

                        <!-- start  -->
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-4 ">Add User Details</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <form class="form-horizontal" action="" method="post">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="empId">Empolyee Id:</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="empId" name="empId" required>
                                </div>
                            </div>
                            <div class="form-group form-group row">
                                <label class="col-md-2 col-form-label" for="name">Name:</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" name="username" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-2 control-label">Email:</label>
                                <div class="col-md-10">
                                    <input type="email" id="email" name="email" required class="form-control">
                                </div>
                            </div>
                            <div class="form-group form-group row">
                                <label class="col-md-2 col-form-label" for="password">Password:</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <input class="form-control" type="password" id="password" name="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <!-- Rights checkboxes -->
                                <label class="col-md-2 col-form-label">Rights to Give:</label>
                                <div class="col-md-10 row gap-10 align-items-center">





                                    <!-- Client -->
                                    <div class="custom-control custom-radio custom-checkbox">
                                        <input type="hidden" name="client" value="0">
                                        <input type="checkbox" class="custom-control-input" id="client" name="client" value="1">
                                        <label class="custom-control-label" for="client">Client</label>
                                    </div>

                                    <!-- Contracts -->
                                    <div class="custom-control custom-radio custom-checkbox">
                                        <input type="hidden" name="contracts" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="contracts" name="contracts" value="1" />
                                        <label class="custom-control-label" for="contracts">Contracts</label>
                                    </div>

                                    <!-- Invoice -->
                                    <div class="custom-control custom-radio custom-checkbox">
                                        <input type="hidden" name="invoice" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="invoice" name="invoice" value="1" />
                                        <label class="custom-control-label" for="invoice">Invoice</label>
                                    </div>

                                    <!-- Equipment -->
                                    <div class="custom-control custom-radio custom-checkbox">
                                        <input type="hidden" name="equipment" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="equipment" name="equipment" value="1" />
                                        <label class="custom-control-label" for="equipment">Equipment</label>
                                    </div>

                                    <!-- Staff -->
                                    <div class="custom-control custom-radio custom-checkbox">
                                        <input type="hidden" name="staff" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="staff" name="staff" value="1" />
                                        <label class="custom-control-label" for="staff">Staff</label>
                                    </div>

                                    <!-- Report -->
                                    <div class="custom-control custom-radio custom-checkbox">
                                        <input type="hidden" name="report" value="0" />
                                        <input type="checkbox" class="custom-control-input" id="report" name="report" value="1" />
                                        <label class="custom-control-label" for="report">Report</label>
                                    </div>

                                </div>
                            </div>

                            <p class="text-success text-bold font-bold fw-700 text-center">
                                <?php
                                echo $error;
                                ?>
                            </p>

                            <!-- button -->
                            <div class="form-group btn-form-group row mb-0 pt-4">
                                <div class="col-md-7 m-auto">
                                    <button type="submit" value="Create User" name="create_user" class="btn btn-primary btn-lg w-100 d-block">
                                        Create User
                                    </button>
                                </div>
                            </div>
                            <!-- button -->
                        </form>
                    </div>
                    <!-- end container-fluid -->

                    <!-- Footer Start -->
                    <?php include("../includes/footer.php"); ?>
                    <!-- end Footer -->
                </div>
                <!-- end content -->
            </div>
            <!-- END content-page -->
        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <?php //include("../includes/right-bar.php"); 
        ?>
        <!-- /Right-bar -->


        <!-- Scripts start -->
        <?php include("../includes/footer-scripts.php"); ?>
        <!-- Scripts end-->


</body>

</html>