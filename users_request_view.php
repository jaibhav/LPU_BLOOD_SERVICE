<?php
    require_once "config.php";

    session_start();
    $username=$_SESSION['username'];
    $sql2="SELECT * FROM users WHERE username = '$username'";

    $query=mysqli_query($link,$sql2);
    $row = mysqli_fetch_array($query);
    
    $sql_users="SELECT FNAME,LNAME,users.regno,mobno,bgrp_req,reason,req_status,userbloodrequest.created_at,userbloodrequest.id FROM users JOIN userbloodrequest ON users.regno = userbloodrequest.regno";
    $user_query=mysqli_query($link,$sql_users);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $new_stat=$_POST['status'];
        $up_id=$_POST['id'];
        $sql_change = "UPDATE userbloodrequest SET req_status = '$new_stat' WHERE userbloodrequest.id = '$up_id'";
        if(mysqli_query($link,$sql_change)){
            echo '<script>alert("Updated Successfully"); window.location="users_request_view.php"</script>';
        }
    }
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
    if($_SESSION["utype"] !=='A'){
        header("location: 404.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

    
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<head>
        <meta charset="utf-8">
        <title>Users Request View</title>
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

                                <li><a href="#" title="Contact">Contact</a></li>
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


        <section class="page-header" data-stellar-background-ratio="1.2">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">


                        <h3>
                            Blood Request View
                        </h3>

                    </div>

                </div>
            </div> 
        </section> 

        <section class="section-content-block">

            <div class="container table-responsive">

                <div class="row">
                    
              
                <table class="table table-striped table-user ">
                    <thead>
                        <tr>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>REGISTRATION NUMBER</th>
                            <th>MOBILE NUMBER</th>
                            <th>BLOOD GROUP REQUESTED</th>
                            <th>REASON</th>
                            <th>DATE</th>
                            <th>ACTION</th>



                        </tr>
                        
                    </thead>
                    <tbody>
                       
                        <?php
                        if(mysqli_num_rows($user_query)!==0){
                            while($rows=mysqli_fetch_array($user_query))
                            {
                                $id_val=$rows['id'];
                                if($rows["req_status"]==0){
                                    $reqstat='Pending';
                                }
                                elseif($rows["req_status"]==1){
                                    $reqstat='Accepted';
                                    continue;
                                }
                                else{
                                    $reqstat='Rejected';
                                }
                                echo '<tr>';
                                echo '<td>'.$rows['FNAME'].'</td>';
                                echo '<td>'.$rows['LNAME'].'</td>';
                                echo '<td>'.$rows['regno'].'</td>';
                                echo '<td>'.$rows['mobno'].'</td>';
                                echo '<td>'.$rows['bgrp_req'].'</td>';
                                echo '<td style="word-wrap: anywhere; min-width: 200px; text-align: center;">'.$rows['reason'].'</td>';
                                echo '<td>'.$rows['created_at'].'</td>';
                                //echo '<td>'.$reqstat.'</td>';
                                echo '<td style="min-width: 200px;">
                                <form action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'" method="post">
                                    <input type="hidden" name="id" value="'.$id_val.'">
                                    <select class="form-control" name="status" required>
                                    <option value="" disabled selected hidden>Select</option>    
                                    <option value="0">Pending</option>
                                    <option value="1">Accept</option>
                                    <option value="2">Reject</option>

                                </select>
                                
                                <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg btn-block">Update</button>
                                </div>
                                </form></td>';
                                echo '</tr>';
                            }
                        } 
                        else{
                            echo '<tr>';
                            echo '<td colspan=8>No Record Found</td>';
                            echo '</tr.';
                        }  
                            ?>
                    </tbody>
                </table>

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