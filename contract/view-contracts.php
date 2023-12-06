<?php
// Includes Global Site URL;
include("../includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Contracts</title>

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
                        <h1 class="text-center page-heading mb-5">View contracts</h1>
                    </div>
                    <!-- PAGE HEADING -->

                    <div class="form-main-layout pb-5">

                        <!-- start  -->
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-4 ">View contract Details</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <div class="mt-5">
                            <table id="basic_table" class="table table-bordered table-bordered  " style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead class="thead-dark">
                                    <!-- COLUMN NAMES -->
                                    <tr>
                                        <th>Client Name</th>
                                        <th>Next Due Date</th>
                                        <th>Contract Renewal Date</th>
                                        <th>Contract Amount</th>
                                        <th>Contract Returned</th>
                                        <th>Additional Comments</th>
                                        <th>Functions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- BODY -->
                                    <tr>
                                        <td><strong>Lunar Innovations</strong></td>
                                        <td>24th Jan, 2023</td>
                                        <td>24th Jan, 2024</td>
                                        <td>$1,000</td>
                                        <td>No</td>
                                        <td>Some Details Here.</td>
                                        <td class="function_button_wrap">
                                            <a class="btn btn-primary flex-1" href="contract/edit-contract.php">Edit</a>
                                            <button class="btn btn-warning flex-1" data-toggle="modal" data-target="#viewContractModal" type="button">View</button>
                                            <button type="button" class="btn btn-danger flex-1 waves-effect waves-light btn-sm sa-warning" id="">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Lunar Innovations</strong></td>
                                        <td>24th Jan, 2023</td>
                                        <td>24th Jan, 2024</td>
                                        <td>$1,000</td>
                                        <td>No</td>
                                        <td>Some Details Here.</td>
                                        <td class="function_button_wrap">
                                            <a class="btn btn-primary flex-1" href="contract/edit-contract.php">Edit</a>
                                            <button class="btn btn-warning flex-1" data-toggle="modal" data-target="#viewContractModal" type="button">View</button>
                                            <button type="button" class="btn btn-danger flex-1 waves-effect waves-light btn-sm sa-warning" >Delete</button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


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


        <?php include("../includes/view-page-footer-scripts.php"); ?>


        <!-- Modal -->
        <div class="modal fade" id="viewContractModal" tabindex="-1" role="dialog" aria-labelledby="viewContractModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title page-heading w-50 mr-0 ml-0 d-block" id="exampleModalLongTitle">Viewing contract: <span id="contract-name"></span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body py-4">
                        <div class="form-main-layout">


                            <form class="form-horizontal">
                            <div class="form-group row">
                                    <label for="client_name" class="col-md-2 control-label">Client Name</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" value="lunar Innovations" class="form-control" id="client_name">
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
                                        <input type="text" value="NO" readonly class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="contract_additional_comments">Additional Comments</label>
                                    <div class="col-md-10">
                                        <textarea readonly class="form-control" rows="5" id="contract_additional_comments">Some Details Here.</textarea>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-danger btn-lg">Close</button>
                        <a type="button" href="contract/edit-contract.php" class="text-white btn btn-primary btn-lg">Edit</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>