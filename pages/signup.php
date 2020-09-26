<section class="page-top-section set-bg" data-setbg="images/page-top-bg/2.jpg">
    <div class="container">
        <h2>Sign up</h2>
        <nav class="site-breadcrumb">
            <a class="sb-item" href="#">Home</a>
            <span class="sb-item active">Sign up</span>
        </nav>
    </div>
</section>
<div class="contact3 pb-5">
  <div class="row no-gutters">
    <div class="container pb-5">
    <div class="row">
        <div class="col-lg-6">
          <div class="card-shadow"  style="margin-top:100px;">
            <img src="images/11.jpg" height="700"> 
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-box ml-3" style="margin-top:100px;">
            <h1 class="font-weight-light mt-2" style="font-size: 47px;">Sign Up Here....</h1>
			 <form class="mt-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input class="form-control form-input-border" name="nametype="text" placeholder="Name">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input class="form-control form-input-border"  name="aadhar" type= "number" placeholder="Aadhar Id">
                  </div>
                </div>
                <div class="col-lg-12">
                <input type="radio" id="male" name="gender" value="male">
                   <label for="male">Male</label><br>
                  <input type="radio" id="female" name="gender" value="female">
                   <label for="female">Female</label><br>
               <input type="radio" id="other" name="gender" value="other">
                  <label for="other">Other</label>
				    <div class="form-group mt-2">
                    <input class="form-control form-input-border" name="address" type="text" placeholder="Address">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input class="form-control form-input-border"  name="phone" type="number" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input  class="form-control form-input-border"  name="email" type="email id" placeholder="Email Id">
                    </div>
                  </div>
                  <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input  class="form-control form-input-border" name="password" type="password" placeholder="Set your password">
                    </div>
                  </div>

                </div>
                <div class="col-lg-12">
                  <button class="site-btn">Signup</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
	


<?php
	if($_POST['submit']){ 
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