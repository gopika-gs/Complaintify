<?php
error_reporting("E_NOTICE");
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>COMPLAINTIFY </title>
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
		<a href="index.html" class="site-logo">
			<img src="image/logo.png" alt="">
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="index.php" class="<?php if($_GET['dynamic']=='') echo 'active'; ?>">Home</a></li>
				<li><a href="index.php?dynamic=aboutus" class="<?php if($_GET['dynamic']=='aboutus') echo 'active'; ?>">About Us</a></li>
				<li><a href="index.php?dynamic=feedback" class="<?php if($_GET['dynamic']=='feedback') echo 'active'; ?>">Feedback</a></li>
				<li><a href="index.php?dynamic=contact" class="<?php if($_GET['dynamic']=='contact') echo 'active'; ?>">Contact</a></li>
			</ul>
			<div class="header-right">
				<a href="#" class="hr-btn"><i class="flaticon-013-mail"></i>Get in touch </a>
				<div class="hr-btn hr-btn-2">complaintify@gmail.com</div>
			</div>
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
					<div class="hs-text">
						<h2 style="text-shadow: 2px 2px 13px #000000e6;">Want to submit a complaint?</h2>
						<p style="text-shadow: 2px 2px 13px #000000e6;">Easly submit your complaints to complaintify fast and secure. Complaintify make sure your complaints are processed and notifies you when the authorities takes any action on the complaint you submitted.</p>
						<a href="#" class="site-btn sb-dark">Find out more</a>
					</div>
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
						</select><br>
						<center>
							<button class="site-btn" name="login" type="submit">Login </button>
							<a href="index.php?dynamic=signup"><button class="site-btn btn-outline" name="login" type="button">Sign up</button></a>
						</center><br>
						<center>
         					<a style="text-transform: uppercase; font-weight: 700; color: #fff;" href="index.php?dynamic=forget">Forget password ?</a>
						</center>
					</form>
				</div>
			</div>
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="image/hero-slider/01.jpg"></div>
			<div class="hs-item set-bg" data-setbg="image/hero-slider/02.jpg"></div>
			<div class="hs-item set-bg" data-setbg="image/hero-slider/03.jpg"></div>
		</div>
	</section>
	<!-- Hero Section end -->

	<!-- Why Section end -->
	<section class="why-section spad">
		<div class="container">
			<div class="text-center mb-5 pb-4">
				<h2>Why to use us?</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-012-24-hours"></i>
						</div>
						<div class="ib-text">
							<h5>Complaint at Anytime</h5>
							<p>Complaintify works everyday, 24*7. So you can register complaints anytime you want and from anywhere you like without any deals at all.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-036-customer-service"></i>
						</div>
						<div class="ib-text">
							<h5>Fully Convenient</h5>
							<p>No more frustration and waiting the lines for submitting complaints and wasting a lot of time. Complaintify makes it more easier.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-039-info"></i>
						</div>
						<div class="ib-text">
							<h5>Faster than Ever</h5>
							<p>Complaintify make sure your complaints are processed and notifies you when the authorities takes any action on the complaint you submitted.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-3">
				<a href="#" class="site-btn sb-big">Try it Now</a>
			</div>
		</div>
	</section>
	<!-- Why Section end -->


	<!-- Help Section -->
	<section class="help-section spad">
		<div class="container">
			<div class="text-center text-white mb-5 pb-4">
				<h2>How it works in background</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>Complaintify lets you to submit complaints through our online portal to different government operated offices with ease. Through our complaint register you can easily send complaints without going to the actual office. After the submission, Complaintify sends the complaint to the assigned office and notifies the authorities to take action on it.</p>
				</div>
				<div class="col-md-6">
					<p>Complaintify notifies you after the authorities makes any actions on it instantly without any delays. You can keep track of all you previous complaints and the actions taken upon them from the user-friendly admin panel without any worries. Your complaints will be safe and secure with us, Don't worry about any privacy issues.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="help-list">
						<li>100% Secure</li>
						<li>No privacy issues</li>
						<li>Faster than ever</li>
						<li>No more queues</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="help-list">
						<li>No more delays</li>
						<li>Notifies you instantly</li>
						<li>User friendly</li>
						<li>Works from anywhere</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="help-list">
						<li>24*7 portal</li>
						<li>Live support team</li>
						<li>Instant action</li>
						<li>Unlimited complaints</li>
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
					<h2>Need more help?</h2>
					<h4>Feel free to contact us, we are here to help you</h4>
					<a href="#" class="site-btn sb-big">Get in touch</a>				</div>
			</div>
					</div>
	</section>
	<!-- Score Section end -->
<?php
}
?>
	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<a href="index.html" class="footer-logo">
				<img src="image/logo.png" alt="">
			</a>
			<div class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="/" target="_blank">Complaintify</a></div>
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

