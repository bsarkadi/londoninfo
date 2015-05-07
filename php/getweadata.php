<?php

header('Content-type: application/json');
echo file_get_contents("http://datapoint.metoffice.gov.uk/public/data/val/wxfcs/all/json/" .  $_GET["id"] ."?res=3hourly&key=590dd23d-deca-4f62-9988-522ff9beaf8d");

?>


