<header class="header-section">
    <a href="index.php" class="site-logo">
        <img src="images/logo.png" alt="">
    </a>
    <nav class="header-nav">
        <ul class="main-menu">
            <li><a href="index.php" class="<?php if($active=='home') echo 'active'; ?>"><?php echo (is_logged_in())?(is_admin()?"Verify Departments":(is_authority()?"Department Complaints":"My Complaints")):"Home"; ?></a></li>
            <li><a href="about-us.php" class="<?php if($active=='about-us') echo 'active'; ?>">About Us</a></li>
            <li><a href="feedback.php" class="<?php if($active=='feedback') echo 'active'; ?>">Feedback</a></li>
            <li><a href="contact-us.php" class="<?php if($active=='contact-us') echo 'active'; ?>">Contact Us</a></li>
        </ul>
        <?php if(is_logged_in()){ ?>
            <div class="header-right">
                <a href="user-complaints.php" class="hr-btn"><i class="fa fa-user"></i><?php echo ucfirst(get_user_model()['username']); ?></a>
                <div class="hr-btn" style="padding: 0; padding-top: 34px; padding-right: 17px;"><a href="sign-out.php"><div class="blog-date" style="margin-top: -6px;">Sign out</div></a></div>
            </div>
        <?php } else { ?>
            <div class="header-right">
                <a href="#" class="hr-btn"><i class="flaticon-013-mail"></i>Get in touch </a>
                <div class="hr-btn hr-btn-2">complaintify20@gmail.com</div>
            </div>
        <?php } ?>
        </div>
    </nav>
</header>