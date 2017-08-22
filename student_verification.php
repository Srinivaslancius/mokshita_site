<?php include_once 'header.php'; error_reporting(0);?>
<?php
    if(isset($_POST['submit']))
    {
        $sql="SELECT `name`,`certificate_number`, `course_name`,`duration`,`course_start_date`,`course_end_date` from `students` WHERE `certificate_number`='".$_POST['certificate_number']."'";
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        $setCnt = $result->num_rows;
       
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
    <title>Mokshita Training Institute</title>

</head>
<body id="page-top" class="home home-two">

<!-- PAGE WRAP -->
<div id="page-wrap">

    <!-- HEADER -->
    <!-- <header id="header" class="header">
        <?php //include_once 'header.php';?>
    </header> -->
    <!-- END / HEADER -->

    <!-- SUB BANNER RESULT NOT FOUND -->
    <section id="featured-request-teacher" class="featured-request-teacher section">
        <div class="awe-parallax bg-featured-request-teacher"></div>
        <div class="awe-overlay overlay-color-1"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="request-form">
                        <h2>Start Verifing Student Certification</h2>
                        <form action="#" method="post">
                            <div class="form-item">
                                <input type="text"  id="std_certificate_num" placeholder="Enter Student Certification ID" autocomplete="off" name="certificate_number" required>
                            </div>
                           <?php 
                            if(isset($setCnt) && $setCnt==0){
                                        echo "<p style='color:red'>Please Enter Valid Certification Id</p>";
                                    }
                           ?>
                           <div class="form-submit-1">
                                <input type="submit" name="submit"value="Verify" class="mc-btn btn-style-1">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="request-featured">
                        <h1 class="big">Verify Student Certification is<br> SUPER EASY</h1>
                        <div class="create-course-info-wrap">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="create-course-info">
                                        <span class="count">1</span>
                                        <p>Enter Student Certification Id</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="create-course-info">
                                        <span class="count">2</span>
                                        <p>Submit the Details</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="create-course-info">
                                        <span class="count">3</span>
                                        <p>Get Result</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="second-featured">
                            <div class="mc-count-item">
                                <h4>Courses</h4>
                                <p><span class="countup">2536,556</span></p>
                            </div>
                             <div class="mc-count-item">
                                <h4>Teachers</h4>
                                <p><span class="countup">10,389</span></p>
                            </div>
                            <div class="mc-count-item">
                                <h4>Students</h4>
                                <p><span class="countup">34,177</span></p>
                            </div>
                            <div class="mc-count-item">
                                <h4>Tuition Paid</h4>
                                <p>$ <span class="countup">793,361,890</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="course-top">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="new-course">
                        <div class="item course-code">
                            <i class="icon md-barcode"></i>
                            <h4><a href="#">Course Code</a></h4>
                            <p class="detail-course"><?php echo $row['course_name']?></p>
                        </div>
                        <div class="item course-code">
                            <i class="icon md-time"></i>
                            <h4><a href="#">Duration</a></h4>
                            <p class="detail-course"><?php echo $row['duration']?></p>
                        </div>
                        <div class="item course-code">
                            <i class="icon md-img-check"></i>
                            <h4><a href="#">Course Start Date</a></h4>
                            <p class="detail-course"><?php echo date("D M d, Y", strtotime($row['course_start_date']));?></p>
                        </div>
                        <div class="item course-code">
                            <i class="icon md-img-check"></i>
                            <h4><a href="#">Course End Date</a></h4>
                            <p class="detail-course"><?php echo date("D M d, Y", strtotime($row['course_end_date']));?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-2"></div>
                <div class="col-md-8" style="background: #fff;">
                    <div class="new-course">
                        <div class="image-info">
                            <img src="images/img-upload.jpg" alt="">
                        </div>
                        <div class="profile-email-address">
                            <div class="profile-email">
                                <h5>Student Name:</h5>
                                <p><?php echo $row['name']?></p>
                            </div>
                            <div class="profile-address">
                                <h5>Email ID:</h5>
                                <p><?php echo $row['email']?></p>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <!-- END / SUB BANNER RESULT NOT FOUND -->    
   
    <!-- CATEGORIES  -->

   <!-- FOOTER -->
    <footer id="footer" class="footer">
        <?php include_once 'footer.php';?>
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
<script type="text/javascript" src="js/library/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>