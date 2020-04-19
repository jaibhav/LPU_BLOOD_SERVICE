<?php
require_once "config.php";

session_start();
$username=$_SESSION['username'];
$sql2="SELECT * FROM users WHERE username = '$username'";
$query=mysqli_query($link,$sql2);
$row = mysqli_fetch_array($query);

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: about-us.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">    
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<head>
        <meta charset="utf-8">
        <title>About Us</title>
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
                                
                                <li><a href="#" title="About Us">About Us</a></li>

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
                </div>

            </section>

        </header> 


        <section class="page-header">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3>
                            About Us
                        </h3>

                    </div>

                </div>

            </div>

        </section> 
        

        <section class="section-content-block">
 
            <div class="container">
                
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        
                        <div class="about-us-container theme-custom-box-shadow">

                            <div class="row section-heading-wrapper margin-bottom-11">

                                <div class="col-lg-12 col-md-12 col-sm-12 text-center no-img-separator">
                                    <h2><strong>Who We Are?</strong></h2>
                                    <span class="heading-separator heading-separator-horizontal"></span>
                                </div>
                            </div>

                            <div class="about-details"> 

                                <p>Blood Buddies is for public donation center with blood donation members in the changing health care system.</p>


                                <ul class="custom-bullet-list">
                                    <li>Specialist blood donors and clinical supervision.</li>
                                    <li>Increasing communication with our members.</li>
                                    <li>High quality assessment, diagnosis and treatment.</li>
                                    <li>Examine critically to ensure alignment.</li>
                                    <li>The extra care of a multi-disciplinary team.</li>
                                </ul>

                            </div>   

                        </div>

                    </div> 

                </div>
            </div>

        </section> 


        <section class="section-content-block section-custom-bg" >

        <div class="container margin-top-48 margin-bottom-48 wow fadeInLeft">
                <div class="row section-heading-wrapper margin-bottom-11">

                    <div class="col-lg-12 col-md-12 col-sm-12 text-center no-img-separator">
                        <h2><strong>Our Team</strong></h2>
                        <span class="heading-separator heading-separator-horizontal"></span>
                    </div> 

                </div>
                
                <div class="row">

                        <div class="col-md-4 col-sm-12">

                            <div class="team-layout-1 theme-custom-box-shadow theme-custom-box-animation">

                                <figure class="team-member">
                                        <img src="images/team_1.jpg" alt="JAIBHAV THUKRAL"/>

                                </figure> 
                                <article class="team-info">
                                    <h3>JAIBHAV THUKRAL</h3>                                   
                                    <h4>BACK-END DEVELOPER</h4>
                                </article>

                                <div class="team-info">

                                    <div class="text-center clearfix">
                                       <h3>11710641</h3>
                                    </div> 

                                </div>                             

                            </div> 
                        </div> 

                        <div class="col-md-4 col-sm-12">

                            <div class="team-layout-1 theme-custom-box-shadow theme-custom-box-animation">

                                <figure class="team-member">
                                        <img src="images/team_2.jpg" alt="PRAYAS" />

                                </figure> 

                                <article class="team-info">
                                    <h3>PRAYAS</h3>                                   
                                    <h4>FRONT-END DEVELOPER</h4>
                                </article>
                                <div class="team-info">

                                    <div class="text-center clearfix">
                                       <h3>11710015</h3>
                                    </div> 
                                </div>                             

                            </div> 

                        </div> 

                        <div class="col-md-4 col-sm-12">

                            <div class="team-layout-1 theme-custom-box-shadow theme-custom-box-animation">

                                <figure class="team-member">
                                        <img src="images/team_3.jpg" alt="MANSI SINGH" />

                                </figure> 

                                <article class="team-info">
                                    <h3>MANSI SINGH</h3>                                   
                                    <h4>UI/UX AND DOCUMENTATION</h4>
                                </article>
                                <div class="team-info">

                                    <div class="text-center clearfix">
                                       <h3>11703557</h3>
                                    </div> 

                                </div>                             

                            </div> 

                        </div> 


                    </div>  
                    

                    </div> 
                    

            </div> 


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