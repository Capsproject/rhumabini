<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>RHU  Management System || Contact Us Page</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
</head>
	<body>
<!--header-->
		<?php include_once('includes/header.php');?>
<!-- Top Navigation -->
<div class="banner banner5">
	<div class="container">
	
	</div>
</div>
<!--header-->
		<!-- contact -->
		<div class="contact">
			<!-- container -->
			<div class="container">
				<div class="contact-info">
					<h3 class="c-text">Feel Free to contact with us!!!</h3>
				</div>
				
				<div class="contact-grids">
					<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
					<div class="col-md-4 contact-grid-left">
						<h3>Address :</h3>
						<p><?php  echo htmlentities($row->PageDescription);?>
						</p>
					</div>
					<div class="col-md-4 contact-grid-middle">
						<h3>Phones :</h3>
						<p><?php  echo htmlentities($row->MobileNumber);?>
						</p>
					</div>
					<div class="col-md-4 contact-grid-right">
						<h3>E-mail :</h3>
						<p><?php  echo htmlentities($row->Email);?>
						</p>
					</div>
					<div class="clearfix"> </div>
					<?php $cnt=$cnt+1;}} ?>
				</div>
			</div>
			<!-- //container -->
		</div>
		<head>
    <style>
        /* Style for the card container */
		.card {
    width: 850px;
    margin:20px auto 0; /* Center horizontally using margin */
    border: 1px solid #ccc;
    border-radius: 19px;
    padding: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    background: #8080804a;
}

        /* Style for the card title */
        .card-title {
            font-size: 26px;
        }

        /* Style for the card content */
        .card-content {
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-title">Location</div>
        <div class="card-content">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d968.8784191260768!2d120.94113261975721!3d13.747867624752054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd0700214d2f9f%3A0x481180f2b50c7a54!2sMabini%20Health%20Center!5e0!3m2!1sen!2sph!4v1698805872809!5m2!1sen!2sph" width="800px" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</body>
		
<?php include_once('includes/footer.php');?>
<!--/copy-rights-->
	</body>
</html>
