<?php
session_start();
 
if(isset($_SESSION["loggedin"])){
    header("location: faq_loggedin.php");
    exit;
}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    
<!-- Mirrored from templates.bwlthemes.com/blood_donation/v_2/faq.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 17:57:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <title>FAQ - Reddrop Buddies - Blood Donation Campaign & Multi-Concept Activism Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Reddrop Buddies - Blood Donation Campaign & Multi-Concept Activism Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/favicon.png" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/styles.css" />

    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
        </div>

        <!--  HEADER -->

        <header class="main-header clearfix" data-sticky_header="true">

            <div class="top-bar clearfix">

                <div class="container">

                    <div class="row">

                        <div class="col-md-8 col-sm-12">

                            <p>
                                <span><i class="fa fa-building-o"></i> <strong>Contact: </strong>  East Shibgonj, Sylhet, 3100</span>
                                <span>&nbsp;<i class="fa fa-phone"></i> <strong>Call Us:</strong> +880-1891-82709</span>
                            </p>

                        </div>

                        <div class="col-md-4col-sm-12">
                            <div class="top-bar-social">
                                <a href="#"><i class="fa fa-facebook rounded-box"></i></a>
                                <a href="#"><i class="fa fa-twitter rounded-box"></i></a>
                                <a href="#"><i class="fa fa-google-plus rounded-box"></i></a>
                                <a href="#"><i class="fa fa-instagram rounded-box"></i></a>
                                <a href="#"><i class="fa fa-youtube rounded-box"></i></a>
                            </div>   
                        </div> 

                    </div>

                </div> <!--  end .container -->

            </div> <!--  end .top-bar  -->

            <section class="header-wrapper navgiation-wrapper">

                <div class="navbar navbar-default">			
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="index-2.php"><img alt="" src="images/logo.png"></a>
                        </div>

                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                
                                <li>
                                    <a href="#">Home</a>
                                    <ul class="drop-down">
                                        <li><a href="index-2.php" title="Home Layout 01">Home 01</a></li>
                                        <li><a href="home-2.php" title="Home Layout 02">Home 02</a></li>
                                    </ul>
                                </li>

                                
                                <li><a href="about-us.php" title="About Us">About Us</a></li>

                                <li>
                                    <a href="#">Campaign</a>
                                    <ul class="drop-down">
                                        <li><a href="events.php">All Campaigns</a></li>
                                        <li><a href="event-single.php">Single Campaign</a></li>
                                    </ul>
                                </li>

                                <li class="drop"><a href="#">Pages</a>
                                    <ul class="drop-down">
                                        
                                        <li class="drop"><a href="#">Elements</a>
                                            <ul class="drop-down level3">
                                                <li><a href="element-cta.php">CTA/PROMO BOX</a></li>
                                                <li><a href="element-counter.php">Fun Facts</a></li>
                                                <li><a href="element-logos.php">Logos/Clients</a></li>
                                                <li><a href="element-process.php">Process</a></li>
                                                <li><a href="element-highlights.php">Highlights Box</a></li>
                                                <li><a href="element-service.php">Services</a></li>
                                                <li><a href="element-subscribe.php">Subscribe</a></li>
                                                <li><a href="element-team.php">Team</a></li>
                                                <li><a href="element-feedback.php">Testimonials</a></li>
                                            </ul>
                                        </li>
                                       
                                        <li class="drop"><a href="#">Gallery</a>
                                            <ul class="drop-down level3">
                                                <li><a href="gallery-1.php">Layout 01</a></li> 
                                                <li><a href="gallery-2.php">Layout 02</a></li> 

                                            </ul>
                                        </li>
                                         <li><a href="faq.php" title="FAQ">FAQ</a></li>
                                        <li><a href="404.php" title="404 Page">404 Page</a></li> 
                                        <li class="drop"><a href="#">Level 3</a>
                                            <ul class="drop-down level3">
                                                <li><a href="#">Level 3.1</a></li>
                                                <li><a href="#">Level 3.2</a></li>
                                                <li><a href="#">Level 3.3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Blog</a>
                                    <ul class="drop-down">
                                        <li><a href="blog.php">All Posts</a></li> 
                                        <li><a href="single.php">Single Page</a></li>
                                    </ul>
                                </li>

                                <li><a href="contact.php">Contact</a></li>
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
                            FAQ
                        </h3>

                        <p class="page-breadcrumb">
                            <a href="#">Home</a> / FAQ
                        </p>


                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!-- end .page-header  -->

        <!--  SECTION FAQ -->

        <section class="section-content-block section-faq">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">F.A.Q</h2>
                        <p class="section-subheading">
                            know more about blood donation and know how you can help people.
                        </p>
                    </div> <!-- end .col-sm-10  -->

                </div> <!--  end .row  -->

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="accordion">

                        <div class="panel panel-default faq-box">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >What are preliminary psychological disorder ?</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default faq-box">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">How many sessions can I have with my counselor?</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default faq-box">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> How can I be sure effective form of counseling?</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default faq-box">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" >How is my privacy protected?</a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                                </div>
                            </div>
                        </div> 

                    </div> <!-- end .col-md-6  -->

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="accordion2">

                        <div class="panel panel-default faq-box">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive" >What are preliminary psychological disorder ?</a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default faq-box">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">How many sessions can I have with my counselor?</a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default faq-box">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven"> How can I be sure effective form of counseling?</a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default faq-box">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight" >How is my privacy protected?</a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                                </div>
                            </div>
                        </div> 

                    </div> <!-- end .col-md-12  -->                    

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!--  end .section-faq -->


        <!-- CLIENT LOGO SECTION  -->

        <section class="section-content-block section-secondary-bg">

            <div class="container wow fadeInUp">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center no-img-separator">
                        <h2 class="section-heading">Our Sponsors</h2>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h4 class="section-subheading">The sponsors who give their valuable amount to fulfill our mission.</h4>
                    </div> <!-- end .col-sm-10  -->                      

                </div> <!-- end .row  -->


                <div class="row">

                    <div class="logo-items logo-layout-1 owl-carousel text-center" data-items='7' data-nav='true' data-dots='false'>

                        <div class="client-logo">

                            <img src="images/logo_1.png" alt="" />

                        </div>

                        <div class="client-logo">

                            <img src="images/logo_2.png" alt="" />

                        </div>


                        <div class="client-logo">

                            <img src="images/logo_3.png" alt="" />

                        </div>



                        <div class="client-logo">

                            <img src="images/logo_4.png" alt="" />

                        </div>

                        <div class="client-logo">

                            <img src="images/logo_5.png" alt="" />

                        </div>



                        <div class="client-logo">

                            <img src="images/logo_6.png" alt="" />

                        </div>

                        <div class="client-logo">

                            <img src="images/logo_7.png" alt="" />

                        </div>

                        <div class="client-logo">

                            <img src="images/logo_8.png" alt="" />

                        </div>


                    </div> <!-- end .testimonial-container  -->

                </div> <!-- end row  -->

            </div> <!-- end .container  -->

        </section> <!--  end .section-client-logo -->


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


<!-- Mirrored from templates.bwlthemes.com/blood_donation/v_2/faq.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 17:57:34 GMT -->
</html>