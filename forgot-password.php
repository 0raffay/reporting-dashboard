<?php
// Includes Global Site URL;
include("includes/site-info.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password</title>
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
                            <div class="text-center">
                                <p class="text-muted w-75 mx-auto"> Enter your email address and we'll send you an email with instructions to reset your password. </p>
                            </div>
                            <form action="<?php $_SERVER["PHP_SELF"]?>" class="p-2">
                                <div class="form-group">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                </div>
                                <div class="mb-3 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> Reset Password </button>
                                </div>
                            </form>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <div class="row mt-4">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted mb-0">Back to <a href="index" class="text-dark ml-1"><b>Sign In</b></a></p>
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


<!-- Mirrored from coderthemes.com/simple/layouts/horizontal/pages-forget-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2023 11:57:32 GMT -->

</html>