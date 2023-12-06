<?php
// Includes Global Site URL;
include("../includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>View invoice</title>

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
                        <h1 class="text-center page-heading mb-5">View invoice</h1>
                    </div>
                    <!-- PAGE HEADING -->

                    <div class="form-main-layout pb-5">

                        <!-- start  -->
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-4 ">View invoice Details</h4>
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
                                        <th>Invoice Date</th>
                                        <th>Invoice Number</th>
                                        <th>Job Number</th>
                                        <th>Report Number</th>
                                        <th>Staff Attended Job</th>
                                        <th>Invoice Amount</th>
                                        <th>Functions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- BODY -->
                                    <tr>
                                        <td><strong>Lunar Innovations</strong></td>
                                        <td>24th Jan, 2023</td>
                                        <td>#12031293</td>
                                        <td>I-12387</td>
                                        <td>R-12307123</td>
                                        <td>21 Staff</td>
                                        <td>$10,293</td>
                                        <td class="function_button_wrap">
                                            <a class="btn btn-primary flex-1" href="invoice/edit-invoice.php">Edit</a>
                                            <button class="btn btn-warning flex-1" data-toggle="modal" data-target="#viewInvoiceModal" type="button">View</button>
                                            <button type="button" class="btn btn-danger flex-1 waves-effect waves-light btn-sm sa-warning" id="">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Lunar Innovations</strong></td>
                                        <td>24th Jan, 2023</td>
                                        <td>#12031293</td>
                                        <td>I-12387</td>
                                        <td>R-12307123</td>
                                        <td>21 Staff</td>
                                        <td>$10,293</td>
                                        <td class="function_button_wrap">
                                            <a class="btn btn-primary flex-1" href="invoice/edit-invoice.php">Edit</a>
                                            <button class="btn btn-warning flex-1" data-toggle="modal" data-target="#viewInvoiceModal" type="button">View</button>
                                            <button type="button" class="btn btn-danger flex-1 waves-effect waves-light btn-sm sa-warning" id="">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Lunar Innovations</strong></td>
                                        <td>24th Jan, 2023</td>
                                        <td>#12031293</td>
                                        <td>I-12387</td>
                                        <td>R-12307123</td>
                                        <td>21 Staff</td>
                                        <td>$10,293</td>
                                        <td class="function_button_wrap">
                                            <a class="btn btn-primary flex-1" href="invoice/edit-invoice.php">Edit</a>
                                            <button class="btn btn-warning flex-1" data-toggle="modal" data-target="#viewInvoiceModal" type="button">View</button>
                                            <button type="button" class="btn btn-danger flex-1 waves-effect waves-light btn-sm sa-warning" id="">Delete</button>
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
        <div class="modal fade" id="viewInvoiceModal" tabindex="-1" role="dialog" aria-labelledby="viewInvoiceModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title page-heading w-50 mr-0 ml-0 d-block" id="exampleModalLongTitle">Viewing invoice: <span id="invoice-name"></span></h5>
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
                                    <label class="col-md-2 col-form-label" for="invoice_next_due_date">Invoice Date</label>
                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <input readonly type="text" class="form-control" value="24th Jan, 2023" id="invoice_next_due_date">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-2 control-label">Invoice Number</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" value="#21931283" id="">
                                    </div>
                                </div>
                                <div class="form-group form-group row">
                                    <label class="col-md-2 col-form-label" for="">Job Number</label>
                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <input readonly type="text" class="form-control" value="I-123071230" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="">Report Number</label>
                                    <div class="col-md-10">
                                        <input type="text" value="R-1293071203" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="">Staff Attended Job</label>
                                    <div class="col-md-10">
                                        <input type="text" value="31 Staff" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="">Completed Work</label>
                                    <div class="col-md-10">
                                        <textarea readonly name="" id="" cols="30" rows="10" class="form-control">Some Details here.</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="">Invoices Work Type</label>
                                    <div class="col-md-10">
                                        <input type="text" value="Labour" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="">Quote Number</label>
                                    <div class="col-md-10">
                                        <input type="text" value="Q-102937" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="">Invoice Quoted Work</label>
                                    <div class="col-md-10">
                                        <textarea readonly name="" id="" cols="30" rows="10" class="form-control">Some More Details here.</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="">Invoice Amount</label>
                                    <div class="col-md-10">
                                        <input type="text" value="$1,0237" readonly class="form-control">
                                    </div>
                                </div>

                                <!-- <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="invoice_additional_comments">Additional Comments</label>
                                    <div class="col-md-10">
                                        <textarea readonly readonly class="form-control" rows="5" id="invoice_additional_comments">Some Details Here.</textarea>
                                    </div>
                                </div> -->

                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-danger btn-lg">Close</button>
                        <a type="button" href="invoice/edit-invoice.php" class="text-white btn btn-primary btn-lg">Edit</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>