<?php
session_start();
// error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsstuid']) == 0) {
    header('location:logout.php');
} else {
    $sid = $_SESSION['sturecmsstuid'];
    $sql = "SELECT tblstudent.PatientCertificate FROM tblstudent WHERE tblstudent.StuID=:sid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':sid', $sid, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);

    if ($query->rowCount() > 0) {
        foreach ($results as $row) {
            $PatientCertificate = $row->PatientCertificate;
        }
    }
?>

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
    <link rel="shortcut icon" href="/imahe/ut.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
    <style>
        .col-sm-12.slider {
            font-size: 50px;
            background-color: #f5f5f5;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .col-sm-12.slider h3 {
            font-size: 50px;
            margin-bottom: 0;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 50px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            font-size: 50px;
        }
        
.taba {
  background-color: #0065e9 !important;
	
}
  
        .slider {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 5px;
            font-size: 50px;
        }

        p {
            font-size: 50px;
            line-height: 1.5;
        }

        .icon-doc {
            font-size: 50px;
        }

        h3 {
            color: #333;
            font-size: 50px;
        }

        a {
            color: #007BFF;
            text-decoration: none;
            font-size: 50px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include_once('includes/header.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php include_once('includes/sidebar.php'); ?>
            <!-- partial -->
            <div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                    <div class="card-body d-lg-flex align-items-center">
                        <div class="container">
                            <div class="col-sm-12 slider">
                                <table class="table table-bordered table-striped">
                                    <thead class="taba">
                                        <tr>
                                            <th><strong style="font-size: larger;">File Name</strong></th>
                                            <th><strong style="font-size: larger;">Download</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td style="font-size: 30px;">
    <?php
    if (!empty($row->PatientCertificate)) {
        echo $row->PatientCertificate; // Display the file name
    } else {
        echo "No certificate uploaded yet";
    }
    ?>
</td>

                                            <td>
                                                <?php
                                                if (!empty($row->PatientCertificate)) {
                                                    ?>
                                                    <a href="../admin/certificate_directory/<?php echo $row->PatientCertificate; ?>" download>
                                                    <button class="btn btn-primary taba">Download</button>
                                                    </a>
                                                    <?php
                                                } else {
                                                    echo "N/A";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <!-- You can add more rows for additional files -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
                </div>
              </div>
            </div>
          </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include_once('includes/footer.php'); ?>
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
</html>
<?php } ?>
