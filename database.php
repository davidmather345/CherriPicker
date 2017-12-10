<?php
        $servername = "127.0.0.1";
        $username = "x14322731";
        $password = "";
        $dbname = "cherrypickerdb";
                            
            $conn = mysqli_connect($servername, $username, $password);
          
                if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }
                echo "Connected successfully";

//mysql_select_db('cherrypickerdb');

//$sql="SELECT * FROM Nightlife";

//$records=mysql_query($sql);

$sql = "SELECT NightID, NightName FROM Nightlife";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["NightID"]. " - Name: " . $row["NightName"].  "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

                                        <h2>Events Map</h2>
                                        <div id="googleMap" style="width:100%;height:400px;"></div>
                                        
                                        <script>
                                        function myMap() {
                                            var mapProp= {
                                                center:new google.maps.LatLng(53.3498,-6.2603),
                                                zoom:12,
                                            };
                                        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

                                        }
                                        </script>
                                
                                        
                                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdjYxIyEZe32zVZvn3UqVEdne3tpYkvf0&callback=myMap"></script>
