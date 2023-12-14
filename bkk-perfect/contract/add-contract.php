<?php
// Includes Global Site URL;
include("../includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Add Contract</title>

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
            <h1 class="text-center page-heading mb-5">Add Contract</h1>
          </div>
          <!-- PAGE HEADING -->

          <div class="form-main-layout pb-5">

            <!-- start  -->
            <div class="row">
              <div class="col-12">
                <div>
                  <h4 class="header-title mb-4 ">Add Contract Details</h4>
                </div>
              </div>
            </div>
            <!-- end row -->


            <form class="form-horizontal">
              <!-- <div class="form-group row">
                <label class="col-md-2 col-form-label" for="contract_function">Select contracts Function</label>
                <div class="col-md-10">
                  <select id="contract_function" class="form-control">
                    <option value="contracts_edit">Edit Contracts</option>
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
              <div class="form-group form-group row">
                <label class="col-md-2 col-form-label" for="contract_next_due_date">Next Due Date</label>
                <div class="col-md-10">
                  <div class="input-group">
                    <input type="date" class="form-control" placeholder="MM/DD/YY" id="contract_next_due_date">
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label for="contract_amount" class="col-md-2 control-label">Contract Amount</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="contract_amount">
                </div>
              </div>
              <div class="form-group form-group row">
                <label class="col-md-2 col-form-label" for="contract_renewal_date">Contract Renewal Date</label>
                <div class="col-md-10">
                  <div class="input-group">
                    <input type="date" class="form-control" placeholder="MM/DD/YY" id="contract_renewal_date">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2 col-form-label" for="contract_returned">Contract Returned</label>
                <div class="col-md-10">
                  <select id="contract_returned" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0" selected>No</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-2 col-form-label" for="contract_additional_comments">Additional Comments</label>
                <div class="col-md-10">
                  <textarea class="form-control" rows="5" id="contract_additional_comments"></textarea>
                </div>
              </div>


              <!-- button -->
              <div class="form-group btn-form-group row mb-0 pt-4">
                <div class="col-md-7 m-auto">
                  <button type="submit" class="btn btn-primary btn-lg w-100 d-block">Add Contract</button>
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