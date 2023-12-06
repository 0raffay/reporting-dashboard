<?php
// Includes Global Site URL;
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reports</title>

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
                        <h1 class="text-center page-heading mb-5">report</h1>
                    </div>
                    <!-- PAGE HEADING -->

                    <div class="form-main-layout pb-5">

                        <!-- start  -->
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-4 ">report Details</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="report_select">Select report</label>
                                <div class="col-md-10">
                                    <select id="report_select" class="form-control">
                                    <option value="contract_due_for_removal">Contract Due For Removal</option>
                                        <option value="contacts_to_be_returned">Contracts To Be Returned</option>
                                        <option value="invoices_used_by_staff">Invoices Used By Staff</option>
                                        <option value="upcoming_work">Upcoming Work</option>
                                        <option value="customer_work_overview">Customer Work Overview</option>
                                        <option value="clients">Clients</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row m-0  mb-3 mb-md-0">
                                <div class="col-md-4 pr-md-2 p-0 ">
                                    <div class="form-group row">
                                        <label class="col-md-5 col-form-label" for="report_start_date">Report Start Date</label>
                                        <div class="col-md-7">
                                            <input type="date" id="report_start_date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-md-2 p-0 ">
                                    <div class="form-group row">
                                        <label class="col-md-5 col-form-label" for="report_end_date">Report End Date</label>
                                        <div class="col-md-7">
                                            <input type="date" id="report_end_date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4  p-0 ">
                                    <button class="btn btn-lg w-100 d-block btn-success">Add new</button>
                                </div>
                            </div>
                            <div class="alert alert-warning text-warning alert-dismissible fade show" role="alert">
                                <strong>No Reports Found.</strong>
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