<?php
// Includes Global Site URL;
include("../includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Equipment</title>

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
                        <h1 class="text-center page-heading mb-5">Add equipment</h1>
                    </div>
                    <!-- PAGE HEADING -->

                    <div class="form-main-layout pb-5">

                        <!-- start  -->
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-4 ">add Equipment Details</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <form class="form-horizontal">
                            <!-- <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="contract_function">Select equipment Function</label>
                                    <div class="col-md-10">
                                        <select id="contract_function" class="form-control">
                                            <option value="equipment_edit">Edit equipment</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div> -->
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="client_select">Select Client</label>
                                <div class="col-md-10">
                                    <select id="client_select" class="form-control">
                                        <option value=""></option>
                                        <option>Client 1</option>
                                        <option>Client 2</option>
                                        <option>Client 3</option>
                                        <option>Client 5</option>
                                    </select>
                                </div>
                            </div>

                            <!-- BOXES START -->
                            <hr>
                            <div class="row m-0 pt-2">
                                <div class="col-lg-6  pl-0 pr-0 pr-lg-2  ">
                                    <div class="form-group box-form-group">
                                        <div class="form-group-wrapper row p-0 m-0 ">
                                            <label class="col-md-2" for="info_1">Model:</label>
                                            <div class="col-md-10 p-0">
                                                <input type="text" value="" id="info_1" class="form-control">
                                            </div>
                                        </div>
                                        <label class="col-md-12 col-form-label" for="notes_1">Notes:</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" id="notes_1" class="form-control" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6  pl-0 pr-0 pl-lg-2 ">
                                    <div class="form-group box-form-group">
                                        <div class="form-group-wrapper row p-0 m-0 ">
                                            <label class="col-md-2" for="info_1">Serial No:</label>
                                            <div class="col-md-10 p-0">
                                                <input type="text" value="" id="info_1" class="form-control">
                                            </div>
                                        </div>
                                        <label class="col-md-12 col-form-label" for="notes_1">Special Notes:</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" id="notes_1" class="form-control" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 p-0 text-center">
                                    <button class="btn-danger btn" data-delete>Delete</button>
                                </div>
                            </div>

                            <div class="appended_divs">

                            </div>

                            <div class="col-12 p-0 py-2">
                                <button class="btn-primary btn" data-add-row >Add More Equipment</button>
                            </div>

                            <!-- BOXES END -->

                            <!-- button -->
                            <div class="form-group btn-form-group row mb-0 pt-4">
                                <div class="col-md-7 m-auto">
                                    <button type="submit"  class=" btn btn-primary btn-lg w-100 d-block">Add Equipment Details </button>
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

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

        <script>
            $("[data-add-row]").click(function(e) {
                e.preventDefault();
                // let _div = $(this).parent().prev().prev().clone()
                let _div =
                    ` <div class="row m-0 pt-2">
                                <div class="col-lg-6  pl-0 pr-0 pr-lg-2  ">
                                    <div class="form-group box-form-group">
                                        <div class="form-group-wrapper row p-0 m-0 ">
                                            <label class="col-md-2" for="info_1">Model:</label>
                                            <div class="col-md-10 p-0">
                                                <input type="text" value="" id="info_1" class="form-control">
                                            </div>
                                        </div>
                                        <label class="col-md-12 col-form-label" for="notes_1">Notes:</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" id="notes_1" class="form-control" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6  pl-0 pr-0 pl-lg-2 ">
                                    <div class="form-group box-form-group">
                                        <div class="form-group-wrapper row p-0 m-0 ">
                                            <label class="col-md-2" for="info_1">Serial No:</label>
                                            <div class="col-md-10 p-0">
                                                <input type="text" value="" id="info_1" class="form-control">
                                            </div>
                                        </div>
                                        <label class="col-md-12 col-form-label" for="notes_1">Special Notes:</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" id="notes_1" class="form-control" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 p-0 text-center">
                                    <button class="btn-danger btn" data-delete>Delete</button>
                                </div>
                            </div>`;
                $(".appended_divs").prepend(_div)
            })

            $(document).on("click", "[data-delete]", function(e) {
                e.preventDefault();
                $(this).closest('.row').remove();
            });
        </script>

        <!-- Scripts start -->
        <?php include("../includes/footer-scripts.php"); ?>
        <!-- Scripts end-->

  
</body>

</html>