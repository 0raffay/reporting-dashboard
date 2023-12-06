<?php
// Includes Global Site URL;
include("../includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Client</title>

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
                        <h1 class="text-center page-heading mb-5">View Clients</h1>
                    </div>
                    <!-- PAGE HEADING -->

                    <div class="form-main-layout pb-5">

                        <!-- start  -->
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-4 ">View Client Details</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <div class="mt-5">
                            <table id="basic_table" class="table table-bordered table-bordered   " style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead class="thead-dark">
                                    <!-- COLUMN NAMES -->
                                    <tr>
                                        <th>Customer No.</th>
                                        <th>Company Name:</th>
                                        <th>Address Line 1</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Postcode</th>
                                        <th>Phone Number</th>
                                        <th>Email Address</th>
                                        <th>Functions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- BODY -->
                                    <tr>
                                        <td><strong>#87230197</strong></td>
                                        <td>Lunar Innovations</td>
                                        <td>Ave Street, 24th Edinburgh</td>
                                        <td>Austria</td>
                                        <td>Austrailia</td>
                                        <td>AB-01293</td>
                                        <td>+61 231 1233</td>
                                        <td>lunar@info.com</td>
                                        <td class="function_button_wrap">
                                            <a class="btn btn-primary flex-1" href="client/edit-client.php">Edit</a>
                                            <button class="btn btn-warning flex-1" data-toggle="modal" data-target="#viewClientModal" type="button">View</button>
                                            <button type="button" class="btn btn-danger flex-1 waves-effect waves-light btn-sm sa-warning" id="">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#87230197</strong></td>
                                        <td>Lunar Innovations</td>
                                        <td>Ave Street, 24th Edinburgh</td>
                                        <td>Austria</td>
                                        <td>Austrailia</td>
                                        <td>AB-01293</td>
                                        <td>+61 231 1233</td>
                                        <td>lunar@info.com</td>
                                        <td class="function_button_wrap">
                                            <a class="btn btn-primary flex-1" href="client/edit-client.php">Edit</a>
                                            <button class="btn btn-warning flex-1" data-toggle="modal" data-target="#viewClientModal" type="button">View</button>
                                            <button type="button" class="btn btn-danger flex-1 waves-effect waves-light btn-sm sa-warning" id="">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#87230197</strong></td>
                                        <td>Lunar Innovations</td>
                                        <td>Ave Street, 24th Edinburgh</td>
                                        <td>Austria</td>
                                        <td>Austrailia</td>
                                        <td>AB-01293</td>
                                        <td>+61 231 1233</td>
                                        <td>lunar@info.com</td>
                                        <td class="function_button_wrap">
                                            <a class="btn btn-primary flex-1" href="client/edit-client.php">Edit</a>
                                            <button class="btn btn-warning flex-1" data-toggle="modal" data-target="#viewClientModal" type="button">View</button>
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
        <div class="modal fade" id="viewClientModal" tabindex="-1" role="dialog" aria-labelledby="viewClientModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title page-heading w-50 mr-0 ml-0 d-block" id="exampleModalLongTitle">Viewing Client: <span id="client-name"></span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body py-4">
                        <div class="form-main-layout">

                            <form class="form-horizontal">

                                <div class="form-group row">
                                    <label for="client_customer_phone" class="col-md-2 control-label">Customer Number</label>
                                    <div class="col-md-10">
                                        <input readonly type="email" class="form-control" id="client_customer_phone" value="#2931723123">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_company_name" class="col-md-2 control-label">Company Name</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="client_company_name" value="Lunar Innovations">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_address_1" class="col-md-2 control-label">Address Line 1</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="client_address_1" value="1234 AWE st. Linen City,">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_address_2" class="col-md-2 control-label">Address line 2</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="client_address_2" value="1234 AWE st. Linen City,">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_city" class="col-md-2 control-label">City</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="client_city" value="Texas City">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_state" class="col-md-2 control-label">State</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="client_state" value="TX">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_postcode" class="col-md-2 control-label">Postcode</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="client_postcode" value="1203">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="client_postcode_address_1" class="col-md-2 control-label">Postcode Address Line 1</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="client_postcode_address_1" value="ABC Road">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_postcode_address_2" class="col-md-2 control-label">Postcode Address Line 2</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="client_postcode_address_2" value="Vhe, St 42.">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="client_postalcity" class="col-md-2 control-label">Postal City</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="client_postalcity" value="Austrich">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_postalstate" class="col-md-2 control-label">Postal State</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="client_postalstate" value="AW">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_postal_postcode" class="col-md-2 control-label">Postal Postcode</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="client_postal_postcode" value="12312">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_phone" class="col-md-2 control-label">Phone Number</label>
                                    <div class="col-md-10">
                                        <input readonly type="number" class="form-control" id="client_phone" value="+61 283 1283">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_fax_number" class="col-md-2 control-label">Fax Number</label>
                                    <div class="col-md-10">
                                        <input readonly type="number" class="form-control" id="client_fax_number" value="4578-23700-23701">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_main_contact" class="col-md-2 control-label">Main Contact</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="client_main_contact" value="lunar@support.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_email_address" class="col-md-2 control-label">Email Address</label>
                                    <div class="col-md-10">
                                        <input readonly type="email" class="form-control" id="client_email_address" value="lunar@info.com">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="client_additional_comments">Additional Comments</label>
                                    <div class="col-md-10">
                                        <textarea readonly class="form-control" rows="5" id="client_additional_comments">Some Details About the client.</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="client_current">Current</label>
                                    <div class="col-md-10">
                                        <input readonly class="form-control" type="text" id="current_client" value="Yes">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-danger btn-lg">Close</button>
                        <a type="button" href="client/edit-client.php" class="text-white btn btn-primary btn-lg">Edit</a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>