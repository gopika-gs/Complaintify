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
                <h2>Verfiy Departments</h2>
                <nav class="site-breadcrumb">
                    <a class="sb-item" href="index.php">Home</a>
                    <span class="sb-item active">Verfiy Departments</span>
                </nav>
            </div>
        </section>

        <section class="elements-section pt-5 pb-5">
            <div class="container" style="padding-bottom: 20px;">
                <h2 class="el-title" style="font-weight: 700;">Pending list</h2>

                <?php if(isset($_GET["status"])) if($_GET["status"]=="success"){ ?>
                    <div class="blog-date">Verification mail has been sent</div>
                <?php } ?>

                <br>

                <?php
                    $users = $db->where('authority_status', 1)->get("users");
                    if ($db->count > 0){
                        foreach ($users as $user) { 
                ?>

                        <div class="complaint-card">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title"><?php echo ucfirst($user['name']); ?></h5>
                                    <p style="margin: 0px; margin-bottom: 16px;"><?php echo $user['email']; ?></p>
                                </div>
                                <div class="col-md-auto">
                                    <a href="?verify=<?php echo $user['id']; ?>" onclick="return confirm('Are you sure?');"><div class="blog-date" style="margin: 0px;">Verify</div></a>
                                </div>
                            </div>
                        </div>

                <?php     }
                    } else {
                ?>
                
                <p style="font-size: 20px;"><i class="fa fa-times-circle-o"></i> Nothing to show</p>

                <?php } ?>
            </div>
        </section>

		<?php require_once('widgets/footer.php'); ?>
		<?php require_once('common/scripts.php'); ?>
		<script>

		</script>
	</body>
</html>

<?php
    if(isset($_GET["verify"])){
        $data = Array (
            'authority_status' => 2,
        );
        $db->where('id', $_GET["verify"]);
        if ($db->update('users', $data)){
            $user = $db->where('id', $_GET["verify"])->getOne("users");
            $msg = "Your account details - \n Username : ${user["username"]}\n Password : ${user["password"]}";
            mail($user["email"],"Complaintify Department Registeration", $msg);
            reload_with(["status" => "success"]);
        }
        else reload_with(["status" => "failed"]);
    }
?>