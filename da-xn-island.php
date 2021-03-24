<?php

$api_key = "<...>";

$userID = 2;
$itemID = 7;

# For the following you can either get item data or user data.

$url_1 = "https://da-xn-island.com/api?api_key=$api_key&$user_id=$userID";
$url_2 = "https://da-xn-island.com/api?api_key=$api_key&item_id=$itemID";

$urlResponse_1 = file_get_contents($url_1);
$urlResponse_2 = file_get_contents($url_2);

$jsonData_1 = json_decode($urlResponse_1);
$jsonData_2 = json_decode($urlResponse_2);

echo $jsonData_1->uname; // Returns: Dan
echo $jsonData_2->itemName // Returns: Gamer Hoodie

?>
