<?php
error_reporting(0);
include 'db.php';
$q = $_GET['q'];
$x=0;
    $query="select distinct(productType) from product where productType like '%$q%'";
    $result=mysqli_query($connection,$query);
    echo "<ul id='u1' style='list-style-type:none;padding: 0;margin: 0;'>";
    if($result->num_rows)
    {
        
        while($row=$result->fetch_assoc())
        {
            echo "<li><input type='button' class='suggestion' id='$x' style='width: 153px;height: 30px;background-color:white;
                border:none;text-align:left;padding: 10px;' onclick='rem($x)' value=".$row['productType']."></li>";
            $x++;
        }
        
    }
    else
    {
       echo  "<li><p style='width: 153px;height: 30px;background-color:white;
                border:none;text-align:left;padding: 10px;'>Search not found</p></li>";
    }
echo "</ul>";
?>
    