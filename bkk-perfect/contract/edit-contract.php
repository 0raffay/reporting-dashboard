<?php
// Includes Global Site URL;
include("../includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Contract</title>

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
                        <h1 class="text-center page-heading mb-5">Edit Contract</h1>
                    </div>
                    <!-- PAGE HEADING -->

                    <div class="form-main-layout pb-5">

                        <!-- start  -->
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-4 ">Edit Contract Details</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <form class="form-horizontal">
                     
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="client_select">Client Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="Lunar Innovations">
                                </div>
                            </div>
                            <div class="form-group form-group row">
                                <label class="col-md-2 col-form-label" for="contract_next_due_date">Next Due Date</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <input readonly type="text" class="form-control" value="24th Jan, 2023" id="contract_next_due_date">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contract_amount" class="col-md-2 control-label">Contract Amount</label>
                                <div class="col-md-10">
                                    <input readonly type="text" class="form-control" value="$1,000" id="contract_amount">
                                </div>
                            </div>
                            <div class="form-group form-group row">
                                <label class="col-md-2 col-form-label" for="contract_renewal_date">Contract Renewal Date</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <input readonly type="text" class="form-control" value="24th Jan, 2023" id="contract_renewal_date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="contract_returned">Contract Returned</label>
                                <div class="col-md-10">
                                    <select id="contract_returned" class="form-control">
                                        <option value="1" selected>Yes</option>
                                        <option value="0" selected>No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="contract_additional_comments">Additional Comments</label>
                                    <div class="col-md-10">
                                        <textarea readonly class="form-control" rows="5" id="contract_additional_comments">Some Details Here.</textarea>
                                    </div>
                                </div>


                            <!-- button -->
                            <div class="form-group btn-form-group row mb-0 pt-4">
                                <div class="col-md-7 m-auto">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 d-block">Update Contract</button>
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