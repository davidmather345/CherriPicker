
<?php

require_once 'app/init.php';

if(isset($_GET['culture'], $_GET['rating'])) {

	$event = (int)$_GET['culture'];
	$rating = (int)$_GET['rating'];

	if(in_array($event, [1, 2, 3, 4, 5])) {

		$exists = $db->query("SELECT CultID FROM Culture WHERE CultID = {$event}")->num_rows ? true : false;

		if($exists) {
			$db->query("INSERT INTO culture_ratings (culture, rating) VALUES ({$event}, {$rating})");
		}

	}

	header('Location: CultureEvent.php?id=' . $event);
}
?>
