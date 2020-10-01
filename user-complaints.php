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
                <h2>Hi, <?php echo ucfirst(get_user_model()['name']); ?></h2>
                <nav class="site-breadcrumb">
                    <a class="sb-item" href="index.php">Home</a>
                    <span class="sb-item active">My Complaints</span>
                </nav>
            </div>
        </section>

        <section class="elements-section pt-5 pb-5">
		    <div class="container" style="padding-bottom: 135px;">
                <div class="row">
                    <div class="col-9" style="padding-right: 50px;">
                        <h2 class="el-title" style="font-weight: 700;">Your complaints</h2>

                        <?php if(isset($_GET["status"])) if($_GET["status"]=="success"){ ?>
                            <div class="blog-date">Compalint has been registered</div>
                        <?php } ?>

                        <br>

                        <?php
                            $complaints = $db->where('user_id', get_user_model()['id'])->get("complaints");
                            if ($db->count > 0){
                                foreach ($complaints as $complaint) { 
                        ?>

                                <div class="complaint-card">
                                    <div class="row">
                                        <div class="col">
                                            <a href="user-view-complaint.php?id=<?php echo $complaint['id']; ?>"><h5 class="card-title"><?php echo ucfirst($complaint['subject']); ?></h5></a>
                                            <p style="margin: 0px; margin-bottom: 16px;">Published on <?php echo $complaint['timestamp']; ?></p>
                                        </div>
                                        <div class="col-md-auto">
                                            <div class="blog-date" style="margin: 0px;"><?php
                                                if($complaint['status']==0) echo "pending";
                                                if($complaint['status']==1) echo "completed";
                                            ?></div>
                                        </div>
                                    </div>
                                </div>

                        <?php     }
                            } else {
                        ?>
                
                            <p style="font-size: 20px;"><i class="fa fa-times-circle-o"></i> Nothing to show</p>

                        <?php } ?>
                    </div>
                    <div class="col-3" style="padding-left: 27px; border-left: 1px solid #d6d6d6;">
                        <h2 class="el-title mb-3" style="font-weight: 700;">Create one</h2>
                        <p>Submit a complaint to any goverment office from here</p>
                        <a href="user-create-complaint.php"><button class="site-btn" style="padding: 12px; min-width: 150px;">Create one</button></a>
                        <br>
                    </div>
                </div>
            </div>
        </section>

		<?php require_once('widgets/footer.php'); ?>
		<?php require_once('common/scripts.php'); ?>
		<script>
			
		</script>
	</body>
</html>

<?php
	
?>