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
                                <li><a>Welcome&nbsp;<?php echo ($row["FNAME"]." ".$row["LNAME"]); ?></a></li>
                                <li>
                                <a class="login-btn" href="logout.php">Logout</a>
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
                            About Us
                        </h3>

                        <p class="page-breadcrumb">
                            <a href="#">Home</a> / About Us
                        </p>


                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!-- end .page-header  -->
        
        <!--  FEATURED ABOUT US SECTION-->

        <section class="section-content-block">
 
            <div class="container">
                
                <div class="row">

                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        
                        <div class="about-us-container theme-custom-box-shadow">

                            <div class="row section-heading-wrapper margin-bottom-11">

                                <div class="col-lg-12 col-md-12 col-sm-12 text-left no-img-separator">
                                    <h2><strong>Who We Are?</strong></h2>
                                    <span class="heading-separator heading-separator-horizontal"></span>
                                </div> <!-- end .col-sm-10  --> 

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

                            </div> <!--  end .about-details -->  

                        </div>

                    </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->  


                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                        <figure class="about-img theme-custom-box-shadow">
                            <a class="venobox wow bounceIn" data-vbtype="video" data-autoplay="true" href="https://www.youtube.com/watch?v=nrJtHemSPW4"><i class="fa fa-play"></i></a>                                
                            <img src="images/about_feat_bg.jpg" alt="about" />
                        </figure> <!-- end .cause-img  -->

                    </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12  -->                    

                </div> <!--  end .row  -->
            </div>

        </section> <!--  end .section-about-us -->

        <!-- SECTION TEAM   -->

        <section class="section-content-block section-custom-bg" data-bg_img='images/team_feat_bg.jpg' data-bg_size='cover' data-bg_position='top center' data-bg_opacity="0">
            
            <div class="container margin-top-80">
                <div class="row section-heading-wrapper-alt">

                    <div class="col-md-12 col-sm-12 text-center no-img-separator">
                        <h4>OUR VOLUNTEERS</h4>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h2 class="extra-large">The volunteers who give their time and talents help to fulfill our mission.</h2>

                    </div> <!-- end .col-sm-10  --> 

                </div>
            </div>

            <div class="container margin-top-48 margin-bottom-48 wow fadeInLeft">
                
                <div class="row">

                        <div class="col-md-4 col-sm-12">

                            <div class="team-layout-1 theme-custom-box-shadow theme-custom-box-animation">

                                <figure class="team-member">
                                    <a href="#" title="ALEXANDER GARY">
                                        <img src="images/team_9.jpg" alt="ALEXANDER GARY"/>
                                    </a>

                                </figure> <!-- end. team-member  -->

                                <article class="team-info">
                                    <h3>ALEXANDER GARY</h3>                                   
                                    <h4>Co-Founder</h4>
                                </article>

                                <div class="team-content">

                                    <div class="team-social-share text-center clearfix">
                                        <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                        <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                        <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                        <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                    </div> <!-- end .author-social-box  -->

                                </div>                             

                            </div> <!--  end team-layout-1 -->

                        </div> <!--  end .col-md-4 col-sm-12  -->

                        <div class="col-md-4 col-sm-12">

                            <div class="team-layout-1 theme-custom-box-shadow theme-custom-box-animation">

                                <figure class="team-member">
                                    <a href="#" title="MELISSA MUNOZ">
                                        <img src="images/team_6.jpg" alt="MELISSA MUNOZ" />
                                    </a>

                                </figure> <!-- end. team-member  -->

                                <article class="team-info">
                                    <h3>MELISSA MUNOZ</h3>                                   
                                    <h4>Founder</h4>
                                </article>

                                <div class="team-content">

                                    <div class="team-social-share text-center clearfix">
                                        <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                        <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                        <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                        <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                    </div> <!-- end .author-social-box  -->

                                </div>                             

                            </div> <!--  end team layout-1 -->

                        </div> <!--  end .col-md-4 col-sm-12  -->

                        <div class="col-md-4 col-sm-12">

                            <div class="team-layout-1 theme-custom-box-shadow theme-custom-box-animation">

                                <figure class="team-member">
                                    <a href="#" title="JOHN ABRAHAM">
                                        <img src="images/team_7.jpg" alt="JOHN ABRAHAM" />
                                    </a>                               

                                </figure> <!-- end. team-member  -->

                                <article class="team-info">
                                    <h3>JOHN ABRAHAM</h3>                                   
                                    <h4>Manager</h4>
                                </article>
                                <div class="team-content">

                                    <div class="team-social-share text-center clearfix">
                                        <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                        <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                        <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                        <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                    </div> <!-- end .author-social-box  -->

                                </div>                             

                            </div> <!--  end team-layout-1 -->

                        </div> <!--  end .col-md-4 col-sm-12  -->  


                    </div> <!-- end .row  --> 
                    
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <a class="btn btn-theme margin-top-24" href="#">Become A Volunteer</a>
                        </div>
                    </div>

            </div> <!-- end .container  -->

        </section>

        <!--  COUNTER SECTION 02  -->
        
        <section class="section-content-block section-secondary-bg" >

            <div class="container wow fadeInUp">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2>OUR ACHIEVEMENTS</h2>   
                        <h4>We have been working since 1973 with a prestigious vision to helping patient to provide blood.</h4>
                    </div> <!-- end .col-sm-12  --> 
                    
                </div>
                
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-left">

                            <i class="fa fa-heartbeat icon"></i>
                            <span class="counter">2578</span>                            
                            <h4 class="text-capitalize">Success Smile</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-left">

                            <i class="fa fa-stethoscope icon"></i>
                            <span class="counter">3235</span>                            
                            <h4 class="text-capitalize">Happy Donors</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-left">

                            <i class="fa fa-users icon"></i>
                            <span class="counter">3568</span>                             
                            <h4 class="text-capitalize">Happy Recipient</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-left">

                            <i class="fa fa-building icon"></i>
                            <span class="counter">1364</span>                            
                            <h4 class="text-capitalize">Total Awards</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->


                </div> <!-- end row  -->

            </div> <!--  end .container  -->

        </section>

        <!-- SECTION TESTIMONIAL   -->

        <section class="section-content-block section-custom-bg" data-bg_img='images/testimony_feat_bg.jpg' data-bg_size='cover' data-bg_position='top center' data-bg_opacity="0">
            
            <div class="container margin-top-80">
                <div class="row section-heading-wrapper-alt">

                    <div class="col-md-12 col-sm-12 text-center no-img-separator">
                        <h4>Awesome Words From Members</h4>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h2 class="extra-large">JOIN WITH US AND SAVE LIFE</h2>

                    </div> <!-- end .col-sm-10  --> 

                </div>
            </div>

            <div class="container theme-custom-box-shadow  section-pure-white-bg margin-top-48 margin-bottom-48 wow fadeInUp">
                
                <div class="row">

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        
                        <div class="testimonial-container owl-carousel text-left" data-items  ="1">

                            <div class="col-md-12 col-sm-12">

                                <div class="testimony-layout-1">
                                    <h3 class="people-quote">Donor Opinion</h3>
                                    <p class="testimony-text">
                                        I proudly donate blood on a regular basis because it gives others something they desperately need to survive. Just knowing I can make a difference in someone else's life makes me feel great!      
                                    </p>
                                    
                                    <img src="images/user_1.jpg" alt="" />
                                    <h6>Brandon Munson</h6>
                                    <span>CTO, Fulcrum Design, USA</span>

                                </div> <!-- end .testimony-layout-1  -->

                            </div> <!--  end col-md-10  -->

                            <div class="col-md-12 col-sm-12">

                                <div class="testimony-layout-1">
                                    <h3 class="people-quote">Donor Opinion</h3>
                                    <p class="testimony-text">
                                        I have been a donor since high school. Although I have not been a donor every year, I always want to give to the human race. I love to help others! Moreover it gives a real peace in my mind.   
                                    </p>

                                    <img src="images/user_2.jpg" alt="" />
                                    <h6>Munson Brandon</h6>
                                    <span>CTO, Fulcrum Design, USA</span>

                                </div> <!-- end .testimony-layout-1  -->

                            </div> <!--  end col-md-10  -->

                            <div class="col-md-12 col-sm-12">

                                <div class="testimony-layout-1">
                                    <h3 class="people-quote">Recipient Opinion</h3>
                                    <p class="testimony-text">
                                        I wish I could tell you my donor how grateful I am for your selfless act.You gave me new life. We may be coworkers or schoolmates or just two in the same community.I'm very grateful to you.  
                                    </p>

                                    <img src="images/user_3.jpg" alt="" />
                                    <h6>Logan Munson</h6>
                                    <span>CTO, Fulcrum Design, USA</span>

                                </div> <!-- end .testimony-layout-1  -->

                            </div> <!--  end col-md-10  --> 

                        </div>  <!--  end .row  -->   
                    </div>
                
                    <div class="col-lg-6 hidden-md hidden-xs hidden-sm no-padding">
                        <figure>
                            <img src="images/testimony_feat_img.jpg" alt="" class="db"/>
                        </figure>
                    </div>
                    
                </div>

                

            </div> <!-- end .container  -->

        </section>

        <!-- HIGHLIGHT CTA  -->   

        <section class="cta-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2>We are helping people from 40 years</h2>
                        <p>
                            You can give blood at any of our blood donation venues all over the world. We have total sixty thousands donor centers and visit thousands of other venues on various occasions.                            
                        </p>
                    </div> <!--  end .col-md-8  -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <a class="btn btn-cta-1 wow bounceIn" href="#">Request Appointment</a>
                    </div> <!--  end .col-md-4  -->
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