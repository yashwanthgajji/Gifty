<?php
error_reporting(0);
session_start();
include 'db.php';
 $q1=mysqli_query($connection,'select * from product where productType="Jewellery"'); 
 $product_type=[];
 $product_name=[];
 $details=[];
 $o_price=[];
 $img=[];
 $product_id=[];
 $i=0;
while($r=mysqli_fetch_array($q1))
{
    $product_type[$i]=$r["productType"];
    $product_name[$i]=$r["productName"];
    $details[$i]=$r["Details"];
    $a_price[$i]=$r["cost"];
    $o_price[$i]=$r["cost"]-(($r["cost"]*$r["discount"])/100);
    $offer[$i]=$r["discount"];
    $img[$i]=$r["image1"];
	$product_id[$i]=$r["productId"];
    $i++;
}
$end=$i;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  </style>
</head>
<body>
 <?php 
 include 'nav.php' ; 
?> 
    <br><br><br><br><br><br><br><br><br>
    
<div class="container">
  <div class="row">
   <?php
                            

                                $j=0;
                                while($j<$end)
                                {
                                    if (!empty($product_type[$j])&&!empty($product_name[$j])
                                            &&!empty($details[$j])&&!empty($o_price[$j])
                                            &&!empty($img[$j]))
                                {
                            ?>
           
    <div class="col-md-4">
      <div class="thumbnail">
          <form action="product_description3.php" method="post">
	  <?php
	  echo "<button  name='sub' value= $product_id[$j]>";
echo "<img src= $img[$j] height='300' width='300' alt='roses'></button>";
?>
	</form>	
          <div class="product info">
            <ul>
             <h2 class="product-name" ><?php echo $product_name[$j]?></h2>
             </ul>
             <div class="row">
                  <div class="col-sm-6">
                    <ul>
                    <span class="regular-price" style="color: red"><h4>Rs.<?php echo $o_price[$j]?></h4</span>
                    </ul>
                  </div>
                  <div class="col-sm-6">
                  <ul>
                      <form action="Jewellery.php" method="post">
                    <?php
                         echo "<button class='btn btn-warning btn-sm ' name='y' value= $product_id[$j]>";
                    ?>
                        <span class="glyphicon glyphicon-shopping-cart"></span> Add to cart
                     <?php
                        echo "</button>";
                    ?>
	</form>	
          
                     <!-- <form action="addToCart.php" method="get">
                  <button type="button" class="btn btn-warning btn-sm" name='y' value=<?php echo $product_id[$j];?> >
                  <span class="glyphicon glyphicon-shopping-cart"></span> Add to cart
                  </button> 
                      </form>-->
                  </ul>
                  </div>
              </div>
          </div>
        </div>    
    </div>
      <?php
                                }
                                $j++;
                                }
                              ?>
             
  </div>
</div>
    <script>
        document.getElementById("c_btn").setAttribute("class","btn btn-warning btn-sm");
    </script>
    
    
    


<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['y']))
    {
        if(!isset($_SESSION["active_user"]))
        {
            
            echo "<script>alert('Log in to shop')</script>";
            
        }
        else{
        addToCart();
        }
        
    }
    function addToCart()
    {   $userid=$_SESSION["active_user"];
        if(isset($_POST['y'])){$y=$_POST['y'];}
        include 'db.php';
         $cq1=mysqli_query($connection,"select * from cart where productId='$y' and userId='$userid'");   
       if(mysqli_num_rows($cq1)>0){
          
           while($rcq1=mysqli_fetch_array($cq1))
        {
               $qtya=$rcq1["qty"];
        }
           
          $qty=$qtya+1;
          $sql2="update cart set qty='$qty' where (productId='$y' and userId='$userid')";
        $check=mysqli_query($connection,$sql2); 
        
          
       }
       else{
           
           $userid=$_SESSION["active_user"];
        $sql3="insert into cart(userId,productId,qty) values('$userid','$y','1')";
        $check3=mysqli_query($connection,$sql3); 
        if($check3){
            echo "product added to cart";
        }
       }
    }
    include 'footer.php';
?>

  
</body>
</html>