<?php

include('login.php');
$con = mysqli_connect("localhost","root","","GreatVoyagers");
$emp = $_SESSION['emp_id'];
$out = "DELETE FROM login_sessions WHERE emp_id = '$emp'" ;

if (!isset($_SESSION['emp_id']))
{
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}

if(isset($_GET['logout']))
{
    mysqli_query($con,$out) ;
    session_destroy();
    unset($_SESSION['NAME']);
    header('location: index.php');
}

include('./includes/header.php');

?>
<body>
<div class="container-scroller">
  <!-- partial top nav-bar -->
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
              <i class="mdi mdi-home"></i>
            </span> Dashboard </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div> 
        <?php

          include('./includes/dashboard-body/recents-task.php');
          include('./includes/dashboard-body/project-status.php');

        ?>
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
</body>
</html>