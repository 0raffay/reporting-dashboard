<?php
// Includes Global Site URL;
include("../includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Invoice</title>

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
                        <h1 class="text-center page-heading mb-5">Edit invoice</h1>
                    </div>
                    <!-- PAGE HEADING -->

                    <div class="form-main-layout pb-5">

                        <!-- start  -->
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-4 ">Edit invoice Details</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <form class="form-horizontal">

                            <div class="form-group row">
                                <label for="invoice_number" class="col-md-2 control-label">Invoice Number</label>
                                <div class="col-md-10">
                                    <input type="number" value="12837120" class="form-control" id="invoice_number">
                                </div>
                            </div>
                            <div class="form-group form-group row">
                                <label class="col-md-2 col-form-label" for="invoice_date">Invoice Date</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <input type="text" value="12/12/23" class="form-control" placeholder="MM/DD/YY" id="invoice_date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="client_select">Select Client</label>
                                <div class="col-md-10">
                                    <input type="text" value="Lunar Innovations" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="invoice_job_number" class="col-md-2 control-label">Job Number</label>
                                <div class="col-md-10">
                                    <input type="number" value="9871203" class="form-control" id="invoice_job_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="invoice_report_number" class="col-md-2 control-label">Report Number</label>
                                <div class="col-md-10">
                                    <input type="number" value="123970247" class="form-control" id="invoice_report_number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="invoice_staff_attended_job">Staff Attended Job</label>
                                <div class="col-md-10">
                                    <select id="invoice_staff_attended_job" class="form-control">
                                        <option value=""></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option selected>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>More Than 5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="invoice_completed_work">Completed Work</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="5" id="invoice_completed_work">Some Work Details Here.</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="invoice_work_type">Invoice Work Type</label>
                                <div class="col-md-10">
                                    <select id="invoice_work_type" class="form-control">
                                        <option value=""></option>
                                        <option selected value="Repair">Repair</option>
                                        <option value="Install">Install</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="invoice_quote_number" class="col-md-2 control-label">Quote Number</label>
                                <div class="col-md-10">
                                    <input type="number" value="1203" class="form-control" id="invoice_quote_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="invoice_quoted_work">Invoice Quoted Work</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="5" id="invoice_quoted_work">Some Quoted Work Details Here.</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="invoice_amount" class="col-md-2 control-label">Invoice Amount</label>
                                <div class="col-md-10">
                                    <input type="text" value="$1,322" class="form-control" id="invoice_amount">
                                </div>
                            </div>

                            <!-- button -->
                            <div class="form-group btn-form-group row mb-0 pt-4">
                                <div class="col-md-7 m-auto">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 d-block">Update Invoice</button>
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