<?php
$text = "Striking from a fortress hidden among the billion stars of the galaxy, rebel spaceships have won their first victory in a battle with the powerful Imperial Starfleet. The EMPIRE fears that another defeat could bring a thousand more solar systems into the rebellion, and Imperial control over the galaxy would be lost forever.";
$toHide = $_GET['censura'];
$censored = str_replace($toHide, "classified", $text);
?>









<p>
    <?= $text?>
</p>
<p>
    <?=strlen($text);?>
</p>
<p>
    <?= $censored ?>
</p>
<p>
    <?=strlen($censored);?>
</p>
