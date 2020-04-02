<?php
session_start();
 
if(isset($_SESSION["loggedin"])){
    header("location: services_loggedin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<head>
        <meta charset="utf-8">
        <title>Element Services - Reddrop Buddies - Blood Donation Campaign & Multi-Concept Activism Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Reddrop Buddies - Blood Donation Campaign & Multi-Concept Activism Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/favicon.png" />

        <!-- The styles -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="css/owl.theme.css" rel="stylesheet" type="text/css" />
        <link href="css/animate.css" rel="stylesheet" type="text/css" />
        <link href="css/venobox.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
    </head> 

    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="images/loader.gif" alt="Loading......" /></span>
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
                                    <a href="index.php" title="Home">Home</a>
                                </li>
                                
                                <li><a href="about-us.php" title="About Us">About Us</a></li>

                                <li>
                                    <a href="#" title="Services">Services</a>
                                </li>

                                <li><a href="contact.php" title="Contact">Contact</a></li>

                                <li>
                                    <a class="login-btn" href="login.php">Login/Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </section>

        </header> <!-- end main-header  -->
        
        <!--  PAGE HEADING -->
        
        <section class="page-header">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3>
                            Our Services
                        </h3>

                        <p class="page-breadcrumb">
                            <a href="#">Home</a> / Our Services
                        </p>


                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!-- end .page-header  -->
        
        <!--  SERVICES SECTION-->

        <section class="section-content-block section-services-bg">

            <div class="container wow fadeInUp">

                <div class="row section-heading-wrapper hidden">

                    <div class="col-md-12 col-sm-12 text-left no-img-separator">
                        <h2>SENIOR CARE SERVICES</h2>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h4>No matter where you live in your own home a retirement village or a rest home.</h4>
                    </div> <!-- end .col-sm-10  -->

                </div> <!--  end .row  -->
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-left no-img-separator">
                        
                        
                        <h2>4 Steps To Make <br />Successful Business</h2>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h4 class="text-primary-color">How We Work</h4>
                    </div> <!-- end .col-sm-10  -->

                </div> <!--  end .row  -->
                 

                <div class="row">
                    
                    <div class="service-carousel owl-carousel"  data-nav="true" data-dots="false">

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                            <div class="service-layout-1">

                                <a href="#" class="service-img-box">
                                    <figure class="service-img">
                                        <img src="images/service_1.jpg" alt="service" />
                                    </figure> <!-- end .cause-img  -->
                                </a>

                                <article class="service-info">

                                    <h2><a href="#">Complete Home Touch</a></h2>
                                    <p>
                                        Complete home touch of our top senior clients need additional care.
                                    </p>

                                </article>

                            </div>

                        </div> <!--  end col-sm-6  -->

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                            <div class="service-layout-1">

                                <a href="#" class="service-img-box">
                                    <figure class="service-img">
                                        <img src="images/service_1.jpg" alt="service" />
                                    </figure> <!-- end .cause-img  -->
                                </a>

                                <article class="service-info">

                                    <h2>
                                        <a href="#">Ensure Family Care</a>
                                    </h2>

                                    <p>
                                        Ensure family care touch of our top senior clients need additional care.
                                    </p>

                                </article>
                            </div>

                        </div> <!--  end col-sm-6  -->

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                            <div class="service-layout-1">

                                <a href="#" class="service-img-box">
                                    <figure class="service-img">
                                        <img src="images/service_1.jpg" alt="service" />
                                    </figure> <!-- end .cause-img  -->
                                </a>

                                <article class="service-info">

                                    <h2>
                                        <a href="#">Elderly Medical Care</a>
                                    </h2>
                                    <p>
                                        Elderly medical care meets all honorable senior clients need additional care.
                                    </p>

                                </article>

                            </div>

                        </div> <!--  end col-sm-6  -->

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                            <div class="service-layout-1">

                                <a href="#" class="service-img-box">
                                    <figure class="service-img">
                                        <img src="images/service_1.jpg" alt="service" />
                                    </figure> <!-- end .cause-img  -->
                                </a>

                                <article class="service-info">

                                    <h2>
                                        <a href="#">Help Lonely People</a>
                                    </h2>
                                    <p>
                                        Help lonely people meets all honorable senior clients need additional care.
                                    </p>

                                </article>

                            </div>

                        </div> <!--  end col-sm-6  -->

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                            <div class="service-layout-1">

                                <a href="#" class="service-img-box">
                                    <figure class="service-img">
                                        <img src="images/service_1.jpg" alt="service" />
                                    </figure> <!-- end .cause-img  -->
                                </a>

                                <article class="service-info">

                                    <h2>
                                        <a href="#">Guide Proper Fitness</a>
                                    </h2>

                                    <p>
                                        Guide proper fitness meets all honorable senior clients need additional care.
                                    </p>

                                </article>

                            </div>

                        </div> <!--  end col-sm-6  -->

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                            <div class="service-layout-1">

                                <a href="#" class="service-img-box">
                                    <figure class="service-img">
                                        <img src="images/service_1.jpg" alt="service" />
                                    </figure> <!-- end .cause-img  -->
                                </a>

                                <article class="service-info">

                                    <h2><a href="#">Provide Healthy Foods</a></h2>
                                    <p>
                                        Provide healthy foods meets all honorable senior clients need additional care.
                                    </p>

                                </article>

                            </div>

                        </div> <!--  end col-sm-6  -->

                    </div>

                </div>
                
                <div class="row">
                    <div class="col-sm-12 text-center"><a href="#" class="btn btn-theme">LOAD MORE SERVICES</a></div>
                </div>

            </div> <!--  end .container  -->

        </section> <!--  end .section-services -->
                            
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


<!-- Mirrored from templates.bwlthemes.com/blood_donation/v_2/element-service.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 17:57:33 GMT -->
</html>