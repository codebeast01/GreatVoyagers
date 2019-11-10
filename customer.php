<?php
  
  $con=mysqli_connect("localhost", "root", "", "GreatVoyagers");
  $result1=FALSE;
  $result2=FALSE;
  $res1=FALSE;
  $res2=FALSE;
  if (isset($_POST['submit'])) {
    session_start();

    $fname = mysqli_real_escape_string($con,$_POST['fname']);
    $lname = mysqli_real_escape_string($con,$_POST['lname']);
    $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
    $dob = mysqli_real_escape_string($con,$_POST['dob']);
    $gender = mysqli_real_escape_string($con,$_POST['gender']);
    $aadhar = mysqli_real_escape_string($con,$_POST['aadhar']);
    $pan = mysqli_real_escape_string($con,$_POST['pan']);
    $country = mysqli_real_escape_string($con,$_POST['country']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $state = mysqli_real_escape_string($con,$_POST['state']);
    $add1 = mysqli_real_escape_string($con,$_POST['add1']);
    $add2 = mysqli_real_escape_string($con,$_POST['add2']);
    $city = mysqli_real_escape_string($con,$_POST['city']);
    $zip = mysqli_real_escape_string($con,$_POST['zip']);
    $pass= mysqli_real_escape_string($con,$_POST['pass']);
    $pass_exp= mysqli_real_escape_string($con,$_POST['pass_exp']);
     
    $sel="select*from customer where email='$email'";
    $res=mysqli_query($conn,$sel);
    $row=mysqli_fetch_array($res,MYSQLI_BOTH);
    if($row['4']==$email)
      {
  echo "emailid already exists.";
  }
  else
  {

    $query1= "INSERT into customer(fname,lname,email, aadhar, pan, dob, country, city, state, mobile, zip, add1, add2, gender,pass,pass_exp ) VALUES('$fname', '$lname', '$email', '$aadhar', '$pan', '$dob', '$country', '$city', '$state', '$mobile', '$zip', '$add1', '$add2', '$gender','$pass','$pass_exp' )";

  }

  }
  if(isset($_POST['delete'])){
    $id=mysqli_real_escape_string($con, $_POST['user']);
    $aadhar=mysqli_real_escape_string($con, $_POST['adhar']);

    $query1="DELETE FROM customer WHERE email='$id' AND aadhar='$aadhar'";

    $res1=mysqli_query($con, $query1);
    $res2=mysqli_query($con, $query2);
  }
  mysqli_close($con);

?>
<?php

<?php

include('./includes/header.php');

?>
<body>
<div class="container-scroller">
  <!-- partial top nav-bar-->
  <?php

    include('./includes/nav.php');

  ?>
  <!-- partial -->

  <div class="container-fluid page-body-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <?php

      include('./includes/sidebar.php');

    ?>    
    <!-- partial -->

    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
              <i class="mdi mdi-library-plus"></i>
            </span> Customer Registration </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div>
        <div class="row">
          <div class="col-md-6 stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
              <div class="card-body">
                <a href="#" class="new-link">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  </a>
                <h4 class="font-weight-normal mb-3">New Customer<i class="mdi mdi-chart-line mdi-24px float-right"></i>
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card grid-margin">
            <div class="card bg-gradient-dark card-img-holder text-white">
              <div class="card-body">
                <a href="#" class="existing-link">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  </a>
                <h4 class="font-weight-normal mb-3">Existing Customer<i class="mdi mdi-diamond mdi-24px float-right"></i>
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="row newform" style="display: none;">
          <?php
              include('includes/customer/new.php');

          ?>
        </div>
        <div class="row existingform" style="display: none;">
          <?php
              include('includes/customer/existing.php');

          ?>
            
        </div>
      </div>
      <!-- content-wrapper ends -->

      <!-- partial:partials/_footer.html -->
      <?php

        include('./includes/footer.php');

      ?>
      <!-- partial -->

    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
  <?php
    include('./includes/script.php');

  ?>
  <!-- Script for customer forms --> 
<script type="text/javascript">
    $(document).ready(function(){
        $(".existing-link").click(function(){
            $("div.newform").hide(500);
            $("div.existingform").show(500);
        });
    });
  </script>  
  <!-- script ends -->
  <script type="text/javascript">
    $(document).ready(function(){
        $(".new-link").click(function(){
            $("div.existingform").hide(500);
            $("div.newform").show(500);
        });
    });
  </script>  
  <!-- script ends -->
  <script>
// Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
  </script>
</body>
</html>