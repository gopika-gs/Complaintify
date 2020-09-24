<?php error_reporting("E_NOTICE"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>COMPLAINTIFY</title>
		<meta charset="UTF-8">
		<meta name="description" content="loans HTML Template">
		<meta name="keywords" content="loans, html">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!--====== Styles & Fonts ======-->
		<link href="image/favicon.ico" rel="shortcut icon"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<link rel="stylesheet" href="css/owl.carousel.min.css"/>
		<link rel="stylesheet" href="css/flaticon.css"/>
		<link rel="stylesheet" href="css/slicknav.min.css"/>
		<link rel="stylesheet" href="css/style.css"/>

	</head>
	<body>
		<?php require_once('widgets/preloader.php'); ?>
		<?php require_once('widgets/nav_bar.php'); ?>

		<!--====== Load other pages or the home page ======-->
		<?php
			$page = 'pages/'.$_GET['page'].'.php';
			if(file_exists($page)) require_once($page);
			else require_once('pages/home.php');
		?>

		<?php require_once('widgets/footer.php'); ?>

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
	include_once("frameword/connection.php");
	if(isset($_POST['login']))
	{
		$user=$_POST['username'];
		$pass=$_POST['password'];
		$type=$_POST['type'];
		if($type == 'admin'){
			$sql="select * from admin where username='$user' and password='$pass'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){
					$_SESSION['username']=$row['username'];
					echo"<script>location.href='admin.php'</script>";
				}
			}
			else {
				echo"<script>alert('Does not exist the account')</script>";
				echo"<script>location.href='index.php'</script>";
			}
		}
		else if($type == 'user'){
			$sql="select * from admin where username='$user' and password='$pass'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){
					$_SESSION['username']=$row['username'];
					echo"<script>location.href='user.php'</script>";
				}
			}
			else{
				echo"<script>alert('Does not exist the account')</script>";
				echo"<script>location.href='index.php'</script>";
			}
		}
		else if($type == 'panchayath'){
			$sql="select * from admin where username='$user' and password='$pass'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_array($result)){
					$_SESSION['username']=$row['username'];
					echo"<script>location.href='panchayath.php'</script>";
				}
				
			}
			else{
				echo"<script>alert('Does not exist the account')</script>";
				echo"<script>location.href='index.php'</script>";
			}
		}
		else if($type == 'muncipality'){
			$sql="select * from admin where username='$user' and password='$pass'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){
					$_SESSION['username']=$row['username'];
					echo"<script>location.href='user.php'</script>";
				}	
			}
			else{
				echo"<script>alert('Does not exist the account')</script>";
				echo"<script>location.href='index.php'</script>";
			}
		}
		else if($type == 'coporation'){
			$sql="select * from admin where username='$user' and password='$pass'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){
					$_SESSION['username']=$row['username'];
					echo"<script>location.href='panchayath.php'</script>";
				}
			}
			else{
				echo"<script>alert('Does not exist the account')</script>";
				echo"<script>location.href='index.php'</script>";
			}
		}
		else{
			echo"<script>alert('Not a user')</script>";
			echo"<script>location.href='index.php'</script>";
		}	
	}
?>

