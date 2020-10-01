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
                <h2>View Complaint</h2>
                <nav class="site-breadcrumb">
                    <a class="sb-item" href="department-complaints.php">Department Complaints</a>
                    <span class="sb-item active">View Complaint</span>
                </nav>
            </div>
        </section>

        <section class="elements-section pt-5 pb-5">
            <div class="container" style="padding-bottom: 20px;">
                <?php
                    $complaint = $db->where('id', $_GET['id'])->getOne('complaints');
                ?>

                <h2 class="el-title" style="font-weight: 700;"><?php echo $complaint['subject']; ?></h2>
                <div class="blog-date" style="margin: 0px; margin-top: 10px; margin-bottom: 10px;"><?php
                    if($complaint['status']==0) echo "pending";
                    if($complaint['status']==1) echo "completed";
                ?></div>
                <p>Published on <?php echo $complaint['timestamp']; ?></p>
                <div class="sb-widget" style="margin-bottom: 22px;">
                    <div class="tags">
                        <a href=""><?php 
                            if($complaint['department']==0) echo "Cooperation";
                            else if($complaint['department']==1) echo "Panchayath";
                            else if($complaint['department']==2) echo "Muncipality";
                        ?> department</a>
                        <a href=""><?php echo get_locality_from_id($complaint['locality_id'])['name'];?> locality</a>
                    </div>
                </div>
                <p style="font-weight: 600; color: #595a5d;"><?php echo $complaint['description']; ?></p>
                <br>
                <h5>Applicant Details</h5><br>
                <table>
                    <tr>
                        <td>Name</td>
                        <td style="padding-left: 10px;">: <?php echo get_user_from_id($complaint['user_id'])['name']; ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td style="padding-left: 10px;">: <?php echo get_user_from_id($complaint['user_id'])['address']; ?></td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td style="padding-left: 10px;">: <?php echo get_user_from_id($complaint['user_id'])['mobile_no']; ?></td>
                    </tr>
                </table>
                <br>
                <br>
                <h5>Remarks</h5><br>
                <form method="POST">
                    <textarea required style="height: 265px; padding-top: 20px;" class="form-control form-input-border" placeholder="Enter the remark" name="remark"></textarea>
                    <button type="submit" class="site-btn">Close complaint</button>
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
if(isset($_POST['remark'])){
    $data = Array (
        'status' => 1,
        'remark' => $_POST["remark"]
    );
    $db->where('id', $_GET["id"]);
    if ($db->update('complaints', $data)){
        reload_with(["status" => "success"], "department-complaints.php");
    }
    else reload_with([
        "status" => "failed",
        "id" => $_GET["id"]
    ]);
}
?>