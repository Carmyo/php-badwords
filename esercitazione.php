<?php
$text = "Striking from a fortress hidden among the billion stars of the galaxy, rebel spaceships have won their first victory in a battle with the powerful Imperial Starfleet. The EMPIRE fears that another defeat could bring a thousand more solar systems into the rebellion, and Imperial control over the galaxy would be lost forever.";
$censored = str_replace("rebel", "classified", $text);
?>
<p><?=strlen($text);?></p>
<p><?=str_replace("rebel", "classified", $text)?>;</p>