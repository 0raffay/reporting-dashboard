<?php
// Includes Global Site URL;
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Administration</title>

    <!-- Compatibility -->
    <?php include("includes/compatibility.php"); ?>
    <!-- Compatibility -->


    <!-- styles start -->
    <?php include("includes/header-styles.php"); ?>
    <!-- styles end -->

</head>

<body data-layout="horizontal">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Navigation Bar-->
        <?php include("includes/header.php"); ?>
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
                        <h1 class="text-center page-heading mb-5">administration</h1>
                    </div>
                    <!-- PAGE HEADING -->

                    <div class="form-main-layout pb-5">

                        <!-- start  -->
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-4 ">administration Details</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="staff_select">Select Staff Member</label>
                                <div class="col-md-10">
                                    <select id="staff_select" class="form-control">
                                        <option value=""></option>
                                        <option value="">Staff 1</option>
                                        <option value="">Staff 2</option>
                                        <option value="">Staff 3</option>
                                        <option value="">Staff 4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staff_name" class="col-md-2 control-label">Staff Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="staff_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staff_email" class="col-md-2 control-label"> Email Address</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="staff_email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staff_sptm_server" class="col-md-2 control-label">SMPTP Server</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="staff_sptm_server">
                                </div>
                            </div>




                            <!-- button -->
                            <div class="form-group btn-form-group row mb-0 pt-4">
                                <div class="col-md-7 m-auto">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 d-block">Update</button>
                                </div>
                            </div>
                            <!-- button -->
                        </form>

                    </div>
                    <!-- end container-fluid -->

                    <!-- Footer Start -->
                    <?php include("includes/footer.php"); ?>
                    <!-- end Footer -->
                </div>
                <!-- end content -->
            </div>
            <!-- END content-page -->
        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <?php //include("includes/right-bar.php"); 
        ?>
        <!-- /Right-bar -->



        <!-- Scripts start -->
        <?php include("includes/footer-scripts.php"); ?>
        <!-- Scripts end-->

</body>

</html>