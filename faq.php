<?php
session_start();
 
if(isset($_SESSION["loggedin"])){
    header("location: faq_loggedin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en"> 
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<head>
        <meta charset="utf-8">
        <title>FAQ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Portal for finding blood donors in LPU">
        <meta name="author" content="LPU">
        <link rel="shortcut icon" href="images/favicon.png" />


        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/styles.css" />

    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
        </div>


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
                                    <a href="services.php" title="Services">Services</a>
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

        </header>


        <section class="page-header">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3>
                            F.A.Q.
                        </h3>

                    </div>

                </div>

            </div> 

        </section> 


        <section class="section-content-block section-faq">

<div class="container">

    <div class="row">

        <div class="col-md-12 col-sm-12 text-center">
            <h3 class="section-heading">Get answers to some common questions!</h3>
            
        </div>
    </div>

    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="accordion">

            <div class="panel panel-default faq-box">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">How to do I get notified of Blood Need</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body">
                        You will receive a notification on your registered email and mobile number whenever blood is needed matching your group.
                    </div>
                </div>
            </div>

            <div class="panel panel-default faq-box">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Can I request for blood in case of emergency?</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        Yes, you can use the Blood Request option on your dashboard to submit a request for generating notification to available donors.
                    </div>
                </div>
            </div>
            <div class="panel panel-default faq-box">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Are the donors notified once I submit a request?</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        No, We will review your request as per the reason specified and will send out the notification to applicable donors once it is accepted.
                    </div>
                </div>
            </div>

        </div> 

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="accordion2">

        <div class="panel panel-default faq-box">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" >How do I know if my request is accepted or rejected?</a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                        You can use the View Request Status option on your dashboard to check the status of your request.
                    </div>
                </div>
            </div> 

            <div class="panel panel-default faq-box">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive" >Where to reach or contact to donate blood ?</a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body">
                        You need to report at Baldev Raj Mittal UniHospital or contact at our helpline number.
                    </div>
                </div>
            </div>

            <div class="panel panel-default faq-box">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">Can I see my blood donation history?</a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse">
                    <div class="panel-body">
                        Yes, you can use View Donation History option on your dashboard to check your entire blood donation history through our platform.
                    </div>
                </div>
            </div>

        </div>                   

    </div> 

</div>

</section> 



<section class="section-content-block section-secondary-bg">


</section> 


<footer>            

    <section class="footer-widget-area footer-widget-area-bg">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="about-footer">

                        <div class="row">

                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                <img src="images/logo_footer.png" alt="Logo" />
                            </div>

                            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                <p>
                                    We are working towards the welfare of the students and other members of Lovely Professional University. 
                                    LBS is a platform for blood requirement and emergency. The aim is to provide one stop solution to this need.
                                </p>
                            </div> 

                        </div> 

                    </div>

                </div>

            </div>

            <div class="row"> 						                      

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <div class="footer-widget">

                        <div class="sidebar-widget-wrapper">

                            <div class="footer-widget-header clearfix">
                                <h3>Contact Us</h3>
                            </div> 


                            <div class="textwidget">                                       

                                <i class="fa fa-envelope-o fa-contact"></i> <p><a href="mailto:lpubloodservice@gmail.com">lpubloodservice@gmail.com</a></p>

                                <i class="fa fa-location-arrow fa-contact"></i> <p>UniHospital, LPU<br/>Phagwara, Punjab</p>

                                <i class="fa fa-phone fa-contact"></i> <p>Mobile:&nbsp; +91-7017349434</p>                              

                            </div>

                        </div> 

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">


                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">

                    <div class="footer-widget clearfix">

                        <div class="sidebar-widget-wrapper">

                            <div class="footer-widget-header clearfix">
                                <h3>Useful Links</h3>
                            </div> 


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

                        </div>       

                    </div>       

                </div>
                

            </div>

        </div>

    </section>


    <section class="footer-contents">

        <div class="container">

            <div class="row clearfix">
                
                <div class="col-md-12 col-sm-12 text-center">
                    <p class="copyright-text"> Copyright 2020 - LPU Blood Service. All Rights Reserved.</p>
                </div> 

            </div>                                    

        </div>

    </section>

</footer>

    <a id="backTop">Back To Top</a>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.backTop.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/waypoints-sticky.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/custom-scripts.js"></script>


</body>


</html>