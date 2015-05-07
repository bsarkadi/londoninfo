<?php

header('Content-type: application/json');
echo file_get_contents("http://api.tfl.gov.uk/Line/%7Bids%7D/StopPoints?ids=" .  $_GET["id"] ."&app_id=5426e96a&app_key=6b49e4965abc31aaa974c7800bf167d5");

?>

