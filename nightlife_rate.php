<?php

require_once 'app/init.php';

if(isset($_GET['nightlife'], $_GET['rating'])) {

	$event = (int)$_GET['nightlife'];
	$rating = (int)$_GET['rating'];

	if(in_array($event, [1, 2, 3, 4, 5])) {

		$exists = $db->query("SELECT NightID FROM Nightlife WHERE NightID = {$event}")->num_rows ? true : false;

		if($exists) {
			$db->query("INSERT INTO nightlife_ratings (nightlife, rating) VALUES ({$event}, {$rating})");
		}

	}

	header('Location: NightEvent.php?id=' . $event);
}
?>