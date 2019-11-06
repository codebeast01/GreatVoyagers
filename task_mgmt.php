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
              <i class="mdi mdi-chart-bar"></i>
            </span> Task Management </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div>
        
        <div class="row">
          <?php
              include('./includes/taskmgmt/assign_task.php');
          ?>
        </div>
        <div class="row assign-form">
          
        </div>
        <br>
        <center>
          <button type="submit" class="btn btn-gradient-success btn-lg mr-2 assigned" name="assignment">View All Assignments</button>
        </center>    
        <br>
        <div class="row assigned">
          
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
 <script type="text/javascript">
    $(document).ready(function(){
        $(".assigned").click(function(){
            $("div.assigned").load("includes/taskmgmt/table.php");
        });
    });
  </script>  
  <script type="text/javascript">
    $(document).ready(function(){
        $(".assign-form").click(function(){
            $("div.assign-form").load("includes/taskmgmt/assign.php");
        });
    });
  </script> 
</body>
</html>