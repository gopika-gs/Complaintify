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
				'active' => 'feedback'
			));
		?>

        <!-- Page top Section end -->
        <section class="page-top-section set-bg" data-setbg="images/page-top-bg/2.jpg">
            <div class="container">
                <h2>Feedback</h2>
                <nav class="site-breadcrumb">
                    <a class="sb-item" href="index.php">Home</a>
                    <span class="sb-item active">Feedback</span>
                </nav>
            </div>
        </section>
        <!-- Page top Section end -->

        <!-- About Section end -->
        <div class="contact3 pb-5">
        <div class="row no-gutters">
            <div class="container pb-5">
            <div class="row">
                <div class="col-lg-6">
                <div class="card-shadow"  style="margin-top:100px;">
                    <img src="images/feedback.png"> 
                </div>
                </div>
                <div class="col-lg-6">
                <div class="contact-box ml-3" style="margin-top:100px;">
                    <h1 class="font-weight-light mt-2" style="font-size: 47px;">Write your feedback</h1>

                    <?php if(isset($_GET["status"])) if($_GET["status"]=="success"){ ?>
                        <div class="blog-date">Feedback has been recorded</div>
                    <?php } ?>

                    <form class="mt-4" method="POST">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="form-group mt-2">
                                <input class="form-control form-input-border" type="text" required name="name" placeholder="Name">
                            </div>
                            </div>
                            <div class="col-lg-12">
                            <div class="form-group mt-2">
                                <input class="form-control form-input-border" type="email" required name="email" placeholder="Email address">
                            </div>
                            </div>
                            <div class="col-lg-12">
                            <div class="form-group mt-2">
                                <input class="form-control form-input-border" oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern=".{10,}" required name="mobile-no" maxlength="12" type="text" placeholder="Phone">
                            </div>
                            </div>
                            <div class="col-lg-12">
                            <div class="form-group mt-2">
                                <textarea class="form-control form-input-border" required name="message" rows="3" placeholder="message"></textarea>
                            </div>
                            </div>
                            <div class="col-lg-12">
                            <button class="site-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- About Section end -->

        <!-- Review Section end -->
        <section class="review-section spad">
            <div class="container">
                <div class="text-center text-white mb-5 pb-2">
                    <h2>What Our Clients Say</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="review-item">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>A good website to get your issues resolved. It just say your words in a different way and send it to somewhere it should be .I have solved many issues . Loved it</p>
                            <h6>Maria Smith, <span>35 min ago</span></h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="review-item">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>STONGLEY RECOMMEND. My issues was solved with in a week. Before using this app ,I send complaint through mails. But they don't resolved and it take more than one month to realize. After using this website my complaint was solved with in a Week.. Quick response from them...  .</p>
                            <h6>Marta Black, <span>25 min ago</span></h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="review-item">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>It is very helpful website for them who want complaint or give compliment to a particular department..</p>
                            <h6>Carl Brown, <span>15 min ago</span></h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="review-item">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Helped me with my complaints...thank you.</p>
                            <h6>Paul David, <span>10 min ago</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Review Section end -->

		<?php require_once('widgets/footer.php'); ?>
		<?php require_once('common/scripts.php'); ?>
		<script>

		</script>
	</body>
</html>

<?php
if(isset($_POST['name'])){
    mail("complaintify20@gmail.com", "Feedback Message", print_r($_POST, true));
    reload_with(["status" => "success"]);
}
?>