<?php

require_once 'app/init.php';

// All events
$query = $db->query("SELECT Nightlife.NightID, Nightlife.NightName, AVG(nightlife_ratings.rating) AS rating
    FROM Nightlife
    LEFT JOIN nightlife_ratings
    ON Nightlife.NightID = nightlife_ratings.nightlife
    GROUP BY Nightlife.NightID");

$events = [];

while($row = $query->fetch_object()) {
    $events[] = $row;
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>Nightlife Events</title>
    </head>
    <body>
        <?php foreach($events as $event): ?>
            <div class="nightlife-event">
                <h3><a href="nightlife_event.php?id=<?php echo $event->NightID; ?>"><?php echo $event->NightName; ?></a></h3>
                <div class="nightlife-event-rating">Rating: <?php echo $event->rating; ?>/5</div>
            </div>
        <?php endforeach; ?>
    </body>
</html>