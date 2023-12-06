<style>
  .yown {
    height: 74px;
    position: absolute;
  
  .table-primary {
    background-color: #15007b;
    
  }

</style>
 
 <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="dashboard.php">
            <strong style="color: white;">Rhu</strong>
          </a>
         
        </div>
        <?php
         $uid= $_SESSION['sturecmsuid'];
$sql="SELECT * from tblstudent where ID=:uid";

$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$sql="SELECT tblstudent.StudentName,tblstudent.StudentEmail,tblstudent.StudentClass,tblstudent.Gender,tblstudent.DOB,tblstudent.StuID,tblstudent.FatherName,tblstudent.MotherName,tblstudent.ContactNumber,tblstudent.AltenateNumber,tblstudent.Address,tblstudent.UserName,tblstudent.Password,tblstudent.Image,tblstudent.DateofAdmission,tblclass.ClassName,tblclass.Section from tblstudent join tblclass on tblclass.ID=tblstudent.StudentClass where tblstudent.StuID=:sid";

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
  
        <div class="navbar-menu-wrapper  d-flex align-items-center flex-grow-1">
              
  
        <img class="yown" src="/images/bluelogo.png"  alt="" style="left: 1px; ">
      
          <ul class="navbar-nav navbar-nav-right ml-auto">
        
      
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle ml-2" src="/admin/images/<?php echo $row->Image;?>"><span class="font-weight-normal"> <?php  echo htmlentities($row->StudentName);?> </span></a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                <img class="img-xs rounded-circle ml-2" src="/admin/images/<?php echo $row->Image;?>">
                <img class="yown" src="/images/bluelogo.png"  alt="" style="left: 10px; ">
                  <p class="mb-1 mt-3"><?php  echo htmlentities($row->StudentName);?></p>
                  <p class="font-weight-light text-muted mb-0"><?php  echo htmlentities($row->StudentEmail);?></p><?php $cnt=$cnt+1;}} ?>
                </div>
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
      </nav>



      