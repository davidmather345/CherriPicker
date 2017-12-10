<?php

require_once 'app/init.php';

if(isset($_GET['sport'], $_GET['rating'])) {

	$event = (int)$_GET['sport'];
	$rating = (int)$_GET['rating'];

	if(in_array($event, [1, 2, 3, 4, 5])) {

		$exists = $db->query("SELECT SportID FROM Sport WHERE SportID = {$event}")->num_rows ? true : false;

		if($exists) {
			$db->query("INSERT INTO sport_ratings (sport, rating) VALUES ({$event}, {$rating})");
		}

	}

	header('Location: SportEvent.php?id=' . $event);
}
?>