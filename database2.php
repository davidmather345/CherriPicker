<?php
$servername = "127.0.0.1";
$username = "x14322731";
$password = "";
$dbname = "cherrypickerdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT NightID, NightName FROM Nightlife";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["NightID"]. " - Name: " . $row["NightName"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>