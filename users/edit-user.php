<?php
// Includes Global Site URL;
include("../includes/site-info.php");


$error = "";

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
            $error =  'Error creating user: ' . $response['message'];
        } else {
            $error = 'User successfully updated';
        }
    }

    curl_close($request);
}
//<-----------POST REQUEST TO UPDATE THE DATA OF THE LOGGED USER----------->
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit User</title>

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
                        <h1 class="text-center page-heading mb-5">Edit user</h1>
                    </div>
                    <!-- PAGE HEADING -->

                    <div class="form-main-layout pb-5">

                        <!-- start  -->
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-4 ">Edit users Details</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <form class="form-horizontal" action="" method="post">

                            <?php if ($userPermissions['type'] == 2) : ?>
                                <div class="form-group row bg-dark text-white">
                                    <label class="col-md-2 col-form-label" for="user_select">Select user</label>
                                    <div class="col-md-10">
                                        <select id="user_select" class="form-control">
                                            <option value="" <?php isset($_GET["id"]) ? "selected" : ""; ?>>
                                                <?php if (isset($_GET["id"])) {
                                                    echo $_GET["id"];
                                                } ?>
                                            </option>
                                            <option <?php !isset($_GET["id"]) ? "selected" : ""; ?>>John Smith (id=231)</option>
                                            <option>John Lopez (id=312)</option>
                                            <option>John Lincoln (id=123)</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                            <?php endif; ?>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="empId">Empolyee Id:</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="empId" name="empId" value="<?php echo $userData['empId']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group form-group row">
                                <label class="col-md-2 col-form-label" for="name">Name:</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" name="username" value="<?php echo $userData['username']; ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-2 control-label">Email:</label>
                                <div class="col-md-10">
                                    <input type="email" id="email" name="email" value="<?php echo $userData['email']; ?>" required class="form-control">
                                </div>
                            </div>
                            <div class="form-group form-group row">
                                <label class="col-md-2 col-form-label" for="password">Password:</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <input class="form-control" type="password" id="password" name="password" value="john@123" required>
                                    </div>
                                </div>
                            </div>
                            <?php if ($userPermissions['type'] == 2) : ?>
                                <div class="form-group row">
                                    <!-- Rights checkboxes -->
                                    <label class="col-md-2 col-form-label">Rights to Give:</label>
                                    <div class="col-md-10 row gap-10 align-items-center">
                                        <!-- Client -->
                                        <div class="custom-control custom-radio custom-checkbox">
                                            <input checked type="hidden" name="client" value="0">
                                            <input checked type="checkbox" class="custom-control-input" id="client" name="client" value="1" <?php echo ($userData['client'] == 1) ? 'checked' : ''; ?>>
                                            <label class="custom-control-label" for="client">Client</label>
                                        </div>

                                        <!-- Contracts -->
                                        <div class="custom-control custom-radio custom-checkbox">
                                            <input checked type="hidden" name="contracts" value="0" />
                                            <input checked type="checkbox" class="custom-control-input" id="contracts" name="contracts" value="1" <?php echo ($userData['contracts'] == 1) ? 'checked' : ''; ?>>
                                            <label class="custom-control-label" for="contracts">Contracts</label>
                                        </div>

                                        <!-- Invoice -->
                                        <div class="custom-control custom-radio custom-checkbox">
                                            <input type="hidden" name="invoice" value="0" />
                                            <input type="checkbox" class="custom-control-input" id="invoice" name="invoice" value="1" <?php echo ($userData['invoice'] == 1) ? 'checked' : ''; ?>>
                                            <label class="custom-control-label" for="invoice">Invoice</label>
                                        </div>

                                        <!-- Equipment -->
                                        <div class="custom-control custom-radio custom-checkbox">
                                            <input type="hidden" name="equipment" value="0" />
                                            <input type="checkbox" class="custom-control-input" id="equipment" name="equipment" value="1" <?php echo ($userData['equipment'] == 1) ? 'checked' : ''; ?>>
                                            <label class="custom-control-label" for="equipment">Equipment</label>
                                        </div>

                                        <!-- Staff -->
                                        <div class="custom-control custom-radio custom-checkbox">
                                            <input type="hidden" name="staff" value="0" />
                                            <input type="checkbox" class="custom-control-input" id="staff" name="staff" value="1" <?php echo ($userData['staff'] == 1) ? 'checked' : ''; ?>>
                                            <label class="custom-control-label" for="staff">Staff</label>
                                        </div>

                                        <!-- Report -->
                                        <div class="custom-control custom-radio custom-checkbox">
                                            <input type="hidden" name="report" value="0" />
                                            <input type="checkbox" class="custom-control-input" id="report" name="report" value="1" <?php echo ($userData['report'] == 1) ? 'checked' : ''; ?>>
                                            <label class="custom-control-label" for="report">Report</label>
                                        </div>

                                    </div>
                                </div>
                            <?php endif; ?>

                            <p class="text-success text-bold font-bold fw-700 text-center">
                                <?php
                                echo $error;
                                ?>
                            </p>

                            <!-- button -->
                            <div class="form-group btn-form-group row mb-0 pt-4">
                                <div class="col-md-7 m-auto">
                                    <button type="submit" value="Create User" name="create_user" class="btn btn-primary btn-lg w-100 d-block">
                                        Update User
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