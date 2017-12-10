<?php 

session_start();

if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before you can create an event!";
  header("location: error.php");    
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cherri Picker - Create Event</title>
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
        <link rel="stylesheet" href="assets/css/event1.css">
        

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />
        
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
     
      
    </head>
    
   
    
    
<body>
    

                              <div class="nav1">
                                <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
                                    <div class="container">
                                       
                                        
                                        <div class="collapse navbar-collapse navbar-custom" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right ">
                                                <li><a href="index.php" class="red">HOME</a></li>
                                                 <li><a href="Culture.php">CULTURE</a></li> 
                                                <li><a href="Sport.php">SPORT</a></li>
                                                <li><a href="NightLife.php">NIGHTLIFE</a></li>
                                                
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
          
          
            

     
     
     
 <div class="top">
 <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact_contant sections">
                                <div class="head_title text-center">
                                    <div>
                           <h2>Create An Event</h2>
                                    <div class="subtitle">
                                       Select from the Dropdown Below 
                                    </div>
                                    <br/><select>
                                    <option>Choose Event Category</option>
                                    <option value="red" >Culture Event</option>
                                    <option value="green">Sport Event</option>
                                    <option value="blue">NightLife Event</option>
                                </select>
                                </div>
                                 
                                </div><!-- End off Head_title -->
                                
</div>
</div>
</div>
</div>
 </div>  
    
   


<div class="container">
<div class="red box">
<section>
          
          <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact_contant sections">
                                
                                
                                
          
            
				<form action="InsertEvents/insertcultevent.php" method="POST" enctype="multipart/form-data">
				    
                           <h2 class="text-center">Create A Culture Event</h2>
                           
					<div class="col-sm-12">
						<div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Event Name</label>
                          <div class="col-10">
                        <input class="form-control" name="CultName" required autocomplete="off" type="text" placeholder="Enter Event Name Here ..." id="example-text-input">
                          </div>
                        </div>
					 <div class="form-group row">
                          <label for="example-address-input" class="col-2 col-form-label">Event Location</label>
                         <div class="col-10">
                        <input class="form-control" name="CultLocation" type="text" placeholder="Location of Event ..." required autocomplete="off" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-address-input" class="col-2 col-form-label">Move the Marker to Event Location</label>
                            <div class="col-10">
                               <div id="map"></div>
                           <input class="form-control" name="Cultlat" id="Cultlat" required autocomplete="off"> </br><input class="form-control" name="Cultlng"  id="Cultlng" required autocomplete="off">
                      </div>
                    </div>	
                    
                   
                    <div class="form-group row">
                    <label for="exampleTextarea">About Event</label>
                        <textarea class="form-control" name="CultDesc" id="exampleTextarea" placeholder="Short Description of Event .." rows="5" required autocomplete="off" ></textarea>
                      </div>
						<div class="form-group row">
                          <label for="example-date-input" class="col-2 col-form-label">Date</label>
                          <div class="col-10">
                        <input class="form-control" type="date" name="CultDate" placeholder="Enter Date of Event" required autocomplete="off" id="example-date-input">
                          </div>
                        </div>
                        <div class="form-group row">
                            
                          <label for="example-time-input" class="col-2 col-form-label">Start Time</label>
                          <div class="col-10">
                        <input class="form-control" name="CultTime" type="time" required autocomplete="off" placeholder="Start Time " id="example-time-input">
                          </div>
                        </div>
                        <div class="form-group row">
                            
                          <label for="example-time-input" class="col-2 col-form-label">End Time</label>
                          <div class="col-10">
                        <input class="form-control" name="CultEnd" type="time" required autocomplete="off" placeholder="End Time " id="example-time-input">
                          </div>
                        </div>
						
						
						
							<div class="form-group row">
                            <label>Event Image</label>
                                 <input type="file" name="CultImage" > <p>(Max Size: 2,048KiB)</p>
                      </div>
                      
                      
                      
					<br/>
					<input type="submit" class="btn" value="Create Culture Event"/>
					
					</div>
				</form> 
				</div>
				</div>
	</div>
	</div>
</section>
</div>




<div class="green box">
<section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact_contant sections">
                               
                                
                                
          
            
				<form action="InsertEvents/insertsportevent.php" method="POST" enctype="multipart/form-data">
				    <h2 class="text-center">Create A Sport Event</h2>
					<div class="col-sm-12">
						<div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Event Name</label>
                          <div class="col-10">
                        <input class="form-control" name="SportName" required autocomplete="off" type="text" placeholder="Enter Event Name Here .." id="example-text-input">
                          </div>
                        </div>
					 <div class="form-group row">
                          <label for="example-address-input" class="col-2 col-form-label">Event Location</label>
                         <div class="col-10">
                        <input class="form-control" name="SportLocation" type="text" placeholder="Location of Event ..." required autocomplete="off" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-address-input" class="col-2 col-form-label">Move the Marker to Event Location</label>
                            <div class="col-10">
                               <div id="map1"></div>
                           <input class="form-control" name="Sportlat" id="Sportlat">  </br><input class="form-control" name="Sportlng"  id="Sportlng">
                      </div>
                    </div>	
                    
                   
                    <div class="form-group row">
                    <label for="exampleTextarea">About Event</label>
                        <textarea class="form-control" name="SportDesc" id="exampleTextarea" placeholder="Short Description of Event .." rows="5" required autocomplete="off" ></textarea>
                      </div>
						<div class="form-group row">
                          <label for="example-date-input" class="col-2 col-form-label">Date</label>
                          <div class="col-10">
                        <input class="form-control" type="date" name="SportDate" placeholder="Enter Date of Event" required autocomplete="off" id="example-date-input">
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label for="example-time-input" class="col-2 col-form-label">Start Time</label>
                          <div class="col-10">
                        <input class="form-control" name="SportTime" type="time" required autocomplete="off" placeholder="Start Time " id="example-time-input">
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label for="example-time-input" class="col-2 col-form-label">End Time</label>
                          <div class="col-10">
                        <input class="form-control" name="SportEnd" type="time" required autocomplete="off" placeholder="End Time " id="example-time-input">
                          </div>
                        </div>
                        
                        
						
							<div class="form-group row">
                            <label>Event Image</label>
                                 <input type="file" name="SportImage"/> <p>(Max Size: 2,048KiB)</p>
                      </div>
                      
					<br/>
					<input type="submit" class="btn" value="Create Sport Event"/>
					 
					
					</div>
				</form> 
				</div>
				</div>
	</div>
	</div>
</section>
</div>



<div class="blue box">
<section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact_contant sections">
                               
                                
                                
          
            
				<form action="InsertEvents/insertnightevent.php" method="POST" enctype="multipart/form-data">
				    <h2 class="text-center">Create A Nightlife Event</h2>
					<div class="col-sm-12">
						<div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Event Name</label>
                          <div class="col-10">
                        <input class="form-control" name="NightName" required autocomplete="off" type="text" placeholder="Enter Event Name Here .." id="example-text-input">
                          </div>
                        </div>
					 <div class="form-group row">
                          <label for="example-address-input" class="col-2 col-form-label">Event Location</label>
                         <div class="col-10">
                        <input class="form-control" name="NightLocation" type="text" placeholder="Location of Event ..." required autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-address-input" class="col-2 col-form-label">Move the Marker to Event Location</label>
                            <div class="col-10">
                               <div id="map2"></div>
                           <input class="form-control" name="Nightlat" id="Nightlat">  </br><input class="form-control" name="Nightlng"  id="Nightlng">
                      </div>
                    </div>	
                    
                   
                    <div class="form-group row">
                    <label for="exampleTextarea">About Event</label>
                        <textarea class="form-control" name="NightDesc" id="exampleTextarea" placeholder="Short Description of Event .." rows="5" required autocomplete="off" ></textarea>
                      </div>
						<div class="form-group row">
                          <label for="example-date-input" class="col-2 col-form-label">Date</label>
                          <div class="col-10">
                        <input class="form-control" type="date" name="NightDate" placeholder="Enter Date of Event" required autocomplete="off" id="example-date-input">
                          </div>
                        </div>
                        <div class="form-group row">
                            
                          <label for="example-time-input" class="col-2 col-form-label">Start Time</label>
                          <div class="col-10">
                        <input class="form-control" name="NightTime" type="time" required autocomplete="off" placeholder="Start Time " id="example-time-input">
                          </div>
                        </div>
						<div class="form-group row">
                            
                          <label for="example-time-input" class="col-2 col-form-label">End Time</label>
                          <div class="col-10">
                        <input class="form-control" name="NightEnd" type="time" required autocomplete="off" placeholder="End Time " id="example-time-input">
                          </div>
                        </div>
                        
                        
								<div class="form-group row">
                            <label>Event Image</label>
                                 <input type="file" name="NightImage"/> <p>(Max Size: 2,048KiB)</p>
                      </div>
                      
                      
                      
					<br/>
					<input type="submit" class="btn" value="Create NightLife Event"/>
					
					
					</div>
				</form> 
				</div>
				</div>
	</div>
	</div>
 </section>
 </div>
</div>

      
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAdjYxIyEZe32zVZvn3UqVEdne3tpYkvf0&"></script>
<script>
    /* global google */
    var map, map1, map2;
    
    window.onload = function() {
    var latlng = new google.maps.LatLng(53.34881739, -6.24317930);
    var myOptions = {
        center: latlng,
        zoom: 11,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map'), myOptions); 
    map1 = new google.maps.Map(document.getElementById('map1'), myOptions);
    map2 = new google.maps.Map(document.getElementById('map2'), myOptions);

    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: 'Location of Event',
        draggable: true
    });
    
    var marker1 = new google.maps.Marker({
        position: latlng,
        map: map1,
        title: 'Location of Event',
        draggable: true
    });
    
    var marker2 = new google.maps.Marker({
        position: latlng,
        map: map2,
        title: 'Location of Event',
        draggable: true
    });
    
    google.maps.event.addListener(marker, 'dragend', function(a) {
        
        document.getElementById('Cultlat').value = a.latLng.lat();
        document.getElementById('Cultlng').value = a.latLng.lng();
        });
        
     google.maps.event.addListener(marker1, 'dragend', function(b) {
        
        document.getElementById('Sportlat').value = b.latLng.lat();
        document.getElementById('Sportlng').value = b.latLng.lng();
        });
        
     google.maps.event.addListener(marker2, 'dragend', function(c) {
        
        document.getElementById('Nightlat').value = c.latLng.lat();
        document.getElementById('Nightlng').value = c.latLng.lng();
        });
    
};
</script>
           
           
            
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
/* global $ */
            /* global target */
            
            
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
                window.onload();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>




 
    
  </body>
</html>