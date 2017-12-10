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



$value = $_POST['CultName'];
$value2 = $_POST['CultLocation'];
$value3 = $_POST['Cultlat'];
$value4 = $_POST['Cultlng'];
$value5 = $_POST['CultDate'];
$value6 = $_POST['CultTime'];
$value7 = $_POST['CultEnd'];
$value8 = $_POST['CultDesc'];


$CultImage = mysql_real_escape_string(file_get_contents($_FILES['CultImage']['tmp_name']));




$sql = "INSERT INTO Culture (CultName, CultLocation, Cultlat, Cultlng, CultDate, CultTime, CultEnd, CultDesc, CultImage) VALUES ('$value', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7', '$value8', '$CultImage')";


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
    You have Created a Culture Event
    </p>
    <a href="../Culture.php"><button class="button button-block"/>Culture Events</button></a>
</div>
</body>
</html>




