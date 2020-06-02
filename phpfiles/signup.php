<?php
//error_reporting("NOTICE");
?>
<!DOCTYPE html>
<html lang="zxx">

	<!-- Hero Section end -->
		<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="hs-text">					</div>
				</div>
				<div class="col-lg-6">
					<form class="hero-form" method="post" enctype="multipart/form-data">
						<input type="text" placeholder="Your Name" name="name">
						<input type=="text" placeholder="Your Aadhar Id" name="aadhar">
						<input type="radio"  name="gender" value="female">FEMALE
						<input type="radio"  name="gender" value="male">MALE
						<input type=="email" placeholder="Your Email" name="email">
						<input type="textarea" placeholder="Your Address" name="address">
                        <input type="text" placeholder="Your Phone no" name="phone">
						<input type="password" placeholder="Create your own Password" name="password">
				<input type="submit" class="site-btn" name="submit" value="submit">
			</form>
					</div>
			</div>
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/2.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/3.jpg"></div>
		</div>
	</section><!-- Page top Section end -->

</html>
<?php
include_once("phpfiles/connection.php");
if($_POST['submit'])
{ 
$name=$_POST['name'];
$id=$_POST['aadhar']; 
$gen=$_POST['gender'];
$add=$_POST['address'];
$ph=$_POST['phone'];
$mail=$_POST['email'];
$pass=$_POST['password'];
$sql="insert into signup values('','$name','$id','$gen','$add','$ph','$mail','$pass')";
mysqli_query($conn,$sql);
echo "<script>alert('Registered Successfully');</script>";
		echo "<script>window.location='index.php';</script>";
}

?>