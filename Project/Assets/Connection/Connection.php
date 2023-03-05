<?php
$server="localhost";
$user="root";
$password="";
$database="db_sake";
$con=mysqli_connect($server,$user,$password,$database);
if(!$con)
{
	echo "Database Error";
}
?>