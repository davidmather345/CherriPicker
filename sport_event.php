<?php

require_once 'app/init.php';

$event = null;

if(isset($_GET['id'])) {

    $id = (int)$_GET['id'];

    $event = $db->query("
        SELECT Sport.SportID, Sport.SportName, AVG(sport_ratings.rating) AS rating
        FROM Sport
        LEFT JOIN sport_ratings
        ON Sport.SportID = sport_ratings.sport
        WHERE Sport.SportID = {$id}
    ")->fetch_object();

}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>Cherri Picker Sport Event</title>
    </head>
    <body>
        <?php if($event): ?>
            <div class="sport-event">
                This is event "<?php echo $event->SportName; ?>".
                <div class="sport-event-rating">Rating: <?php echo $event->rating; ?>/5</div>
                <div class="sport-event-rate">
                    Rate this event:
                    <?php foreach(range(1, 5) as $rating): ?>
                        <a href="sport_rate.php?sport=<?php echo $event->SportID; ?>&rating=<?php echo $rating; ?>"><?php echo $rating; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </body>
</html>