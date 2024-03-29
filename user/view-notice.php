<style>
  .taba {
    background-color: #0065e9 !important;
    
  }

  .notice-container {
    margin-bottom: 80px;
    
  }
</style>

<?php
session_start();
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsstuid'] == 0)) {
  header('location:logout.php');
} else {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <title>RHU Management System|| View Notice</title>
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

    .taba {
      background-color: #0065e9 !important;
    }

    .notice-container {
      margin-bottom: 80px;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
    }

    .notice-container table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
    }

    

   

    .notice-container tr:hover {
      background-color: #f5f5f5;
    }
  </style>
  </head>

  <body>
    <div class="container-scroller">
      <?php include_once('includes/header.php'); ?>
      <div class="container-fluid page-body-wrapper">
        <?php include_once('includes/sidebar.php'); ?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> View Notice </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> View Notice</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <?php
                    $stuclass = $_SESSION['stuclass'];
                    $sql = "SELECT tblclass.ID,tblclass.ClassName,tblclass.Section,tblnotice.NoticeTitle,tblnotice.CreationDate,tblnotice.ClassId,tblnotice.NoticeMsg,tblnotice.ID as nid from tblnotice join tblclass on tblclass.ID=tblnotice.ClassId where tblnotice.ClassId=:stuclass";
                    $query = $dbh->prepare($sql);
                    $query->bindParam(':stuclass', $stuclass, PDO::PARAM_STR);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                      foreach ($results as $row) {
                    ?>
                        <div class="notice-container">
                          <table border="1" class="table table-bordered mg-b-0">
                            <tr align="center" class="taba shadow h-100 py-2">
                              <td colspan="4" style="font-size:20px;color:Black">Notice</td>
                            </tr>
                            <tr class="table-info">
                              <th>Notice Announced Date</th>
                              <td><?php echo $row->CreationDate; ?></td>
                            </tr>
                            <tr class="table-info">
                              <th>Noitice Title</th>
                              <td><?php echo $row->NoticeTitle; ?></td>
                            </tr>
                            <tr class="table-info">
                              <th>Message</th>
                              <td><?php echo $row->NoticeMsg; ?></td>
                            </tr>
                          </table>
                        </div>
                    <?php $cnt = $cnt + 1;
                      }
                    } else { ?>
                      <div class="notice-container">
                        <table border="1" class="table table-bordered mg-b-0">
                          <tr>
                            <th colspan="2" style="color:red;">No Notice Found</th>
                          </tr>
                        </table>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php include_once('includes/footer.php'); ?>
        </div>
      </div>
    </div>
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
  </body>

  </html>
<?php } ?>
