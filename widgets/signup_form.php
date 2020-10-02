<form class="hero-form" method="post" enctype="multipart/form-data">
    <h1 class="form-title">Sign up</h1>
    <h3 class="form-subtitle">Login to get started</h3>

    <?php if(isset($_GET['signup'])) if($_GET['signup']=='failed'){ ?>
        <center>
            <div class="blog-date" style="margin-top: -6px;">Signup failed, Retry with another username</div>
        </center>
    <?php } ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group mt-2">
            <input class="form-control form-input-border" required name="username" type="text" placeholder="Username">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group mt-2">
            <input class="form-control form-input-border" required name="name" type="text" placeholder="Name">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group mt-2">
                <input class="form-control form-input-border" oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern=".{12,}" required maxlength="12"  name="aadhar-no" type= "text" placeholder="Aadhar Id">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group mt-2">
                <input class="form-control form-input-border" required name="address" type="text" placeholder="Address">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group mt-2">
                <input class="form-control form-input-border" oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern=".{10,}" required name="mobile-no" maxlength="10" type="text" placeholder="Phone">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group mt-2">
                <input  class="form-control form-input-border" required name="email" type="email" placeholder="Email Id">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group mt-2">
                <input  class="form-control form-input-border" required name="password" type="password" placeholder="Set your password">
            </div>
        </div>
    </div>
    <center>
        <button class="site-btn" name="signup" type="submit">Sign up</button>
        <a><button onclick="activateSignupForm(false);" class="site-btn btn-outline" name="login" type="button">Login</button></a>
    </center><br>
</form>
