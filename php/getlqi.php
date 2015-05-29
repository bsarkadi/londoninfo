<?php

header('Content-type: application/json');
echo file_get_contents("http://api.placeilive.com/v1/houses/search?ll=" .  $_GET["lat"] ."," . $_GET["lng"] );



?>