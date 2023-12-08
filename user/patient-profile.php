<style>
.taba {
  background-color: #0065e9 !important;
	
}
  </style>
<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsstuid']==0)) {
  header('location:logout.php');
  } else{
   
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>RHU Management System|| View Students Profile</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="shortcut icon" href="/imahe/ut.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" />
    <style>
      /* ... (Your existing styles) ... */

      /* Stylish font for the patient name in the header */
      .page-title {
        font-family: 'Roboto', sans-serif; /* Change 'Roboto' to your preferred font */
        font-size: 34px; /* Adjust the font size */
        font-weight: bold;
        color: #333; /* Adjust the font color */
        margin-bottom: 10px;
      }

      /* Styling for the table */
      .table {
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
        border-radius: 15px; /* Add rounded corners to the table */
        overflow: hidden;
      }

      .table th,
      .table td {
        padding: 15px;
        text-align: center;
        border-bottom: 5px solid #ddd;
        
      }

      .table th {
        background-color: #0065e9;
        color: black;
      }

      .table tr:hover {
        background-color: #f5f5f5;
        border-radius: 15px;
      }

      /* Styling for the patient details rows */
      .table-info th,
      .table-info td {
        background-color: #e6f7ff; /* Light blue background for patient details rows */
      }
    </style>

    <!-- Include Google Fonts (Roboto in this case) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
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
              <h3 class="page-title"> Patient Profile </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> View Patient Profile</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card ">
                  <div class="card-body ">
                    
                    <table border="1" class="table table-bordered mg-b-0 shadow h-200 py-2">
                      <?php
$sid=$_SESSION['sturecmsstuid'];
$sql="SELECT tblstudent.StudentName,tblstudent.StudentEmail,tblstudent.StudentClass,tblstudent.Gender,tblstudent.DOB,tblstudent.StuID,tblstudent.FatherName,tblstudent.MotherName,tblstudent.ContactNumber,tblstudent.AltenateNumber,tblstudent.Address,tblstudent.UserName,tblstudent.Password,tblstudent.Image,tblstudent.DateofAdmission,tblclass.ClassName,tblclass.Section from tblstudent join tblclass on tblclass.ID=tblstudent.StudentClass where tblstudent.StuID=:sid";
$query = $dbh -> prepare($sql);
$query->bindParam(':sid',$sid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
 <tr align="center" class="taba shadow h-100 py-2">
<td colspan="4" style="font-size:25px;color:black">
 Patient Details</td></tr>

    <tr class="table-info">
    <th>Patient Name</th>
    <td><?php  echo $row->StudentName;?></td>
     <th>Patient Email</th>
    <td><?php  echo $row->StudentEmail;?></td>
  </tr>
  <tr class="table-info" >
     <th>Patient Immunization Vaccine</th>
    <td><?php  echo $row->ClassName;?> <?php  echo $row->Section;?></td>
     <th>Gender</th>
    <td><?php  echo $row->Gender;?></td>
  </tr>
  <tr class="table-info">
    <th>Date of Birth</th>
    <td><?php  echo $row->DOB;?></td>
    <th>Patient ID</th>
    <td><?php  echo $row->StuID;?></td>
  </tr>
  <tr class="table-info">
    <th>Father Name</th>
    <td><?php  echo $row->FatherName;?></td>
    <th>Mother Name</th>
    <td><?php  echo $row->MotherName;?></td>
  </tr>
  <tr class="table-info">
    <th>Contact Number</th>
    <td><?php  echo $row->ContactNumber;?></td>
    <th>Address</th>
    <td><?php  echo $row->Address;?></td>
  </tr>
  <tr class="table-info">
  
    <th>User Name</th>
    <td><?php  echo $row->UserName;?></td>
    <th>Date of Admission</th>
    <td><?php  echo $row->DateofAdmission;?></td>
  </tr>

    
 
  <?php $cnt=$cnt+1;}} ?>
</table>
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
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html><?php }  ?>