<?php

require_once 'app/init.php';

$event = null;

if(isset($_GET['id'])) {

    $id = (int)$_GET['id'];

    $event = $db->query("
        SELECT Nightlife.NightID, Nightlife.NightName, AVG(nightlife_ratings.rating) AS rating
        FROM Nightlife
        LEFT JOIN nightlife_ratings
        ON Nightlife.NightID = nightlife_ratings.nightlife
        WHERE Nightlife.NightID = {$id}
    ")->fetch_object();

}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>NightLife Events</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="assets/css/style4.css">
    </head>
    <body>
    <?php if($event): ?>
         <div class="form">
            <div class="nightlife-event">
          <h1> <?php echo $event->NightName; ?></h1>
          
         
                
                <div class="nightlife-event-rating"><h4 class="text-center">Average Rating: <?php echo $event->rating; ?>/5</h4></div>
                
                <div class="nightlife-event-rate">
                   <h4 class="text-center"> Rate this event out of 5: </h4>
                    <h3><?php foreach(range(1, 5) as $rating): ?>
                       <a href="nightlife_rate.php?nightlife=<?php echo $event->NightID; ?>&rating=<?php echo $rating; ?>"><?php echo $rating; ?></a>
                    <?php endforeach; ?> </h3>
                </div>
            </div>
        <?php endif; ?>
          
          
          
          <a href="NightLife.php#filters"><button class="button button-block" name="home"/>Back to Events</button></a>


    </div>
    
    </body>
</html>



