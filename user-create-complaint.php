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
                <h2>Create Complaint</h2>
                <nav class="site-breadcrumb">
                <a class="sb-item" href="user-complaints.php">My Complaints</a>
                    <span class="sb-item active">Create Complaint</span>
                </nav>
            </div>
        </section>

        <section class="elements-section pt-5 pb-5">
            <div class="container" style="padding-bottom: 20px;">
                <?php if(isset($_GET["status"])) if($_GET["status"]=="failed"){ ?>
                    <div class="blog-date">Something went wrong while creating compalint</div>
                <?php } ?>

                <h2 class="el-title" style="font-weight: 700;">Enter the form</h2>
                <p>To file a complaint, please fill the form below</p>
                <form class="mt-2" method="POST">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mt-2">
                                <input class="form-control form-input-border" name="subject" type="text" required placeholder="Subject">
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
                                <select class="form-control form-input-border" name="locality-id" required>
                                    <option disabled selected>Select a locality</option>
                                    <option disabled>Loading...</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mt-2">
                                <textarea style="height: 265px; padding-top: 20px;" class="form-control form-input-border" required placeholder="Enter the complaint" name="description"></textarea>
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
			function onDepartmentChange(e){
                defaultData = `<option disabled selected>Select a locality</option><option disabled>Loading...</option>`;
                $("[name=locality-id]").html(defaultData);
                $.get(`api/get-locality.php?department=${$(e).val()}`, function(data) {
                    $("[name=locality-id]").html(data);
                });
            }
		</script>
	</body>
</html>

<?php
if(isset($_POST['department'])){
    $data =  Array (
        'department' => $_POST['department'],
        'subject' => $_POST['subject'],
        'locality_id' => $_POST['locality-id'],
        'user_id' => get_user_model()['id'],
        'timestamp' => date("d-m-Y"),
        'description' => $_POST['description']
    );

    $id = $db->insert('complaints', $data);
    if($id){
        reload_with(["status" => "success"], "user-complaints.php");
    }
    else reload_with(["status" => "failed"]);
}
?>