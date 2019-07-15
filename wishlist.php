<?php
error_reporting(0);
session_start();
include 'db.php';
$userid=$_SESSION["active_user"];
$sql="select * from product where productId=any(select productId from wishlist where userId='$userid')";
$result=$connection->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  .line{
  display:inline-block;
  }
  </style>
</head>     
<body>
    <?php 
 include 'nav.php' ; 
?> 
    <br><br><br><br><br><br><br><br><br>
 
    <?php
                if($result->num_rows)
                {
                    while($res=$result->fetch_assoc())
                    {
               ?>
    <?php  $count++;
                            $id=$res['productId'];
                            $qs1=mysqli_query($connection,"select * from wishlist where productId='$id'");
                            while($res1=$qs1->fetch_assoc())
                            {
                                $qty=$res1['qty'];
                            $subtotal=$subtotal+($res1['qty']*$res['cost']);
                            }
         ?>                  
<div class="container-fluid">
    <div class="jumbotron">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th style="color: red;font-size: 20px">Product</th>
                        <th style="color: red;font-size: 20px">Quantity</th>
                        <th style="color: red;font-size: 20px" class="text-center">Price</th>
                        <th style="color: red;font-size: 20px" class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-7 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#" style="margin-right:10px"> <img src="<?php echo $res['image1'] ?>" style="width: 130px; height: 130px;"> </a>
                            <div style="padding: 30px 50px 30px 100px;margin-left:20px;">
                                <h4><?php echo $res['productName'] ?></h4>
                                <h5> under <a><?php echo $res['productType'] ?></a></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center;padding: 60px 0px">
                            <input type="text" class="form-control" value="<?php echo $qty ?>" readonly="readonly"/>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center" style="text-align: center;padding: 65px 0px"><strong>&#8377 <?php echo $res['cost'] ?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center" style="text-align: center;padding: 65px 0px"><strong>&#8377 <?php echo $res['cost']*$qty ?></strong></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center;padding: 60px 0px">
                        <?php 
                        echo "<a href='rmWl.php?u=".$res['productId']."'>"
                             ?>
                            <button type="button" class="btn btn-danger">
                             Remove
                        </button>
                            <?php 
                            echo "</a>"
                            ?>
                                                </td>
						<td class="col-sm-1 col-md-1" style="text-align: center;width:200px;padding: 60px 0px">
                                                   <?php
                                                    echo "<a href='wlToCart.php?u=".$res['productId']."'>"
                                                        ?>
						<button type="button" class="btn btn-danger">
						Move To&nbsp<span class="glyphicon glyphicon-shopping-cart"></span>
                                                    </button>
                                                    <?php 
                                                    echo "</a>"
                                                        ?>
                        
                        </td>
                    </tr>
                    </table>
                </div>
        </div>
    </div>
</div>
</div>
    
       <?php 
                    }
                    include 'footer.php';
                }
                ?>
    <?php
                 if(mysqli_num_rows($result) == 0){
             ?>       
    
                        
    <div class="container-fluid">
        <br><br>
        <div class=" alert alert-danger">
            Your Wishlist is empty
        </div>
         <a href="home.php">
                        <button type="button" class="btn btn-warning">
                             Continue Shopping
                        </button>
                            </a>
    </div>
                        <?php
    
    
                }
                
    
    ?>
                    
</body>
</html>