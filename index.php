<?php
    //variabile
    $name = "Michele";
    $paramatricName = $_GET["name"];
    $toExplode = "Tanto va la gatta al lardo che ci lascia lo zampino";
    $array = explode(' ', $toExplode);
    $trimmed = trim($toExplode);
    $censored = str_replace("zampino", "censored", $toExplode);
    $string = 'Come va?';
    
    ?>

    <h1>Ciao mi chiamo <?php echo $name ?></h1>
    <h1>Ciao mi chiamo <?= $name ?></h1>
    <h1>Ciao con parametro -> <?php echo $_GET["name"] ?></h1>    
    <p>
        <?= str_replace($toExplode);?>        
    </p>
    <p>
    <?= strlen($string); ?>
</p>
   
    

    

