<?php
session_start();
ob_start();
if(isset($_SESSION['status'])){
    header("location:siswa.php");
}else{
    header("location:../login.php");
}