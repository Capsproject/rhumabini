<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                <img class="pictuy rounded-circle" style=" height: 150px; width: 150px;" src="../admin/images/<?php echo $row->Image;?>"> </span></a>
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <?php
         $uid= $_SESSION['sturecmsuid'];
$sql="SELECT * from tblstudent where ID=:uid";

$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)

foreach($results as $row)
             ?>
                 
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
        </nav>