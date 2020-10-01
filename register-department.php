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
				'active' => ''
			));
		?>

        <section class="page-top-section set-bg" data-setbg="images/page-top-bg/4.jpg" style="background-image: url(&quot;img/page-top-bg/4.jpg&quot;);">
            <div class="container">
                <h2>Register your department</h2>
                <nav class="site-breadcrumb">
                <a class="sb-item" href="index.php">Home</a>
                    <span class="sb-item active">Register Department</span>
                </nav>
            </div>
        </section>

        <section class="elements-section pt-5 pb-5">
            <div class="container" style="padding-bottom: 20px;">
                <?php if(isset($_GET["status"])) if($_GET["status"]=="failed"){ ?>
                    <div class="blog-date">Something went wrong while creating compalint</div>
                <?php } ?>

                <?php if(isset($_GET["status"])) if($_GET["status"]=="success"){ ?>
                    <div class="blog-date">Your department has been registered, You will get an email after the verification</div>
                <?php } ?>

                <h2 class="el-title" style="font-weight: 700;">Enter the form</h2>
                <p>To register your department, please fill the form below</p>
                <form class="mt-2" method="POST">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mt-2">
                                <input class="form-control form-input-border" name="name" required type="text" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mt-2">
                                <input class="form-control form-input-border" name="email" required type="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mt-2">
                                <select onchange="onDepartmentChange(this)" class="form-control form-input-border" required name="department">
                                    <option disabled selected>Select a department</option>
                                    <option value="0">Cooperation</option>
                                    <option value="1">Panchayath</option>
                                    <option value="2">Muncipality</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mt-2">
                                <input class="form-control form-input-border" name="locality" type="text" required placeholder="Locality">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mt-2">
                                <button type="submit" class="site-btn">Submit</button>
                                <button type="reset" class="site-btn sb-dark">clear</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

		<?php require_once('widgets/footer.php'); ?>
		<?php require_once('common/scripts.php'); ?>
		<script>
		</script>
	</body>
</html>

<?php
if(isset($_POST['name'])){
    $data =  Array (
        'department' => $_POST['department'],
        'name' => $_POST['locality'],
    );

    $id = $db->insert('localities', $data);
    if($id){
        $data =  Array (
            'username' => generateRandomString(),
            'name' => $_POST['name'],
            'type' => 0,
            'password' => generateRandomString(),
            'email' => $_POST['email'],
            'locality_id' => $id,
            'authority_status' => 1,
            'mobile_no' => '',
            'address' => '',
            'aadhar_no' => ''
        );
    
        $idn = $db->insert('users', $data);
        if($idn){
            reload_with(["status" => "success"]);
        }
        else reload_with(["status" => "failed"]);
    }
    else reload_with(["status" => "failed"]);
}
?>