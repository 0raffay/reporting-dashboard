<?php
session_start();
// Includes Global Site URL;
include("includes/site-info.php");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>

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

                    <div class="row">
                        <div class="col-12">
                            <div>
                                <h4 class="page-heading mb-3">Welcome !</h4>
                            </div>
                          
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div>
                                <div class="card-box widget-inline">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 widget-inline-box">
                                            <div class="text-center p-3">
                                                <h2 class="mt-2"><i class="text-primary mdi mdi-access-point-network mr-2"></i> <b>8954</b></h2>
                                                <p class="text-muted mb-0">Lifetime total sales</p>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-sm-6 widget-inline-box">
                                            <div class="text-center p-3">
                                                <h2 class="mt-2"><i class="text-teal mdi mdi-airplay mr-2"></i> <b>7841</b></h2>
                                                <p class="text-muted mb-0">Income amounts</p>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-sm-6 widget-inline-box">
                                            <div class="text-center p-3">
                                                <h2 class="mt-2"><i class="text-info mdi mdi-black-mesa mr-2"></i> <b>6521</b></h2>
                                                <p class="text-muted mb-0">Total users</p>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-sm-6">
                                            <div class="text-center p-3">
                                                <h2 class="mt-2"><i class="text-danger mdi mdi-cellphone-link mr-2"></i> <b>325</b></h2>
                                                <p class="text-muted mb-0">Total visits</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-box">
                                <h5 class="mt-0 font-14">Total Revenue</h5>
                                <div class="text-center">
                                    <ul class="list-inline chart-detail-list">
                                        <li class="list-inline-item">
                                            <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-primary"></i>Series A</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-muted"></i>Series B</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="dashboard-bar-stacked" class="morris-chart" dir="ltr" style="height: 300px;"></div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card-box">
                                <h5 class="mt-0 font-14">Sales Analytics</h5>
                                <div class="text-center">
                                    <ul class="list-inline chart-detail-list">
                                        <li class="list-inline-item">
                                            <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-primary"></i>Mobiles</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-info"></i>Tablets</p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="dashboard-line-chart" class="morris-chart" dir="ltr" style="height: 300px;"></div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->


                    <!-- end row -->

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



    <?php include("includes/footer-scripts.php"); ?>

    <script src="assets/libs/morris-js/morris.min.js"></script>
    <script src="assets/libs/raphael/raphael.min.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>



</body>


</html>