<?php
require_once "config.php";

session_start();
$username=$_SESSION['username'];
$sql2="SELECT * FROM users WHERE username = '$username'";
$query=mysqli_query($link,$sql2);
$row = mysqli_fetch_array($query);

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
if($_SESSION["utype"] !=='A'){
    header("location: index_user.php");
    exit;
}
?>
 
<!DOCTYPE html>
 <html lang="en"> 

    
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
        <meta charset="utf-8">
        <title>LPU BLOOD SERVICE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Portal for finding blood donors in LPU">
        <meta name="author" content="LPU">
        <link rel="shortcut icon" href="images/favicon.png" />

        <!-- The styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/styles.css" />

    <body> 

        <div id="preloader">
            <span ><img src="images/loader.gif" alt="" /></span>
        </div>

        <!--  HEADER -->

        <header class="main-header clearfix" data-sticky_header="true">
        
            <section class="header-wrapper navgiation-wrapper">

                <div class="navbar navbar-default">			
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="index.php"><img alt="" src="images/logo.png"></a>
                        </div>

                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#" title="Home">Home</a>
                                </li>
                                
                                <li><a href="about-us.php" title="About Us">About Us</a></li>

                                <li>
                                    <a href="services.php" title="Services">Services</a>
                                </li>

                                <li><a href="contact.php" title="Contact">Contact</a></li>
                                <li><a>Welcome&nbsp;<?php echo ($row["FNAME"]." ".$row["LNAME"]); ?></a>
                                    <ul class="drop-down">
                                        <li><a class="login-btn" href="password_change.php">Change Password</a></li>
                                        <li><a class="login-btn" href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="container"><h3>Hi, <b></b>,Welcome to our site.</h3></div> -->
                </div>

            </section>

        </header> <!-- end main-header  -->

        <!--  HOME 2 BANNER BLOCK  -->

        <section class="section-banner" data-bg_img="images/home_1.jpg" data-bg_color="#111111" data-bg_opacity="0.1" >

            <div class="container wow fadeInUp">

                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="banner-content" >
                            <h2>
                                Donate blood and get real blessings
                            </h2>					
                            <h3>Blood is the most precious gift that anyone can give to another person.<br>
                                Donating blood not only saves the life also save donor's lives.
                            </h3>
                            <a href="users_list.php" class="btn btn-theme margin-top-32">All Donor Details</a>
                            <a href="request_blood.php" class="btn btn-theme margin-top-32">Request Blood</a>
                            <a href="userlistbybg.php" class="btn btn-theme margin-top-32">Search Donor by Blood Group</a>
                            <a href="userlistbyrno.php" class="btn btn-theme margin-top-32">Search Donor by <br>Registration Number</a>
                            <a href="recorddonation.php" class="btn btn-theme margin-top-32">Record Blood Donation</a>
                            <a href="alldonationhistory.php" class="btn btn-theme margin-top-32">View All Donation History</a>
                            <a href="users_request_view.php" class="btn btn-theme margin-top-32">View User Requests</a>




                        </div>
                    </div> <!-- end .col-md-12  -->
                </div>

            </div>

        </section>

        <!--  SECTION DONATION PROCESS -->

        <section class="section-content-block section-process">

            <div class="container">

                <div class="row hidden">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading"><span>Donation</span> Process</h2>
                        <p class="section-subheading">The donation process from the time you register until you donate</p>
                    </div>                   

                </div> <!--  end .row  -->
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center no-img-separator">
                        <h2>DONATION PROCESS</h2>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h4>The donation process from the time you arrive center until the time you leave</h4>
                    </div>                       


                </div> <!-- end .row  -->

                <div class="row wow fadeInUp">

                    <div class="col-lg-6 col-md-offset-0 col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="process-layout">

                            <figure class="process-img">

                                <img src="images/process_1.jpg" alt="service" />
                                <div class="step">
                                    <h3>1</h3>
                                </div>
                            </figure> <!-- end .cause-img  -->

                            <article class="process-info">
                                <h2>Registration</h2>   
                                <p>You need to register on the portal.</p>
                            </article>

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->

                    <div class="col-lg-6 col-md-offset-0 col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="process-layout">

                            <figure class="process-img">
                                <img src="images/process_2.jpg" alt="process" />
                                <div class="step">
                                    <h3>2</h3>
                                </div>
                            </figure> <!-- end .cau<h5 class="step">1</h5>se-img  -->

                            <article class="process-info">                                   
                                <h2>Notification</h2>
                                <p>You will recieve a notification whenever there is a need of blood matching your profile.</p>
                            </article>

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->



                    <div class="col-lg-6 col-md-offset-0 col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="process-layout">

                            <figure class="process-img">
                                <img src="images/process_2.jpg" alt="process" />
                                <div class="step">
                                    <h3>3</h3>
                                </div>
                            </figure> <!-- end .cau<h5 class="step">1</h5>se-img  -->

                            <article class="process-info">                                   
                                <h2>Screening</h2>
                                <p>A drop of blood from your finger will take for simple test to ensure that your blood iron levels are proper enough for donation process.</p>
                            </article>

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->


                    <div class="col-lg-6 col-md-offset-0 col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="process-layout">

                            <figure class="process-img">
                                <img src="images/process_3.jpg" alt="process" />
                                <div class="step">
                                    <h3>4</h3>
                                </div>
                            </figure> <!-- end .cause-img  -->

                            <article class="process-info">
                                <h2>Donation</h2>
                                <p>After ensuring and passed screening test successfully you will be directed to a donor bed for donation. It will take only 6-10 minutes.</p>
                            </article>

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->

                </div> <!--  end .row --> 

            </div> <!--  end .container  -->

        </section> <!--  end .section-process -->
        
        
        
        <!--  SECTION CAMPAIGNS   -->

        <section class="section-content-block section-secondary-bg" >

            <div class="container">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-left no-img-separator">
                        <h2>OUR UPCOMING CAMPAIGNS</h2>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h4>Encourage new donors to join and continue to give blood.</h4>
                    </div> <!-- end .col-sm-12  -->                       

                </div> <!-- end .row  -->
                
                <div class="row margin-top-48">
                    <div class="col-md-12 col-sm-12">
                        <div class="event-layout-1 theme-custom-box-shadow clearfix"> 
                            <figure class="event-img">
                                <a href="#">
                                    <img src="images/event_1.jpg" alt="">
                                </a>
                            </figure>
                            <div class="event-info"> 
                                <a class="event-date" href="#"><i class="fa fa-calendar-o"></i> 20 April, 2020</a>
                                <h4>
                                    <a href="#">Blood Donation Camp</a>
                                </h4>
                                <div class="event-exceprt">Open Blood Donation camp at LPU</div>
                                <div class="event-time">
                                    <a href="#"><i class="fa fa-clock-o"></i> 10.00 - 3.00</a>
                                    <a href="#"> <i class="fa fa-map-marker"></i> DSW, LPU</a>
                                </div>
                            </div>
                        </div>
                    </div>

        </section>

        <!--  SECTION INFO   -->

        <section class="section-content-block section-secondary-bg">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12"></div>
                    <div class="col-lg-4 col-md-12 col-sm-12"> 
                        
                        <div class="row section-heading-wrapper" >

                            <div class="col-md-12 col-sm-12 text-left no-img-separator">
                                <h4>Good To Know</h4>
                                <span class="heading-separator heading-separator-horizontal"></span>
                                <h2>Helpful Information
                                </h2>

                            </div> 

                        </div>

                        <div class="about-details"> 

                            <ul class="custom-bullet-list">
                                <li>Maintain a healthy iron level by eating iron rich foods.</li>
                                <li>Drink an extra 1 Litre of water prior to your donation.</li>
                                <li>Avoid alcohol consumption before your blood donation.</li>
                                <li>Finally, Try to get a good night sound sleep after donation.</li>
                            </ul>

                        </div> <!--  end .about-details -->  
               
                    </div> <!--  end col-lg-4  -->
                    <div class="col-lg-4 col-md-12 col-sm-12"></div>

                </div> <!--  end .row  -->

            </div> <!-- end row  -->

            </div> <!--  end .container -->

        </section>  <!--  end .appointment-section  -->

        <!-- SECTION CTA  -->   

        <section class="cta-section-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <h2>We have taken the inititative to help the students in case of any emergency.</h2>
                    </div> <!--  end .col-md-8  -->
                </div> <!--  end .row  -->
            </div>
        </section>         

        <!-- START FOOTER  -->

        <footer>            

            <section class="footer-widget-area footer-widget-area-bg">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="about-footer">

                                <div class="row">

                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <img src="images/logo_footer.png" alt="Logo" />
                                    </div> <!--  end col-lg-3-->

                                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <p>
                                            We are working towards the welfare of the students and other members of Lovely Professional University. 
                                            LBS is a platform for blood requirement and emergency. The aim is to provide one stop solution to this need.
                                        </p>
                                    </div> <!--  end .col-lg-9  -->

                                </div> <!--  end .row -->

                            </div> <!--  end .about-footer  -->

                        </div> <!--  end .col-md-12  -->

                    </div> <!--  end .row  -->

                    <div class="row"> 						                      

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="footer-widget">

                                <div class="sidebar-widget-wrapper">

                                    <div class="footer-widget-header clearfix">
                                        <h3>Contact Us</h3>
                                    </div>  <!--  end .footer-widget-header --> 


                                    <div class="textwidget">                                       

                                        <i class="fa fa-envelope-o fa-contact"></i> <p><a href="mailto:lpubloodservice@gmail.com">lpubloodservice@gmail.com</a></p>

                                        <i class="fa fa-location-arrow fa-contact"></i> <p>UniHospital, LPU<br/>Phagwara, Punjab</p>

                                        <i class="fa fa-phone fa-contact"></i> <p>Mobile:&nbsp; +91-7017349434</p>                              

                                    </div>

                                </div> <!-- end .footer-widget-wrapper  -->

                            </div> <!--  end .footer-widget  -->

                        </div> <!--  end .col-md-4 col-sm-12 -->  
                        <div class="col-md-4 col-sm-6 col-xs-12">


                        </div> <!--  end .col-md-4 col-sm-12 -->  

                        <div class="col-md-6 col-sm-12 col-xs-12">

                            <div class="footer-widget clearfix">

                                <div class="sidebar-widget-wrapper">

                                    <div class="footer-widget-header clearfix">
                                        <h3>Useful Links</h3>
                                    </div>  <!--  end .footer-widget-header --> 


                                    <ul class="footer-useful-links">

                                        <li>
                                            <a href="index.php">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Home
                                            </a>
                                        </li>

                                        <li>
                                            <a href="about-us.php">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                About Us
                                            </a>
                                        </li>

                                        <li>
                                            <a href="services.php">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Services
                                            </a>
                                        </li>

                                        <li>
                                            <a href="faq.php">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Frequently Asked Questions
                                            </a>
                                        </li>

                                        <li>
                                            <a href="contact.php">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Contact Us
                                            </a>
                                        </li>                

                                    </ul>

                                </div> <!--  end .footer-widget  -->        

                            </div> <!--  end .footer-widget  -->            

                        </div> <!--  end .col-md-4 col-sm-12 -->    

                         

                    </div> <!-- end row  -->

                </div> <!-- end .container  -->

            </section> <!--  end .footer-widget-area  -->

            <!--FOOTER CONTENT  -->

            <section class="footer-contents">

                <div class="container">

                    <div class="row clearfix">
                        
                        <div class="col-md-12 col-sm-12 text-center">
                            <p class="copyright-text"> Copyright 2020 - LPU Blood Service. All Rights Reserved.</p>
                        </div>  <!-- end .col-sm-6  -->

                    </div> <!-- end .row  -->                                    

                </div> <!--  end .container  -->

            </section> <!--  end .footer-content  -->

        </footer>

        <!-- END FOOTER  -->

        <!-- Back To Top Button  -->

        <a id="backTop">Back To Top</a>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.backTop.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/waypoints-sticky.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/venobox.min.js"></script>
        <script src="js/custom-scripts.js"></script>
    </body>


</html>