<?php 
    require_once("framework/env.php");
    require_once("framework/init.php"); 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once('common/header.php'); ?>
	</head>
	<body>
		<?php require_once('widgets/preloader.php'); ?>
		<?php 
			require_with('widgets/nav_bar.php', array(
				'active' => 'home'
			));
		?>

		<!-- Hero Section end -->
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
						<div id="login-form">
							<?php require_once('./widgets/login_form.php'); ?>
						</div>
						<div id="signup-form" style="display: none;">
							<?php require_once('./widgets/signup_form.php'); ?>
						</div>
						<div id="forgot-password-form" style="display: none;">
							<?php require_once('./widgets/forgot_form.php'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="hero-slider owl-carousel">
				<div class="hs-item set-bg" data-setbg="images/hero-slider/01.jpg"></div>
				<div class="hs-item set-bg" data-setbg="images/hero-slider/02.jpg"></div>
				<div class="hs-item set-bg" data-setbg="images/hero-slider/03.jpg"></div>
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


		<!-- Score Section end -->
		<section class="score-section text-white set-bg" data-setbg="images/score-bg.jpg">
			<div class="container">
				<div class="row">
					<div class="col-auto">
						<h2>Register your department</h2>
						<h4>Sign up and add your department in to complaintify</h4>
						<a href="register-department.php" class="site-btn sb-big">Register</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Score Section end -->

		<?php require_once('widgets/footer.php'); ?>
		<?php require_once('common/scripts.php'); ?>
		<script>
			<?php
				if(isset($_GET["signup"])) echo 'activateSignupForm(true);'; 
				if(isset($_GET["forgot-password"])) echo 'activateForgotForm(true);'; 
			?>

			function activateSignupForm(isActive){
				if(isActive){
					document.getElementById("login-form").style.display = "none";
					document.getElementById("forgot-password-form").style.display = "none";
					document.getElementById("signup-form").style.display = "block";
					
				}
				else {
					document.getElementById("login-form").style.display = "block";
					document.getElementById("signup-form").style.display = "none";
					document.getElementById("forgot-password-form").style.display = "none";
				}
			}

			function activateForgotForm(){
				document.getElementById("signup-form").style.display = "none";
				document.getElementById("login-form").style.display = "none";
				document.getElementById("forgot-password-form").style.display = "block";
			}
		</script>
	</body>
</html>

<?php
	if(is_logged_in()){
		if(is_admin()) reload_with([], "admin-verify.php");
		else if(is_authority()) reload_with([], "department-complaints.php");
		else reload_with([], "user-complaints.php");
		exit;
	}

	//Process login
	if(isset($_POST['login'])){
		$user = $db->where("username", $_POST["username"])
				->where("password", $_POST["password"])
				->getOne('users');
		if($db->count > 0){
			$_SESSION["user_id"] = $user["id"];
			reload_with(["login" => "success"]);
		}
		else reload_with(["login" => "failed"]);
	}
	//Process signup
	else if(isset($_POST['signup'])){
		$data =  Array (
			'username' => $_POST['username'],
			'name' => $_POST['name'],
			'type' => 0,
			'password' => $_POST['password'],
			'email' => $_POST['email'],
			'mobile_no' => $_POST['mobile-no'],
			'address' => $_POST['address'],
			'aadhar_no' => $_POST['aadhar-no']
		);

		$id = $db->insert('users', $data);
		if ($id){
			$_SESSION["user_id"] = $id;
			reload_with(["signup" => "success"]);
		}
		else reload_with(["signup" => "failed"]);
	}
	//Process signup
	else if(isset($_POST['forgot-password'])){
		$user = $db->where("email", $_POST["email"])->getOne('users');
		if($db->count > 0){
			mail($user["email"], "Complaintify Password", "Your password is ${user["password"]}");
			reload_with(["forgot-password" => "success"]);
		}
		else reload_with(["forgot-password" => "failed"]);
	}
?>