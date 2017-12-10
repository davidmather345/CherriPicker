<?php

define('DB_NAME', 'cherrypickerdb');
define('DB_USER', 'x14322731');
define('DB_PASSWORD', '');
define('DB_HOST', '127.0.0.1');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
    die('Could not Connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!$db_selected) {
    die('Cant use ' . DB_NAME .': ' . mysql_error());
}



$value = $_POST['SportName'];
$value2 = $_POST['SportLocation'];
$value3 = $_POST['Sportlat'];
$value4 = $_POST['Sportlng'];
$value5 = $_POST['SportDate'];
$value6 = $_POST['SportTime'];
$value7 = $_POST['SportEnd'];
$value8 = $_POST['SportDesc'];


$SportImage = mysql_real_escape_string(file_get_contents($_FILES['SportImage']['tmp_name']));




$sql = "INSERT INTO Sport (SportName, SportLocation, Sportlat, Sportlng, SportDate, SportTime, SportEnd, SportDesc, SportImage) VALUES ('$value', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7', '$value8', '$SportImage')";


if(!mysql_query($sql)) {
    die('Error: ' . mysql_error());
}
?>

<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <title>Event Created</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../assets/css/style4.css">
</head>
<body>
<div class="form">
    <h1>Events</h1>
    <p>
    You have Created a Sport Event
    </p>
    <a href="../Sport.php"><button class="button button-block"/>Sport Events</button></a>
</div>
</body>
</html>

