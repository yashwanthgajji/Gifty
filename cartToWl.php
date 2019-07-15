<?php
error_reporting(0);
session_start();
$userid=$_SESSION["active_user"];
$u=$_GET['u'];
include 'db.php';
$sql0="select * from cart where (productId='$u' and userId='$userid')";
$check0=mysqli_query($connection,$sql0); 
 
while($r1=mysqli_fetch_array($check0))
{
    $qty=$r1["qty"];
   
}

$sql1="delete from cart where productId='$u' and userId='$userid'";
$check=mysqli_query($connection,$sql1);  
$cq1=mysqli_query($connection,"select * from wishlist where (productId='$u' and userId='$userid')");   
       if(mysqli_num_rows($cq1)>0){
          
           while($rcq1=mysqli_fetch_array($cq1))
        {
               $qtya=$rcq1["qty"];
        }
           
          $qty=$qtya+1;
          $sql2="update wishlist set qty='$qty' where (productId='$u' and userId='$userid')";
        $check=mysqli_query($connection,$sql2); 
        
          
       }
       else{
$sql2="insert into wishlist(userId,productId,qty) values('$userid','$u','$qty')";
$check2=mysqli_query($connection,$sql2);

       }
       include 'cart.php';
?>