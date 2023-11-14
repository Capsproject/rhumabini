
<style>
    .col-sm-12.slider {
        background-color: #f5f5f5;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .col-sm-12.slider h3 {
        margin-bottom: 0;
    }
</style>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>RHU Management System ||| Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <style>
  .yown {
    height: 80px;
    position: absolute;
    
  }
</style>
 
 <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="dashboard.php">
            <strong style="color: white;">Rhu</strong>
          </a>
         
        </div>
                <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
              
  
        <img class="yown" src="/rural/images/bluelogo.png"  alt="" style="left: 10px; ">
         
          <ul class="navbar-nav navbar-nav-right ml-auto">
       
      
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle ml-2" src="../admin/images/fefbd421431dfb07c63c7e71ac7c7a5d1699310710.jpg"><span class="font-weight-normal"> haec mendoza </span></a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                <img class="img-xs rounded-circle ml-2" src="../admin/images/fefbd421431dfb07c63c7e71ac7c7a5d1699310710.jpg">
                <img class="yown" src="/rural/images/bluelogo.png"  alt="" style="left: 10px; ">
                  <p class="mb-1 mt-3">haec mendoza</p>
                  <p class="font-weight-light text-muted mb-0">haecmendoza@gmail.com</p>                </div>
                <a class="dropdown-item" href="patient-profile.php"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile</a>
                <a class="dropdown-item" href="change-password.php"><i class="dropdown-item-icon icon-energy text-primary"></i> Setting</a>
                <a class="dropdown-item" href="logout.php"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                <img class="pictuy rounded-circle" style=" height: 150px; width: 150px;" src="../admin/images/fefbd421431dfb07c63c7e71ac7c7a5d1699310710.jpg"> </span></a>
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                                   
                </div>
             
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="patient-profile.php">
                <span class="menu-title">My Profile</span>
                <i class="icon-user menu-icon"></i>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="change-password.php">
                <span class="menu-title">Setting</span>
                <i class="icon-settings menu-icon"></i>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <span class="menu-title">Sign Out</span>
                <i class="icon-power menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view-notice.php">
                <span class="menu-title">View Notice</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="view-cert.php">
                <span class="menu-title">View Certificate</span>
                <i class="icon-doc menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row purchace-popup">
                        <div class="col-12 stretch-card grid-margin">
                            <div class="card card-secondary">
                                <span class="card-body d-lg-flex align-items-center">
                                <body>
                    <div class="container">
                        
                        <div class="col-sm-12 slider">
                            <p><i class="icon-doc"></i> Attachment Files</p>
                            <h3>Download Certificate <a href="" download>Here</a></h3>
                        </div>
                    </div>
                </body>

                </html>




                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                 <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block" style="color: blue;"> RHU Management System</span>
              
            </div>
          </footer>                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>
</html>
