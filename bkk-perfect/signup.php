<?php
// Includes Global Site URL;
include("includes/site-info.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Request an Account</title>
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
                            <h4 class="page-heading">Request an Account</h4>
                            <form action="https://coderthemes.com/simple/layouts/horizontal/mt-3" class="p-2">
                                <div class="form-group">
                                    <label for="username">Name</label>
                                    <input class="form-control" type="text" id="username" required="" placeholder="Michael Zenaty">
                                </div>
                                <div class="form-group">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                </div>
                                <div class="form-group">
                                    <label for="number">Phone Number</label>
                                    <input class="form-control" type="number" required="" id="number" placeholder="+61 123 12314">
                                </div>
                                <div class="form-group mb-4 pb-3">
                                    <div class="custom-control custom-checkbox checkbox-primary">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                        <label class="custom-control-label" for="checkbox-signin">I accept <a href="#">Terms and Conditions</a></label>
                                    </div>
                                </div>
                                <div class="mb-3 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> Request Account </button>
                                </div>
                            </form>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-4">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted mb-0">Already have an account? <a href="index" class="text-dark ml-1"><b>Sign In</b></a></p>
                        </div>
                    </div>

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