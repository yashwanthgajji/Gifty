<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $connection=mysqli_connect("139.59.2.27","root","5f7557f602cd3c97770ecae8d7b694a2","");
if(!$connection)
{
    die("database connection failed".mysqli_error());
}
 $db_select=mysqli_select_db($connection,"intern");
 if(!$db_select)
 {
     die("database selection failed:");
 }
 
 ?>   
  
</body>
</html>
