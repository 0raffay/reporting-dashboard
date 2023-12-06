<?php
// Includes Global Site URL;
include("../includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Edit Client</title>

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
            <h1 class="text-center page-heading mb-5">Edit Client</h1>
          </div>
          <!-- PAGE HEADING -->

          <div class="form-main-layout pb-5">

            <!-- start  -->
            <div class="row">
              <div class="col-12">
                <div>
                  <h4 class="header-title mb-4 ">Edit Clients Details</h4>
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
              <div class="form-group row bg-dark text-white">
                <label class="col-md-2 col-form-label" for="client_select">Select Client</label>
                <div class="col-md-10">
                  <select id="client_select" class="form-control">
                    <option value=""></option>
                    <option>ABU Inovate</option>
                    <option selected>Lunar Innovations</option>
                    <option>II Animations</option>
                    <option>TBH Works</option>
                  </select>
                </div>
              </div>
              <hr>
              <div class="form-group row">
                <label for="client_customer_phone" class="col-md-2 control-label">Customer Number</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_customer_phone" value="#2931723123">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_company_name" class="col-md-2 control-label">Company Name</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_company_name"  value="Lunar Innovations">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_address_1" class="col-md-2 control-label">address Line 1</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_address_1"  value="1234 AWE st. Linen City,">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_address_2" class="col-md-2 control-label">address line 2</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_address_2" value="1234 AWE st. Linen City,">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_city" class="col-md-2 control-label">City</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_city" value="Texas City">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_state" class="col-md-2 control-label">State</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_state" value="TX">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_postcode" class="col-md-2 control-label">Postcode</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_postcode" value="1203">
                </div>
              </div>

              <div class="form-group row">
                <label for="client_postcode_address_1" class="col-md-2 control-label">Postcode address Line 1</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_postcode_address_1" value="ABC Road">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_postcode_address_2" class="col-md-2 control-label">Postcode address Line 2</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_postcode_address_2" value="Vhe, St 42.">
                </div>
              </div>

              <div class="form-group row">
                <label for="client_postalcity" class="col-md-2 control-label">Postal City</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_postalcity" value="Austrich">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_postalstate" class="col-md-2 control-label">Postal State</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_postalstate" value="AW">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_postal_postcode" class="col-md-2 control-label">Postal Postcode</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_postal_postcode" value="12312">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_phone" class="col-md-2 control-label">Phone Number</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_phone" value="+61 283 1283">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_fax_number" class="col-md-2 control-label">Fax Number</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_fax_number" value="4578-23700-23701">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_main_contact" class="col-md-2 control-label">Main Contact</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="client_main_contact" value="lunar@support.com">
                </div>
              </div>
              <div class="form-group row">
                <label for="client_email_address" class="col-md-2 control-label">Email address</label>
                <div class="col-md-10">
                  <input type="email" class="form-control" id="client_email_address" value="lunar@info.com">
                </div>
              </div>
       

              <div class="form-group row">
                <label class="col-md-2 col-form-label" for="client_Edititional_comments">Edititional Comments</label>
                <div class="col-md-10">
                  <textarea class="form-control" rows="5" id="client_Edititional_comments"> Some Details About the client.</textarea>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-2 col-form-label" for="client_current">Current</label>
                <div class="col-md-10">
                  <select id="client_current" class="form-control">
                    <option value="1" selected>Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
              </div>


              <!-- button -->
              <div class="form-group btn-form-group row mb-0 pt-4">
                <div class="col-md-7 m-auto">
                  <button type="submit" class="btn btn-primary btn-lg w-100 d-block">Save Changes</button>
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