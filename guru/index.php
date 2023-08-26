<?php
session_start();
ob_start();
if(isset($_SESSION['status'])){
    header("location:guru.php");
}else{
    header("location:../login.php?login=guru");
}