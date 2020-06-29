<?php
error_reporting("E_NOTICE");
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>COMPLAINT MANAGEMENT SYSTEM </title>
	<meta charset="UTF-8">
	<meta name="description" content="loans HTML Template">
	<meta name="keywords" content="loans, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
	<div class="container">
	<div class="header_box">
	<div class="logo"><img src="Complaint-management-system/image/cms.png" alt="" width="80" height="80">
	<a href="#"><strong style="font-size:24px">
	<font face="Monotype Corsiva" color="white" size="+5">COMPLAINT MANAGEMENT SYSTEM</font></strong></a></div>
	

	<a href="index.php" class="site-logo">
					</a>
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="index.php" class="active">Home</a></li>
				<li><a href="index.php?dynamic=aboutus">About</a></li>
						<li><a href="index.php?dynamic=contact">Contact </a></li>
						<li><a href="index.php?dynamic=feedback">Feedback</a></li>
					</ul>
				</li>
			</ul>
			
		</nav>
	</header>
	<!-- Header Section end -->

	<!-- Hero Section end -->
	<?php
				if($_REQUEST['dynamic']!="")
					{	
						$classpath='phpfiles/class.php';
						if(file_exists($classpath))
						{
						require_once($classpath);
						$classobj=new demo;
						}
					}
				else
					{
						
		   ?>  
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="hs-text">					</div>
				</div>
				<div class="col-lg-6">
					<form class="hero-form" method="post" enctype="multipart/form-data">
						<input type="text" placeholder="Your Name" name="username">
						<input type="password" placeholder="Your Password" name="password" />
						<select name="type">
						<option>user</option>
						<option>admin</option>
						<option>panchayath</option>
						<option>coperation</option>
						<option>muncipality</option>
						</select><br><br><br>
				<center><button class="site-btn" name="login" type="submit">Login </button></center><br>
         <button class="site-btn"><a href="index.php?dynamic=forget">Forget password ?</a></button>
		 <br /><br />
		<button class="site-btn">Don't have an account?<a href="index.php?dynamic=signup">Sign up</a></button>
					</form>
					</div>
			</div>
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/2.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/3.jpg"></div>
		</div>
	</section>
	<!-- Hero Section end -->

	<!-- Why Section end -->
	<section class="why-section spad">
		<div class="container">
			<div class="text-center mb-5 pb-4">
				<h2>Why Choose us?</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-012-24-hours"></i>
						</div>
						<div class="ib-text">
							<h5>Money in 1 Hour!</h5>
							<p>Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-036-customer-service"></i>
						</div>
						<div class="ib-text">
							<h5>Helpfull Staff</h5>
							<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep-tos himenaeos. Suspendisse potenti. Ut gravida mattis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-039-info"></i>
						</div>
						<div class="ib-text">
							<h5>Credit History Considered</h5>
							<p>Conubia nostra, per inceptos himenae os. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-3">
				<a href="#" class="site-btn sb-big">Apply Now!</a>
			</div>
		</div>
	</section>
	<!-- Why Section end -->


	<!-- Help Section -->
	<section class="help-section spad">
		<div class="container">
			<div class="text-center text-white mb-5 pb-4">
				<h2>How a personal loan can help</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec.</p>
				</div>
				<div class="col-md-6">
					<p>Sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="help-list">
						<li>Buying a car</li>
						<li>Take control of your finances</li>
						<li>Pay school tuitions</li>
						<li>Adding value to your home</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="help-list">
						<li>Increese your budget</li>
						<li>Have a day to remember</li>
						<li>Get a new card</li>
						<li>Go on a holliday</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="help-list">
						<li>Get an Insurance</li>
						<li>Take a trip</li>
						<li>Help your kids</li>
						<li>Renovate your home</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Help Section end -->


	
	<!-- Info Section end -->

	<!-- Score Section end -->
	<section class="score-section text-white set-bg" data-setbg="img/score-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-8">
					<h2>Calculate my Score</h2>
					<h4>Check your credit reports as often as you want, it won't affect your scores.</h4>
					<a href="#" class="site-btn sb-big">show my score</a>				</div>
			</div>
			<img src="img/hand.png" alt="" class="hand-img">		</div>
	</section>
	<!-- Score Section end -->
<?php
}
?>
	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			
			<div class="row">
			</div>
			
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
<?php
include_once("phpfiles/connection.php");
					if(isset($_POST['login']))
					{
						$user=$_POST['username'];
						$pass=$_POST['password'];
						$type=$_POST['type'];
						if($type == 'admin')
						{
							$sql="select * from admin where username='$user' and password='$pass'";
							$result=mysqli_query($conn,$sql);
							if(mysqli_num_rows($result)>0)
							{
								while($row=mysqli_fetch_array($result))
									{
										$_SESSION['username']=$row['username'];
										echo"<script>location.href='admin.php'</script>";
									}
								
							}
							
							else
							{
								echo"<script>alert('Does not exist the account')</script>";
								echo"<script>location.href='index.php'</script>";
							}
						}
						else if($type == 'user')
						{
							$sql="select * from admin where username='$user' and password='$pass'";
							$result=mysqli_query($conn,$sql);
							if(mysqli_num_rows($result)>0)
							{
								while($row=mysqli_fetch_array($result))
									{
										$_SESSION['username']=$row['username'];
										echo"<script>location.href='user.php'</script>";
									}
								
							}
							
							else
							{
								echo"<script>alert('Does not exist the account')</script>";
								echo"<script>location.href='index.php'</script>";
							}
						}
						else if($type == 'panchayath')
						{
							$sql="select * from admin where username='$user' and password='$pass'";
							$result=mysqli_query($conn,$sql);
							if(mysqli_num_rows($result)>0)
							{
								while($row=mysqli_fetch_array($result))
									{
										$_SESSION['username']=$row['username'];
										echo"<script>location.href='panchayath.php'</script>";
									}
								
							}
							
							else
							{
								echo"<script>alert('Does not exist the account')</script>";
								echo"<script>location.href='index.php'</script>";
							}
						}
						else if($type == 'muncipality')
						{
							$sql="select * from admin where username='$user' and password='$pass'";
							$result=mysqli_query($conn,$sql);
							if(mysqli_num_rows($result)>0)
							{
								while($row=mysqli_fetch_array($result))
									{
										$_SESSION['username']=$row['username'];
										echo"<script>location.href='user.php'</script>";
									}
								
							}
							
							else
							{
								echo"<script>alert('Does not exist the account')</script>";
								echo"<script>location.href='index.php'</script>";
							}
						}
						else if($type == 'coporation')
						{
							$sql="select * from admin where username='$user' and password='$pass'";
							$result=mysqli_query($conn,$sql);
							if(mysqli_num_rows($result)>0)
							{
								while($row=mysqli_fetch_array($result))
									{
										$_SESSION['username']=$row['username'];
										echo"<script>location.href='panchayath.php'</script>";
									}
								
							}
							
							else
							{
								echo"<script>alert('Does not exist the account')</script>";
								echo"<script>location.href='index.php'</script>";
							}
						}
						
						
						
						else
							{
								echo"<script>alert('Not a user')</script>";
								echo"<script>location.href='index.php'</script>";
							}	
					
					}
					?>

