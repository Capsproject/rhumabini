<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title> RHU Management System || About Us Page</title>
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
<!-- About -->
<div class="about">
	 <div class="container">
		 <div class="about-info-grids">
		 <h2>About</h2>
			 <div class="col-md-5 abt-pic">
				 <img src="/rural/images/wiw.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="container">
			<p>MABINI RURAL HEALTH UNIT is a government owned health center located in Mabini, Batangas We provide comprehensive medical and dental services to the residents of Mabini and nearby barangays. Our team of doctors are committed to providing quality care to all patients who come through our doors.</p>
        
         </div>
				 <style>

body {
  font-family: 'Open Sans', sans-serif;
  text-align: center;
  background-color: #191a1c;
  color: #fff;
}

.dev {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.about {
  width: 95%;
  margin: auto;
}

img {
  width: 300px;
  height: 300px;
  
}

.about figure {
  position: relative;
}

.layer {
  position: absolute;
  background: black;
  top: 0;
  height: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0;
}


.about .layer h3,
.about .layer p {
  opacity: 1;
  font-size: 1.8em;
  font-weight: 300;
  color: white;
  width: 90%;
  margin: 10px auto 0px;
  border-bottom: 0;
  padding-bottom: 40px;
}

.about .layer h3 {
  font-weight: 600;
  padding-top: 50px;
}

.about figure {
  box-shadow: 2px 2px 10px 2px grey;
  padding: 15px;
  margin: 30px auto;
}

.about figure a {
  width: 50px;
  height: 40px;
  padding-top: 10px;
  border-radius: 10px 15px 0px;
  color: #00b800;
  
  text-decoration: none;
}
</style>
<div class="container">
				 <Doses id="content">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
<div class="container">
        <div class="row">
      <div class="col-md-12">
   
         </div>
        <br/>
      </div>
	  <div class="aligncenter"><h2 class="aligncenter">Team</h2>
    </div>

<Doses class="dev about">

  <figure>
    <div class="layer">
      <h3>Designer</h3>
      <p>I design stuff.</p>
    </div>
    <img src="/rural/images/espinosa.png" alt="">
    <figcaption>
      <h3>Dereck William Espinosa</h3>
	  <span class="deg">Developer</span>
      <br>
      <a href="https://web.facebook.com/dereck.espinosa.5070" class="fa fa-facebook fa-2x"></a>
	 
      
    </figcaption>
  </figure>

  <figure>
    <div class="layer">
      <h3>Coder</h3>
      <p>I code it all.</p>
    </div>
    <img src="/rural/images/mendoza.png" alt="">
    <figcaption>
      <h3>Haecjam Mendoza</h3>
	  <span class="deg">Documentation</span>
      <br>
      <a href="https://web.facebook.com/HayecJam" class="fa fa-facebook fa-2x"></a>
	 
     
    </figcaption>
  </figure>

  <figure>
    <div class="layer">
      <h3>Intern</h3>
      <p>I make their coffee.</p>
    </div>
    <img src="/rural/images/aje.png" alt="">
    <figcaption>
      <h3>Carl Aejemarc Asilo</h3>
	  <span class="deg">Assistant Developer</span>
      <br>
	  <a href="https://web.facebook.com/carlaejemarc.egmarin" class="fa fa-facebook fa-2x"></a>
    
      
    </figcaption>
  </figure>
 
			 </div>
			 <div class="clearfix"> </div>
			
		 </div>
</div>
</div>
	 </div>
	 	 
	
<!-- /About -->
<?php include_once('includes/footer.php');?>
<!--/copy-rights-->
	</body>
</html>
