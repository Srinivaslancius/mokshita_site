<?php
ob_start();
include "admin/includes/config.php";
include "admin/includes/functions.php"; 
$getSiteSettingsData = getIndividualDetails('1',"site_settings","id"); 
?>
<?php 
    $currentFile = $_SERVER["PHP_SELF"];
    $parts = Explode('/', $currentFile);
    $page_name = $parts[count($parts) - 1];
?>
<div class="container">

            <!-- LOGO -->
            <div class="logo"><a href="index.php"><img src="uploads/logo/<?php echo $getSiteSettingsData['logo']; ?>" alt="Mokshita Institute"></a></div>
            <!-- END / LOGO -->

            <!-- NAVIGATION -->
            <nav class="navigation">

                <div class="open-menu">
                    <span class="item item-1"></span>
                    <span class="item item-2"></span>
                    <span class="item item-3"></span>
                </div>

                <!-- MENU -->
                <ul class="menu">
                    <li <?php if($page_name == 'index.php') {  ?>class="current-menu-item" <?php } ?>><a href="index.php">Home</a></li>
                    <li <?php if($page_name == 'about_us.php') {  ?>class="current-menu-item" <?php } ?>>
                        <a href="about_us.php">About Us</a>
                    </li>
                    <li <?php if($page_name == 'courses.php') {  ?>class="current-menu-item" <?php } ?>>
                        <a href="courses.php">Courses</a>
                        
                    </li>
                    <li <?php if($page_name == 'student_verification.php') {  ?>class="current-menu-item" <?php } ?>>
                        <a href="student_verification.php">Student Verification</a>
                    </li>
                    <li <?php if($page_name == 'contact_us.php') {  ?>class="current-menu-item" <?php } ?>>
                        <a href="contact_us.php">Contact Us</a>
                    </li>
                </ul>
                <!-- END / MENU -->

                <!-- SEARCH BOX -->
                
            </nav>
            <!-- END / NAVIGATION -->

        </div>