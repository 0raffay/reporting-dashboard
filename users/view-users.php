<?php
// Includes Global Site URL;
include("../includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Users</title>

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
                        <h1 class="text-center page-heading mb-5">View Users</h1>
                    </div>
                    <!-- PAGE HEADING -->

                    <div class="form-main-layout pb-5">

                        <!-- start  -->
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-4 ">View Users Details</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <div class="mt-5">
                            <table id="basic_table" class="table table-bordered table-bordered   " style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead class="thead-dark">
                                    <!-- COLUMN NAMES -->
                                    <tr>
                                        <th>Employee Id</th>
                                        <th>Name:</th>
                                        <th>Email:</th>
                                        <th>Password</th>
                                        <th>Rights</th>
                                        <th>Functions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- BODY -->
                                    <tr>
                                        <td><strong>#87230197</strong></td>
                                        <td>John Smith</td>
                                        <td>john123@yahoo.com</td>
                                        <td>john123</td>
                                        <td>Clients, Contracts, Invoices, Equipment...</td>
                                        <td class="function_button_wrap">
                                            <a class="btn btn-primary flex-1" href="users/edit-user.php">Edit</a>
                                            <button class="btn btn-warning flex-1" data-toggle="modal" data-target="#viewUserModal" type="button">View</button>
                                            <button type="button" class="btn btn-danger flex-1 waves-effect waves-light btn-sm sa-warning" id="">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#87230197</strong></td>
                                        <td>John Smith</td>
                                        <td>john123@yahoo.com</td>
                                        <td>john123</td>
                                        <td>Clients, Contracts, Invoices, Equipment...</td>
                                        <td class="function_button_wrap">
                                            <a class="btn btn-primary flex-1" href="users/edit-user.php">Edit</a>
                                            <button class="btn btn-warning flex-1" data-toggle="modal" data-target="#viewUserModal" type="button">View</button>
                                            <button type="button" class="btn btn-danger flex-1 waves-effect waves-light btn-sm sa-warning" id="">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#87230197</strong></td>
                                        <td>John Smith</td>
                                        <td>john123@yahoo.com</td>
                                        <td>john123</td>
                                        <td>Clients, Contracts, Invoices, Equipment...</td>
                                        <td class="function_button_wrap">
                                            <a class="btn btn-primary flex-1" href="users/edit-user.php">Edit</a>
                                            <button class="btn btn-warning flex-1" data-toggle="modal" data-target="#viewUserModal" type="button">View</button>
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
        <div class="modal fade" id="viewUserModal" tabindex="-1" role="dialog" aria-labelledby="viewUserModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title page-heading w-50 mr-0 ml-0 d-block" id="exampleModalLongTitle">Viewing User: <span id="client-name"></span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body py-4">
                        <div class="form-main-layout">

                            <form class="form-horizontal">

                                <div class="form-group row">
                                    <label for="employeeid" class="col-md-2 control-label">Employee Id</label>
                                    <div class="col-md-10">
                                        <input readonly type="email" class="form-control" id="employeeid" value="#2931723123">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-2 control-label">Name</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="name" value="john Smith">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="user_email" class="col-md-2 control-label">Email</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="user_email" value="john@123.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-2 control-label">Password</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="password" value="John@e1023791">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="rights" class="col-md-2 control-label">Given Rights</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="rights" value="Clients, Contracts, Invoices, Equipment, Users">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-danger btn-lg">Close</button>
                        <a type="button" href="users/edit-user.php" class="text-white btn btn-primary btn-lg">Edit User</a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>