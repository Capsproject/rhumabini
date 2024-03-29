<style>
.taba {
  background-color: #0065e9 !important;
	
}
  </style>
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']==0)) {
  header('location:logout.php');
  } else{
   // Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql="delete from tblclass where ID=:rid";
$query=$dbh->prepare($sql);
$query->bindParam(':rid',$rid,PDO::PARAM_STR);
$query->execute();
 echo "<script>alert('Data deleted');</script>"; 
  echo "<script>window.location.href = 'manage-class.php'</script>";     


}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>RHU  Management System|||Manage Class</title>
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
    <link rel="shortcut icon" href="/imahe/ut.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
    <style>
      table {
        border-collapse: separate;
        border-spacing: 0 8px; /* Adjust the spacing between rows */
        width: 100%;
      }
      .font-weight-bold {
        font-family: 'Roboto', sans-serif; /* Change 'Roboto' to your preferred font */
        font-size: 40px; /* Adjust the font size */
        font-weight: bold;
        color:white; /* Adjust the font color */
        margin-bottom: 10px;
      }
      th,
      td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        border-radius: 10px; /* Add rounded corners */
      }

      th {
        background-color: #0065e9;
        color: #fff;
      }

      tr:hover {
        background-color: #f5f5f5;
      }

      .pagination {
        margin-top: 20px;
      }
    </style>
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
             <div class="page-header">
              <h3 class="page-title"> Manage Immunization Vaccine </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Manage Immunization Vaccine</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Manage Immunization Vaccine</h4>
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Immunization Vaccine</a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                      <table class="table">
                        <thead>
                        <tr  class="taba shadow h-100 py-2">
                            <th class="font-weight-bold">P.No</th>
                            <th class="font-weight-bold">Immunization VaccineName</th>
                            <th class="font-weight-bold">Doses</th>
                            <th class="font-weight-bold">Creation Date</th>
                            <th class="font-weight-bold">Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                           <?php
                           if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        // Formula for pagination
        $no_of_records_per_page =15;
        $offset = ($pageno-1) * $no_of_records_per_page;
       $ret = "SELECT ID FROM tblclass";
$query1 = $dbh -> prepare($ret);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$total_rows=$query1->rowCount();
$total_pages = ceil($total_rows / $no_of_records_per_page);
$sql="SELECT * from tblclass LIMIT $offset, $no_of_records_per_page";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>   
                          <tr>
                           
                            <td class="shadow h-100 py-4"><?php echo htmlentities($cnt);?></td>
                            <td class="shadow h-100 py-4"><?php  echo htmlentities($row->ClassName);?></td>
                            <td class="shadow h-100 py-4"><?php  echo htmlentities($row->Section);?></td>
                            <td class="shadow h-100 py-4"> <?php  echo htmlentities($row->CreationDate);?></td>
                            <td>
                              <div><a href="edit-class-detail.php?editid=<?php echo htmlentities ($row->ID);?>"><i class="icon-eye" style="color: #007bff; font-size: 20px; text-decoration: none;"></i></a>
                                                | <a href="manage-class.php?delid=<?php echo ($row->ID);?>" onclick="return confirm('Do you really want to Delete ?');"> <i class="icon-trash" style="color: red; font-size: 20px; text-decoration: none;"></i></a></div>
                            </td> 
                          </tr><?php $cnt=$cnt+1;}} ?>
                        </tbody>
                      </table>
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
</html><?php }  ?>