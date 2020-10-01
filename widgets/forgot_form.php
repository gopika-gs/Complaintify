<form class="hero-form" method="post" enctype="multipart/form-data">
    <h1 class="form-title">Forgot Password?</h1>
    <h3 class="form-subtitle">Don't worry, let's get it back</h3>

    <?php if(isset($_GET['forgot-password'])) if($_GET['forgot-password']=='success'){ ?>
        <center>
            <div class="blog-date" style="margin-top: -6px;">Your password has been sent to your email</div>
        </center>
    <?php } ?>

    <?php if(isset($_GET['forgot-password'])) if($_GET['forgot-password']=='failed'){ ?>
        <center>
            <div class="blog-date" style="margin-top: -6px;">User with this email does not exist</div>
        </center>
    <?php } ?>

    <input type="text" required placeholder="Your Email" name="email">
    <br>
    <center>
        <button class="site-btn" name="forgot-password" type="submit">Sent</button>
    </center><br>
    <center>
    <a style="text-transform: uppercase; font-weight: 700; color: #fff; cursor: pointer;" onclick="activateSignupForm();">Retry logging in</a>
    </center>
</form>