<?php

header('Content-type: application/json');
echo file_get_contents("http://api.erg.kcl.ac.uk/AirQuality/Hourly/MonitoringIndex/SiteCode=" .  $_GET["id"] ."/Json");

?>