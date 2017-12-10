<?php

require_once 'app/init.php';

// All events
$query = $db->query("
    SELECT Sport.SportID, Sport.SportName, AVG(sport_ratings.rating) AS rating
    FROM Sport
    LEFT JOIN sport_ratings
    ON Sport.SportID = sport_ratings.sport
    GROUP BY Sport.SportID
");

$events = [];

while($row = $query->fetch_object()) {
    $events[] = $row;
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title> Sport Events</title>
    </head>
    <body>
        <?php foreach($events as $event): ?>
            <div class="sport-event">
                <h3><a href="sport_event.php?id=<?php echo $event->SportID; ?>"><?php echo $event->SportName; ?></a></h3>
                <div class="sport-event-rating">Rating: <?php echo $event->rating; ?>/5</div>
            </div>
        <?php endforeach; ?>
    </body>
</html>