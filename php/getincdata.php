<?php

header('Content-type: application/xml');
echo file_get_contents("http://cloud.tfl.gov.uk/TrackerNet/StationStatus/IncidentsOnly");

?>