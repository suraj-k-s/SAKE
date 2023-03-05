<?php
session_start();
if(!(array_key_exists('pid',$_SESSION) && !empty($_SESSION['pid']))) {
    header("Location:../Guest/Home.php");
}
?>