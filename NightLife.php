<?php
session_start();
require 'dbh1.php';
$mysqli = mysqli_connect($host, $user, $pass, $db);
if (!$mysqli) die("Unable to connect to MySQL: ". mysqli_error());
?>

<!doctype html>

<html class="nom-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cherri Picker - Nightlife</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
           
        <!--Google Fonts link-->
        
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i" rel="stylesheet">

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/slick/slick.css">
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->
        
          

        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />
<link rel="stylesheet" href="assets/css/star.css">
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
                                            <a class="navbar-brand" href="#home">
                                                 <!--- <h3>Project Cherry</h3><img src="assets/images/logo.png"/> --->
                                            </a>
                                        </div>
                                        
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="index.php">HOME</a></li>
                                                 <li><a href="Culture.php">CULTURE</a></li> 
                                                <li><a href="Sport.php">SPORT</a></li>
                                                <li><a href="NightLife.php">NIGHTLIFE</a></li>
                                                
                                                <?php 
                                                    if (isset ($_SESSION['logged_in'] )) {
                                                       echo '<li><a href="eventcreate.php">Create Event</a></li>
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






            <section id="portfolio" class="portfolio sections">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_portfolio">
                            <div class="col-sm-12">
                                <div class="head_title text-center grey">
                                    <h2>Nightlife Events Map</h2>
                                 <div class="separator"></div>
                                   <div class="container">
                                       <div id="map_canvas" style="width:100%;height:500px;border:solid black 1px;"></div>
                                   </div>
                                   
                                   
                             <script type="text/javascript">
                            var map;
                            function myMap() {
                                // Set static latitude, longitude value
                                var latlng = new google.maps.LatLng(53.34881739, -6.24317930);
                                // Set map options
                                var myOptions = {
                                    zoom: 13,
                                    center: latlng,
                                    panControl: true,
                                    zoomControl: true,
                                    scaleControl: true,
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                }
                                
                                // Create map object with options
                                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                                
                            
                                         <?php
                                              $query = "select * from Nightlife";
                                             $result = mysqli_query($mysqli, $query); 
                                                         
                                             while($row = mysqli_fetch_array($result))
                                                 { 
                                              echo "addMarker(new google.maps.LatLng(".$row['Nightlat'].", ".$row['Nightlng']."), map);"; 
                                                } 
                                            ?>
                                                
                            
                            function addMarker(latLng, map) {
                                var marker = new google.maps.Marker({
                                    position: latLng,
                                    map: map,
                                    draggable: true,
                                    animation: google.maps.Animation.DROP
                                });
                                
                                
                    
                                return marker;
                            }
                        }
                    
                        </script>  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdjYxIyEZe32zVZvn3UqVEdne3tpYkvf0&callback=myMap"></script>
                                        
                                     
                                
                                        
                                </div>
                            </div>
                            
                            <div class="text-center">
                             <h2>All Nightlife Events</h2>
                                 <div class="separator"></div></div>
                            
                            
                            
  
                            <div style="clear:both;"></div>     
                            <div id="portfoliowork">
                                
                                   <?php
                                    $query = "select * from Nightlife";
                                    $result = mysqli_query($mysqli, $query); 
                                     $i =0; ?>
                                   <?php while($row = mysqli_fetch_array($result))
                                        {  ?>
                                          
                                         <div class="single_portfolio tile scale-anm bcards photo">
                                          <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $row['NightImage'] ) . '" />'; ?> 
                                          <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3><?php echo $row['NightName'] ?></h3>
                                            <p><?php echo $row['NightLocation'] ?></p>
                                        
                                           <a href="NightEvent.php?id=<?php echo $row['NightID'] ?>"><button type="button" class="btn btn-info btn-lg">Event Details</button></a>    

                                        </div>
                                    
                                </div>
   
                                <?php $i++;  } ?>
                                
          
                                <?php 
            mysqli_close ($mysqli);
            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End off container --> 
            </section> <!-- End off Work Section --> 
                                 
                                 
                  
   
                        
    
            
                  
              

            


            
           
           


           

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