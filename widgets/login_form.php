<form class="hero-form" method="post" enctype="multipart/form-data">
    <h1 class="form-title">Login</h1>
    <h3 class="form-subtitle">Login to get started</h3>
    <?php if(isset($_GET['login'])) if($_GET['login']=='failed'){ ?>
        <center>
            <div class="blog-date" style="margin-top: -6px;">Login failed, Incorrect username or password</div>
        </center>
    <?php } ?>
    <input type="text" required placeholder="Your Username" name="username">
    <input type="password" required placeholder="Your Password" name="password" />
    <br>
    <center>
        <button class="site-btn" name="login" type="submit">Login </button>
        <a><button onclick="activateSignupForm(true);" class="site-btn btn-outline" name="login" type="button">Sign up</button></a>
    </center><br>
    <center>
        <a style="text-transform: uppercase; font-weight: 700; color: #fff; cursor: pointer;" onclick="activateForgotForm();">Forget password ?</a>
    </center>
</form>