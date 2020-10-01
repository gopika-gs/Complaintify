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
				'active' => 'contact-us'
			));
		?>

        <section class="page-top-section set-bg" data-setbg="images/page-top-bg/2.jpg">
            <div class="container">
                <h2>Contact Us</h2>
                <nav class="site-breadcrumb">
                    <a class="sb-item" href="index.php">Home</a>
                    <span class="sb-item active">Contact Us</span>
                </nav>
            </div>
        </section>


        <div class="contact3">
        <div class="row no-gutters">
            <div class="container">
            <div class="row">
                <div class="col-lg-6">
                <div class="card-shadow"  style="margin-top:100px;">
                    <img src="images/2.jpg"> 
                </div>
                </div>
                <div class="col-lg-6">
                <div class="contact-box ml-3" style="margin-top:100px;">
                    <h1 class="font-weight-light mt-2" style="font-size: 47px;">Quick Contact</h1>

                    <?php if(isset($_GET["status"])) if($_GET["status"]=="success"){ ?>
                        <div class="blog-date">We will get back to you soon as possible</div>
                    <?php } ?>

                    <form class="mt-4" method="POST">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="form-group mt-2">
                            <input class="form-control form-input-border" required type="text" name="name" placeholder="Name">
                        </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group mt-2">
                            <input class="form-control form-input-border" required type="email" name="email" placeholder="Email address">
                        </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group mt-2">
                            <input class="form-control form-input-border" required oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern=".{10,}" required name="mobile-no" maxlength="12" type="text" placeholder="Phone">
                        </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group mt-2">
                            <textarea class="form-control form-input-border" required name="Message" rows="3" placeholder="message"></textarea>
                        </div>
                        </div>
                        <div class="col-lg-12">
                        <button class="site-btn">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
                <div class="col-lg-12">
                <div class="card mt-4 border-0 mb-4">
                    <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="card-body d-flex align-items-center c-detail pl-0">
                        <div class="mr-3 align-self-center">
                            <img src="images/location.png">
                        </div>
                        <div class="">
                            <h6 class="font-weight-medium">Address</h6>
                            <p class="">Emmanuel College of Arts & Science
                            <br> Vazhichal, Tvpm</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="card-body d-flex align-items-center c-detail">
                        <div class="mr-3 align-self-center">
                            <img src="images/phone.png">
                        </div>
                        <div class="">
                            <h6 class="font-weight-medium">Phone</h6>
                            <p class="">251 546 9442
                            <br> 630 446 8851</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="card-body d-flex align-items-center c-detail">
                        <div class="mr-3 align-self-center">
                            <img src="images/@.png"> 
                        </div>
                        <div class="">
                            <h6 class="font-weight-medium">Email</h6>
                            <p class="">
                            complaintify20@gmail.com
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

		<?php require_once('widgets/footer.php'); ?>
		<?php require_once('common/scripts.php'); ?>
		<script>

		</script>
	</body>
</html>

<?php
if(isset($_POST['name'])){
    mail("complaintify20@gmail.com", "Contact Message", print_r($_POST, true));
    reload_with(["status" => "success"]);
}
?>