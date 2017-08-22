<?php include_once 'header.php'; error_reporting(0);?>
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
                    <h2 class="big">About Mokshita Institute</h2>
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
                        <?php $getAboutUsData = getIndividualDetails('2',"content_pages","id"); ?>  
                        <div class="info-acount">
                            <h3 class="md black"><?php echo $getAboutUsData['title']; ?></h3>
                            <p><?php echo $getAboutUsData['description']; ?>
                            </p>     
                        </div>
                    </div>    
                </div>
                <div class="col-md-12">
                    <div class="avatar-acount">
                        <?php $getAboutUsData = getIndividualDetails('3',"content_pages","id"); ?>  
                        <div class="info-acount">
                            <h3 class="md black"><?php echo $getAboutUsData['title']; ?></h3>
                            <p><?php echo $getAboutUsData['description']; ?>
                            </p>     
                        </div>
                    </div>    
                </div>
                <div class="col-md-12">
                    <div class="avatar-acount">
                        <?php $getAboutUsData = getIndividualDetails('4',"content_pages","id"); ?>  
                        <div class="info-acount">
                            <h3 class="md black"><?php echo $getAboutUsData['title']; ?></h3>
                            <p><?php echo $getAboutUsData['description']; ?>
                            </p>     
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