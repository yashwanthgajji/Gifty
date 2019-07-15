<?php
error_reporting(0);
session_start();
$u=$_GET['u'];
$userid=$_SESSION["active_user"];
include 'db.php';
$sql1="delete from cart where productId='$u' and userId='$userid'";
$check=mysqli_query($connection,$sql1);  
include 'cart.php';
?>