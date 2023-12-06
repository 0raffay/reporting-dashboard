<?php
// Includes Global Site URL;
include("../includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Add Client</title>

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
            <h1 class="text-center page-heading mb-5">Add Client</h1>
          </div>
          <!-- PAGE HEADING -->

          <div class="form-main-layout pb-5">

            <!-- start  -->
            <div class="row">
              <div class="col-12">
                <div>
                  <h4 class="header-title mb-4 ">Add Clients Details</h4>
                </div>
              </div>
            </div>
            <!-- end row -->


            <form class="form-horizontal">
              <!-- <div class="form-group row">
                <label class="col-md-2 col-form-label" for="client_function">Select Clients Function</label>
                <div class="col-md-10">
                  <select id="client_function" class="form-control">
                    <option value="clients_edit">Clients Edit</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div> -->
              <!-- <div class="form-group row">
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
              </div> -->
              <div class="form-group row">
                <label for="client_company_name" class="col-md-2 control-label">Company Name</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_company_name">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_address_1" class="col-md-2 control-label">Address Line 1</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_address_1">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_address_2" class="col-md-2 control-label">Address line 2</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_address_2">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_city" class="col-md-2 control-label">City</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_city">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_state" class="col-md-2 control-label">State</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_state">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_postcode" class="col-md-2 control-label">Postcode</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_postcode">
                </div>
              </div>

              <div class="form-group row">
                <label for="client_postcode_address_1" class="col-md-2 control-label">Postcode Address Line 1</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_postcode_address_1">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_postcode_address_2" class="col-md-2 control-label">Postcode Address Line 2</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_postcode_address_2">
                </div>
              </div>

              <div class="form-group row">
                <label for="client_postalcity" class="col-md-2 control-label">Postal City</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_postalcity">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_postalstate" class="col-md-2 control-label">Postal State</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_postalstate">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_postal_postcode" class="col-md-2 control-label">Postal Postcode</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_postal_postcode">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_phone" class="col-md-2 control-label">Phone Number</label>
                <div class="col-md-10">
                  <input type="number" class="form-control" id="client_phone">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_fax_number" class="col-md-2 control-label">Fax Number</label>
                <div class="col-md-10">
                  <input type="number" class="form-control" id="client_fax_number">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_main_contact" class="col-md-2 control-label">Main Contact</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_main_contact">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_email_address" class="col-md-2 control-label">Email Address</label>
                <div class="col-md-10">
                  <input type="email" class="form-control" id="client_email_address">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_customer_phone" class="col-md-2 control-label">Customer Number</label>
                <div class="col-md-10">
                  <input type="email" class="form-control" id="client_customer_phone">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-2 col-form-label" for="client_additional_comments">Additional Comments</label>
                <div class="col-md-10">
                  <textarea class="form-control" rows="5" id="client_additional_comments"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-2 col-form-label" for="client_current">Current</label>
                <div class="col-md-10">
                  <select id="client_current" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
              </div>


              <!-- button -->
              <div class="form-group btn-form-group row mb-0 pt-4">
                <div class="col-md-7 m-auto">
                  <button type="submit" class="btn btn-primary btn-lg w-100 d-block">Add Client</button>
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