<?php
session_start();

if (isset($_SESSION['user'])) {
    header("location: dashboard");
    exit();
}
// Includes Global Site URL;
include("includes/site-info.php");

if (isset($_POST["user_signin"])) {

    global $site_url;
    $postData = ['email' => $_POST['email'], 'password' => $_POST['password']];

    $apiEndpoint = $site_url . '/api/users/login.php';
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

        if ($response && $response['success']) {
            $_SESSION['user'] = $response['user'];

            header("location: dashboard");
            exit();
        } else {
            echo 'Login failed. Please check your credentials.';
        }
    }

    curl_close($request);
}

?>


<!DOCTYPE html>
<html lang="en">


<head>
    <title>Login Page</title>
    <!-- Compatibility -->
    <?php include("includes/compatibility.php"); ?>
    <!-- Compatibility -->


    <!-- styles start -->
    <?php include("includes/header-styles.php"); ?>
    <!-- styles end -->

</head>

<body>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-4 mt-3">
                                <a href="index">
                                    <span><img src="assets/images/logo-sm.png" alt="" height="70"></span>
                                </a>

                            </div>
                            <h4 class="page-heading">Login to your Account</h4>
                            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" class="p-2">
                                <div class="form-group no-box-shadow">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                </div>
                                <div class="form-group no-box-shadow">
                                    <a href="forgot-password" class="text-danger float-right">Forgot your password?</a>
                                    <label for="password">Password</label>
                                    <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password">
                                </div>

                                <div class="form-group mb-4 pb-3 no-box-shadow">
                                    <div class="custom-control custom-checkbox checkbox-primary">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                        <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>
                                <div class="mb-3 text-center">
                                    <button class="btn btn-primary btn-block" type="submit" name="user_signin"> Sign In </button>
                                </div>
                            </form>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <!-- <div class="row mt-4">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted mb-0">Don't have an account? <a href="signup.php" class="text-dark ml-1"><b>Request Account</b></a></p>
                        </div>
                    </div> -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    <?php include("includes/footer-scripts.php"); ?>

</body>

</html>