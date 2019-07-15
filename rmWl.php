<?php
error_reporting(0);
session_start();
$userid=$_SESSION["active_user"];
$u=$_GET['u'];
include 'db.php';
$sql1="delete from wishlist where productId='$u' and $userId='$userid'";
$connection->query($sql1);
include 'wishlist.php';
?>