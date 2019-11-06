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
              <i class="mdi mdi-format-list-bulleted"></i>
            </span> Task Generation </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="dropdown">
                <button class="btn btn-block btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Customer Request Generator
                </button>
                <div class="dropdown-menu btn-block" aria-labelledby="dropdownMenu2">
                  <!-- Package Links  -->
                  <button class="dropdown-item package1">Visa Only</button>
                  <button class="dropdown-item package2">Hotel Only</button>
                  <button class="dropdown-item package3">Cab Only</button>
                  <button class="dropdown-item package4">Flight Only</button>
                  <button class="dropdown-item package5">International Tour Package</button>
                  <button class="dropdown-item package6">Domestic Tour Package</button>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row form">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
          <br>
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
        $(".package1").click(function(){
            $("div.form").load("includes/taskgeneration/visa.php");
        });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".package2").click(function(){
            $("div.form").load("includes/taskgeneration/hotel.php");
        });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".package3").click(function(){
            $("div.form").load("includes/taskgeneration/cab.php");
        });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".package4").click(function(){
            $("div.form").load("includes/taskgeneration/flight.php");
        });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".package5").click(function(){
            $("div.form").load("includes/taskgeneration/package-5.php");
        });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".package6").click(function(){
            $("div.form").load("includes/taskgeneration/package-5.php");
        });
    });
  </script>
</body>
</html>