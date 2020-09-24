<header class="header-section">
    <a href="index.php" class="site-logo">
        <img src="images/logo.png" alt="">
    </a>
    <nav class="header-nav">
        <ul class="main-menu">
            <li><a href="?page=home" class="<?php if($_GET['page']=='' || $_GET['page']=='home') echo 'active'; ?>">Home</a></li>
            <li><a href="?page=about_us" class="<?php if($_GET['page']=='about_us') echo 'active'; ?>">About Us</a></li>
            <li><a href="?page=feedback" class="<?php if($_GET['page']=='feedback') echo 'active'; ?>">Feedback</a></li>
            <li><a href="?page=contact_us" class="<?php if($_GET['page']=='contact_us') echo 'active'; ?>">Contact</a></li>
        </ul>
        <div class="header-right">
            <a href="#" class="hr-btn"><i class="flaticon-013-mail"></i>Get in touch </a>
            <div class="hr-btn hr-btn-2">complaintify@gmail.com</div>
        </div>
    </nav>
</header>