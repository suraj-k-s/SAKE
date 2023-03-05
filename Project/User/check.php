<?php
$json = '
[{"qstn_id":"12","qstn_content":"what","disability_id":"1","qstn_file":"Place 3.png"},{"qstn_id":"13","qstn_content":"why","disability_id":"1","qstn_file":"2022-01-16 (6).png"},{"qstn_id":"15","qstn_content":"when","disability_id":"1","qstn_file":"2022-01-18.png"}]';

echo $json."<br><br>";

$yummy = json_decode($json, true);

echo $yummy[0]['qstn_id']; //Maple

?>