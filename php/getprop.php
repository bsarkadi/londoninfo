<?php

header('Content-type: application/json');
echo file_get_contents("http://api.zoopla.co.uk/api/v1/property_listings.json?api_key=d4mzbqycgrz9fgmvqj8h3792&postcode=" .  $_GET["id"] ."&listing_status=" . $_GET["status"]);

?>