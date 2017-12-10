<?php

require_once 'app/init.php';

// All events
$query = $db->query("
    SELECT Culture.CultID, Culture.CultName, AVG(culture_ratings.rating) AS rating
    FROM Culture
    LEFT JOIN culture_ratings
    ON Culture.CultID = culture_ratings.culture
    GROUP BY Culture.CultID
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
        
        <title> Culture Events</title>
    </head>
    <body>
        <?php foreach($events as $event): ?>
            <div class="culture-event">
                <h3><a href="culture_event.php?id=<?php echo $event->CultID; ?>"><?php echo $event->CultName; ?></a></h3>
                <div class="culture-event-rating">Rating: <?php echo $event->rating; ?>/5</div>
            </div>
        <?php endforeach; ?>
    </body>
</html>