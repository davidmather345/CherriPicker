<?php
    session_start();
?>

<!doctype html>

<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cherri Picker - Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!--Google Fonts link-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i" rel="stylesheet">
       

        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/slick/slick.css">
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->

    
        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">

        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            
                                        </div>

                                        



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="index.php">HOME</a></li>
                                                <li><a href="Sport.php">SPORT</a></li>
                                                <li><a href="NightLife.php">NIGHTLIFE</a></li>
                                                <li><a href="Culture.php">CULTURE</a></li>
                                                
                                                
                                                <?php 
                                                    if (isset ($_SESSION['logged_in'] )) {
                                                       echo '<li><a href="eventcreate.php">CREATE EVENT</a></li>
                                                            <li><a href="logout.php">LOGOUT</a></li>';
                                                    } else {
                                                      echo  '<li><a href="login.php">LOGIN / SIGNUP</a></li>';
                                                    }
                                                ?> 
                                                
                                            </ul>
                                                
                                        </div>

                                    </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->




            <!--home Section -->
            <section id="home" class="home">
                <div class="overlay">
                    <div class="home_skew_border">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <div class="main_home_slider text-center">
                                        <div class="single_home_slider">
                                            
                                            <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                               
                                                <h3>The Best Events Are Our First Priority</h3>
                                                <h1>WELCOME TO CHERRI PICKER</h1>
                                                <div class="separator"></div>
                                                </br></br>
                                                <div class="home_btn">
                                                    <a href="Sport.php"  class="btn btn-default ">Sport Events</a>
                                                    <a href="NightLife.php"  class="btn btn-default">NightLife Events</a>
													<a href="Culture.php"  class="btn btn-default">Culture Events</a>
                                                </div>
                                            </div>
                                        </div>
                                    

                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section><!--End of home section -->


           
			
			


          

           

            




            


            <section id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact_contant sections">
                                <div class="head_title text-center">
                                    <h2>ABOUT US</h2>
                                    <div class="subtitle">
                                       
                                    </div>
                                    <div class="separator"></div>
                                </div><!-- End off Head_title -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="main_contact_info">
                                            <div class="row">
                                                <div class="contact_info_content padding-top-90 padding-bottom-60 p_l_r">
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_text">
                                                                <h3>OUR ADDRESS</h3>
                                                                <h4>National College of Ireland, 
                                                                    IFSC, Dublin 1</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_text">
                                                                <h3>CALL US</h3>
                                                                <h4>+ 353 857 85 9130</h4>
                                                                <h4>+ 018282256</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_text">
                                                                <h3>EMAIL US</h3>
                                                                <h4>contactus@cherrypicker.com</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-sm-6">
                                        <div class="main_contact_info">
                                        <div class="contact_info_content padding-top-90 padding-bottom-90">
                                                <div class="col-sm-12">

                                                    <div class="single_contact_info text-center">
                                                            <div class="single_info_text">
                                                                <h3>ABOUT US</h3>
                                                                <h4>Cherri Picker is a website that helps you to figure out what you're going to do today, tomorrow, or 
                                                    next weekend. </br></br>
                                                    This website will inform you of the best events happening around you from <a href="NightLife.php">Nightlife Events</a> to <a href="Culture.php">Culture Events</a> to <a href="Sport.php">Sport Events</a>. </br></br> Browse Through the events to find something your interested in or <a href="eventcreate.php">create a page</a> for your very own event.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div> 
                                        </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End of contact section -->




 <?php 
                                                    if (isset ($_SESSION['logged_in'] )) {
                                                       echo '<section id="trial" class="trial text-center wow fadeIn"  data-wow-duration="2s" data-wow-dealy="1.5s">
                <div class="main_trial_area">
                    <div class="video_overlay sections">
                        <div class="container">
                            <div class="row">
                                <div class="main_trial">
                                    <div class="col-sm-12">
                                        <h2>Create Your Own Event <span>Its FREE!</span></h2>
                                        <h4>Free today, Free tomorrow, Free forever</h4>
                                        <a href="eventcreate.php" class="btn btn-lg">Create Event Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
';
                                                    } else {
                                                      echo  '<section id="trial" class="trial text-center wow fadeIn"  data-wow-duration="2s" data-wow-dealy="1.5s">
                <div class="main_trial_area">
                    <div class="video_overlay sections">
                        <div class="container">
                            <div class="row">
                                <div class="main_trial">
                                    <div class="col-sm-12">
                                        <h2>Sign-Up Now <span>Its FREE!</span></h2>
                                        <h4>Free today, Free tomorrow, Free forever</h4>
                                        <a href="login.php" class="btn btn-lg">Sign-Up Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
';
                                                    }
                                            
 ?> 




           <!--Footer section-->
            <section class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_footer">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="flowus">
                                            <a href=""><i class="fa fa-facebook"></i></a>
                                            <a href=""><i class="fa fa-twitter"></i></a>
                                            <a href=""><i class="fa fa-instagram"></i></a>
                    
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="copyright_text">
                                            <p class=" wow fadeInRight" data-wow-duration="1s">Made By Team Cherry </a>2017. All Rights Reserved</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off footer Section-->











        </div>

        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/jquery.masonry.min.js"></script>

        <!--slick slide js -->
        <script src="assets/css/slick/slick.js"></script>
        <script src="assets/css/slick/slick.min.js"></script>


        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
