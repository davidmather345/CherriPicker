<?php

require_once 'app/init.php';

$event = null;

if(isset($_GET['id'])) {

    $id = (int)$_GET['id'];

    $event = $db->query("
        SELECT Culture.CultID, Culture.CultName, AVG(culture_ratings.rating) AS rating
        FROM Culture
        LEFT JOIN culture_ratings
        ON Culture.CultID = culture_ratings.culture
        WHERE Culture.CultID  = {$id}
    ")->fetch_object();

}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>Culture Events</title>
    </head>
    <body>
        <?php if($event): ?>
            <div class="culture-event">
                This is event "<?php echo $event->CultName; ?>".
                <div class="culture-event-rating">Rating: <?php echo $event->rating; ?>/5</div>
                <div class="culture-event-rate">
                    Rate this event:
                    <?php foreach(range(1, 5) as $rating): ?>
                        <a href="culture_rate.php?culture=<?php echo $event->CultID; ?>&rating=<?php echo $rating; ?>"><?php echo $rating; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </body>
</html>