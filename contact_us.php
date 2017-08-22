 <?php include_once 'header.php'; error_reporting(0);?>
<?php
    if(isset($_POST['submit'])){

    }else{

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <!-- Google font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="css/library/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/library/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/library/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/md-font.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <title>Mokshita Institute</title>

</head>
<body id="page-top">

<!-- PAGE WRAP -->
<div id="page-wrap">

    <!-- HEADER -->
    <header id="header" class="header">
        <?php include_once 'header.php';?>
    </header>
    <!-- END / HEADER -->

    <!-- PROFILE FEATURE -->
    <section class="profile-feature">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="info-author">
                    
                <div class="name-author">
                    <h2 class="big">Contact Us</h2>
                </div>     
                
            </div>
            
        </div>
    </section>
    <!-- END / PROFILE FEATURE -->

    <!-- CONTEN BAR -->
    
   <!-- END / CONTENT BAR -->

    <!-- PROFILE -->
    
    <section class="profile">
        <div class="container">
            
            
            <div class="row">
                <div class="col-md-12">
                    <div class="avatar-acount">
                           
                        <div class="info-acount">
                            <h3 class="md black"></h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30953.78393523743!2d78.14440270791145!3d14.122979616904143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb3cef4f144ae5d%3A0x358dec2a622ff177!2sKadiri%2C+Andhra+Pradesh!5e0!3m2!1sen!2sin!4v1503299198549" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            
                        </div>
                        
                    </div>    
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="avatar-acount">
                           
                        <div class="info-acount">
                            <div class="col-md-6">
                                <div class="request-form">
                                    <h2>Contact Form</h2>
                                    <form action="#" method="POST">
                                        <div class="form-yourname">
                                            <input type="text" name="name" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-yourmail">
                                            <input type="email"name="mail" placeholder="Your Mail" required>
                                        </div>
                                        <div class="form-phone">
                                            <input type="text" name="phone" placeholder="Your Phone number" required>
                                        </div>
                                        <div class="form-yourmail">
                                            <input type="text"name="subject" placeholder="Your Subject" required>
                                        </div>

                                        <div class="form-submit-1">
                                            <input type="submit" name="submit" value="Send request" class="mc-btn btn-style-1">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php $getContactData = getIndividualDetails('1',"content_pages","id"); ?>
                            <div class="col-md-6">
                                <div class="sidebar-course-intro">
                                    <div class="widget widget_equipment">
                                        <i class="icon md-config"></i>
                                        <h4 class="xsm black bold">Contact Name</h4>
                                        <div class="equipment-body">
                                            <a href="#"><?php echo $getContactData['title']; ?></a>,
                                          
                                        </div>
                                    </div>
                                    <div class="widget widget_equipment">
                                        <i class="icon md-config"></i>
                                        <h4 class="xsm black bold">Contact Number</h4>
                                        <div class="equipment-body">
                                            <a href="#"><?php echo $getSiteSettingsData['mobile']; ?></a>,
                                          
                                        </div>
                                    </div>
                                    <div class="widget widget_equipment">
                                        <i class="icon md-config"></i>
                                        <h4 class="xsm black bold">Email ID</h4>
                                        <div class="equipment-body">
                                            <p><?php echo $getSiteSettingsData['email']; ?></p>
                                          
                                        </div>
                                    </div>
                                    <div class="widget widget_equipment">
                                        <i class="icon md-config"></i>
                                        <h4 class="xsm black bold">Address</h4>
                                        <div class="equipment-body">
                                            <p><?php echo $getSiteSettingsData['address']; ?></p>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>    
                </div>
                
            </div>
        </div>
        
    </section>
       
    <!-- END / PROFILE -->
    <!-- FOOTER -->
    <footer id="footer" class="footer"> 
        <?php include_once './footer.php';?>
    </footer>
    <!-- END / FOOTER -->
</div>
<!-- END / PAGE WRAP -->

<!-- Load jQuery -->
<script type="text/javascript" src="js/library/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/library/bootstrap.min.js"></script>
<script type="text/javascript" src="js/library/jquery.owl.carousel.js"></script>
<script type="text/javascript" src="js/library/jquery.appear.min.js"></script>
<script type="text/javascript" src="js/library/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>