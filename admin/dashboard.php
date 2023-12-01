<style>
.border-left-primary {
  border-left: 0.25rem solid #4e73df !important;
}


.border-left-success {
  border-left: 0.25rem solid #1cc88a !important;
}

.border-left-info {
  border-left: 0.25rem solid #36b9cc !important;
}

.border-left-warning {
  border-left: 0.25rem solid #f6c23e !important;
}

.border-left-danger {
  border-left: 0.25rem solid #e74a3b !important;
}

.border-bottom-primary {
  border-bottom: 0.25rem solid #4e73df !important;
}

.border-bottom-success {
  border-bottom: 0.25rem solid #1cc88a !important;
}

.border-bottom-info {
  border-bottom: 0.25rem solid #36b9cc !important;
}

.border-bottom-warning {
  border-bottom: 0.25rem solid #f6c23e !important;
}

.border-bottom-danger {
  border-bottom: 0.25rem solid #e74a3b !important;
}
  </style>

<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']==0)) {
  header('location:logout.php');
  } else{
   
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>RHU  Management System|||Dashboard</title>
    <!-- plugins:css -->
    
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="shortcut icon" href="/imahe/ut.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <!-- End layout styles -->
   
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     <?php include_once('includes/header.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include_once('includes/sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card  shadow h-100 py-2">
                        <div class="inner-card-text">
                           <?php 
                        $sql1 ="SELECT * from  tblclass";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totclass=$query1->rowCount();
?>
                          <span class="report-title">Total Immunization Vaccine</span>
                          <h4><?php echo htmlentities($totclass);?></h4>
                          <a href="manage-class.php"><span class="report-count"> View Immunization Vaccine</span></a>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md -6 col-xl report-inner-card shadow h-100 py-2">
                        <div class="inner-card-text">
                          <?php 
                        $sql2 ="SELECT * from  tblstudent";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$totstu=$query2->rowCount();
?>
                          <span class="report-title">Total Patients</span>
                          <h4><?php echo htmlentities($totstu);?></h4>
                          <a href="manage-patients.php"><span class="report-count"> View Patients</span></a>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-user"></i>
                        </div>
                      </div>
                      <div class="col-md -6 col-xl report-inner-card  shadow h-100 py-2">
                        <div class="inner-card-text">
                          <?php 
                        $sql3 ="SELECT * from  tblnotice";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$totnotice=$query3->rowCount();
?>
                          <span class="report-title">Total Notice</span>
                          <h4><?php echo htmlentities($totnotice);?></h4>
                          <a href="manage-notice.php"><span class="report-count"> View Notices</span></a>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-doc"></i>
                        </div>
                      </div>
                      <div class="col-md -6 col-xl report-inner-card shadow h-100 py-2">
                        <div class="inner-card-text">
                          <?php 
                        $sql4 ="SELECT * from  tblpublicnotice";
$query4 = $dbh -> prepare($sql4);
$query4->execute();
$results4=$query4->fetchAll(PDO::FETCH_OBJ);
$totpublicnotice=$query4->rowCount();
?>
                          <span class="report-title">Total Public Notice</span>
                          <h4><?php echo htmlentities($totpublicnotice);?></h4>
                          <a href="manage-public-notice.php"><span class="report-count"> View PublicNotices</span></a>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-doc"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card border-left-primary shadow h-100 py-2">
                        <div class="inner-card-body">
                        <?php
$specificClassId = 1; // Class ID for Hepatitis B

$sql = "SELECT * FROM tblstudent WHERE studentclass = :classId";
$query = $dbh->prepare($sql);
$query->bindParam(':classId', $specificClassId, PDO::PARAM_INT);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$numberOfStudentsInClass = $query->rowCount();
?>

        <span class="report-title">Total Registered in BCG</span>
        <h4><?php echo htmlentities($numberOfStudentsInClass); ?></h4>
    </div>
   
</div>
</div>
<div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card border-left-warning shadow h-100 py-2">
                        <div class="inner-card-body">
                        <?php
$specificClassId = 2; // Class ID for Hepatitis B

$sql = "SELECT * FROM tblstudent WHERE studentclass = :classId";
$query = $dbh->prepare($sql);
$query->bindParam(':classId', $specificClassId, PDO::PARAM_INT);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$numberOfStudentsInClass = $query->rowCount();
?>

        <span class="report-title">Total Registered in Hepatitis B </span>
        <h4><?php echo htmlentities($numberOfStudentsInClass); ?></h4>
    </div>
   
</div>
</div>
<div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card border-left-success shadow h-100 py-2">
                        <div class="inner-card-body">
                        <?php
$specificClassId = 3; // Class ID for Hepatitis B

$sql = "SELECT * FROM tblstudent WHERE studentclass = :classId";
$query = $dbh->prepare($sql);
$query->bindParam(':classId', $specificClassId, PDO::PARAM_INT);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$numberOfStudentsInClass = $query->rowCount();
?>

        <span class="report-title">Total Registered in Pentavalent Vaccine </span>
        <h4><?php echo htmlentities($numberOfStudentsInClass); ?></h4>
    </div>
   
</div>
</div>
<div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card  border-left-danger shadow h-100 py-2">
                        <div class="inner-card-body">
                        <?php
$specificClassId = 4; // Class ID for Hepatitis B

$sql = "SELECT * FROM tblstudent WHERE studentclass = :classId";
$query = $dbh->prepare($sql);
$query->bindParam(':classId', $specificClassId, PDO::PARAM_INT);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$numberOfStudentsInClass = $query->rowCount();
?>

        <span class="report-title">Total Registered in Oral Polio Vaccine </span>
        <h4><?php echo htmlentities($numberOfStudentsInClass); ?></h4>
    </div>
   
</div>
</div>
<div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card border-left-info shadow h-100 py-2">
                        <div class="inner-card-body">
                        <?php
$specificClassId = 5; // Class ID for Hepatitis B

$sql = "SELECT * FROM tblstudent WHERE studentclass = :classId";
$query = $dbh->prepare($sql);
$query->bindParam(':classId', $specificClassId, PDO::PARAM_INT);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$numberOfStudentsInClass = $query->rowCount();
?>

        <span class="report-title">Total Registered in Inactivated Polio Vaccine </span>
        <h4><?php echo htmlentities($numberOfStudentsInClass); ?></h4>
    </div>
   
</div>
</div>
<div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card border-left-warning shadow h-100 py-2">
                        <div class="inner-card-body">
                        <?php
$specificClassId = 6; // Class ID for Hepatitis B

$sql = "SELECT * FROM tblstudent WHERE studentclass = :classId";
$query = $dbh->prepare($sql);
$query->bindParam(':classId', $specificClassId, PDO::PARAM_INT);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$numberOfStudentsInClass = $query->rowCount();
?>

        <span class="report-title">Total Registered in Pneumococcal Conjugate Vaccine
</span>
        <h4><?php echo htmlentities($numberOfStudentsInClass); ?></h4>
    </div>
    
</div>
</div>
<div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card border-left-primary shadow h-100 py-2">
                        <div class="inner-card-body">
                        <?php
$specificClassId = 7; // Class ID for Hepatitis B

$sql = "SELECT * FROM tblstudent WHERE studentclass = :classId";
$query = $dbh->prepare($sql);
$query->bindParam(':classId', $specificClassId, PDO::PARAM_INT);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$numberOfStudentsInClass = $query->rowCount();
?>

        <span class="report-title">Total Registered in Measles, Mumps, Rubella</span>
        <h4><?php echo htmlentities($numberOfStudentsInClass); ?></h4>
    </div>
    
</div>


                    
                  </div>
                </div>
              </div>
            </div>
           
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include_once('includes/footer.php');?>
          <!-- partial -->
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
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/moment/moment.min.js"></script>
    <script src="vendors/daterangepicker/daterangepicker.js"></script>
    <script src="vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html><?php }  ?>