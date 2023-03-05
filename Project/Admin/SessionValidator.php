<?php
session_start();
if(!(array_key_exists('aid',$_SESSION) && !empty($_SESSION['aid']))) {
    header("Location:../Guest/Home.php");
}
?>