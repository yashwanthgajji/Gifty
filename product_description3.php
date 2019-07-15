<?php
session_start();
error_reporting(0);
include 'db.php' ;
if(isset($_POST['sub'])){$_SESSION["source"]=$_POST['sub'];}
$source=$_SESSION["source"];
$q1=mysqli_query($connection,"select * from product where productId=$source");
$i=0;
while($r=mysqli_fetch_array($q1))
{
    $image1=$r["image1"];
    $image2=$r["image2"];
    $image3=$r["image3"];
    $image4=$r["image4"];
    $image5=$r["image5"];
    $product_id=$r["productId"];
    $product_type=$r["productType"];
    $product_name=$r["productName"];
    $details=$r["Details"];
    $a_price=$r["cost"];
    $o_price=$r["cost"]-(($r["cost"]*$r["discount"])/100);
    $offer=$r["discount"];
    
   if($image1!="")
   {
       $i++;
       if($image2!="")
   {
       $i++;
       if($image3!="")
   {
       $i++;
       if($image4!="")
   {
       $i++;
       if($image5!="")
   {
       $i++;
   }
   }
   }
   }
   }
}
$pic=["https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Star_rating_0_of_5.png/120px-Star_rating_0_of_5.png","https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Star_rating_1_of_5.png/120px-Star_rating_1_of_5.png","https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Star_rating_2_of_5.png/120px-Star_rating_2_of_5.png","https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Star_rating_3_of_5.png/120px-Star_rating_3_of_5.png","data:image/jpeg;base64,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","https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Star_rating_5_of_5.png/120px-Star_rating_5_of_5.png"];
$qr1=mysqli_query($connection,"select * from review where productId=$source");  
 $p=0;
while($rr1=mysqli_fetch_array($qr1))
{
    $review[$p]=$rr1["review"];
	$userid[$p]=$rr1["userid"];
	$dop[$p]=$rr1['dop'];
	$rating[$p]=$rr1['rating'];
        
    $p++;
}
$k=0;
for($j=0;$j<count($userid);$j++)
{
	$q1=mysqli_query($connection,"select * from profile where userid=$userid[$j]"); 
 while($r=mysqli_fetch_array($q1))
{
    
	$username[$k]=$r["firstname"];
    $k++;
}
	
}
$sum=0;
for($j=0;$j<count($userid);$j++)
{
	$sum=$sum+$rating[$j];
}
$im=round($sum/count($userid));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  .comment-body h1 {
  margin-top: 30px;
  font-size: 18px;
  color: #666;
  font-weight: 700;
  text-transform: uppercase;
  margin-left: 10px;
}
h1{
	margin-left: 50px;
}

.all-comments {
  margin-top: 40px;
  margin-bottom: 40px;
}

.comments {
  margin-top: 30px;
}

.author-thumb {
  float: left;
  margin-right: 30px;
  margin-left: 40px;
}

.comment-body {
  background-color: #f3f3f3;
  padding: 20px;
  overflow: hidden;
  position: relative;
  width:750px;
}

.comment-body h4 {
  font-size: 20px;
  font-weight: 700;
  color: #333;
  text-transform: uppercase;
  margin-bottom: 5px;
  margin-top: 0px;
}

.comment-body span {
  font-size: 18px;
  color: #f78e21;
}

.comment-body p {
	font-size: 22px;
  margin-top: 22px;
}
.comment-body a {
    text-transform: uppercase;
    font-size: 14px;
    color: #fff;
    background-color: #f78e21;
    width: 80px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    display: inline-block;
    position: absolute;
    top: 20px;
    right: 20px;
    text-decoration: none;
    border:2px solid #F44336;
}
.dev{
    color: #fff;
    background-color: #f78e21;
    width: 50px;
    height: 40px;
    line-height: 30px;
    text-align: center;
    display: inline-block;
    position: absolute;
    right:20px;
    text-decoration: none;
    border:2px solid #F44336;	
	margin-bottom:20px;
}
.pd{
color:white;font-size:17px;border:2px solid #F44336;background-color:#f78e21;height:30px;float: right;margin-right: 60px;height:50px;	
}
.pd:hover{
	background-color: teal;
	border:2px solid powderblue;
}

.star{
          color: #f78e21;
          font-size: 2.0rem;
          padding: 0 1rem; /* space out the stars */
        }
        .star::before{
          content: '\2606';    /* star outline */
          cursor: pointer;
        }
        .star.rated::before{
          /* the style for a selected star */
          content: '\2605';  /* filled star */
        }
        
        .stars{
            counter-reset: rateme 0;   
            font-size: 2.0rem;
            font-weight: 900;
        }
    fieldset{
    align:center;
       width:550px;
       background-color:#f3f3f3;
       box-shadow:25px 25px 25px grey;
       margin-top:90px;
       margin: 2px 1px;
    border-radius: 20px;
    
     }
     
     td{
     
     font-size:20px;
     }
     
     #su{
width:75px;
     height:35px;
     /*border:1px solid #900;
     color:#900;*/
     width:68px;
     font-size: 16px;
     text-align: center;
     color:white;
    
 }
     
     #su:hover{
background-color:teal;
border:2px solid powderblue;
}
.img_radio{
       display:inline;   
      } 
.caps{
   font: small-caps bold 1em 
sans-serif;
}

.caps,.normal{
  display: inline-block;
  font-size: 18px;
}
.desc{
  font: 0.8em 
sans-serif;
}
.desc_b{
   font: bold 0.8em 
sans-serif;
}
.price_div,.a_price,.o_price,.offer_avai{
display: inline-block;
}
.a_price{
  text-decoration:line-through;
}
.offer_avai{
    color: red;
}
.disp_button{
    width:100px;
    background-color:DodgerBlue;
    border: none;
    color: white;
    padding: 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 2px 1px;
    cursor: pointer;
  }
  #a
  {
	  background:teal;
	  color:white;
	  height:50px;
	  width:200px;
  }
   #b
  {
	  background:orange;
	  color:white;
	  height:50px;
	  width:200px;
  }
  #c
  {
	  border-color:White;
	  background:White;
	  color:black;
	  height:50px;
	  width:25%;
  }
  .line{
      display:inline-block;
  }
  .tick{
      color:teal;
      text-shadow: 2px 2px 3px green;

  }
  .hover{
      cursor:pointer;
  }
  .remove_btn{
      border:none;
      background-color: white;
  }
</style>
</head>
<body>
    <?php 
 include 'nav.php' ; 
?> 
    <br><br><br><br><br><br><br><br><br>
 
<script type="text/javascript">
</script>
<div class="container">
  <div class="row">
       <div class="col-md-5"> 
        <div class="thumbnail">
          <img src="<?php echo $image1 ?>" name="m1" alt="roses" style="width:32em;height:35em">
           </div>
          
          <img src="<?php echo $image1 ?>" id="1" alt="roses" onmouseover="hover()" onmouseout="nohover()" style="width:5em;
             height:6em;margin-bottom:2px;display:<?php if($i<1){echo "none";}?>"/>
        
        <img src="<?php echo $image2 ?>" id="2" alt="roses" onmouseover="hover()" onmouseout="nohover()" style="width:5em;
             height:6em;margin-bottom:2px;display:<?php if($i<2){echo "none";}?>"/>
        
        <img src="<?php echo $image3 ?>" id="3" alt="roses" onmouseover="hover()" onmouseout="nohover()" style="width:5em;
             height:6em;display:<?php if($i<3){echo "none";}?>"/>
       <img src="<?php echo $image3 ?>" id="4" alt="roses" onmouseover="hover()" onmouseout="nohover()" style="width:5em;
             height:6em;display:<?php if($i<4){echo "none";}?>"/>
       <img src="<?php echo $image3 ?>" id="5" alt="roses" onmouseover="hover()" onmouseout="nohover()" style="width:5em;
             height:6em;display:<?php if($i<5){echo "none";}?>"/>
       
         
           
       </div>
       
    <div class="col-md-6"> 
        <b><b> <h2 style="font:bold sans-serif;"><?php echo $product_name ?></h2></b></b>
		</br>
		<h4><?php echo '#'.$source." ".'|'." ".count($userid)." Reviews "." ".'| '." "; ?><img src="<?php echo $pic[$im];?>" height="18" width="65"></img>
		&nbsp| <a href="#rev">🖉add your review</a></H4>
        <hr>
		
		<h2 style="color:teal;font-weight:bold;"><?php echo  "₹".$o_price; ?></h2>
		</br>
		       <table style="width:600px;cellspacing:10px;">
                    <tr>
                        
                        <td style="width:150px;">
                        <form action="product_description.php" method="POST">
                        <input type='button' class="btn btn-hover" name='add' style="height: 45px; width: 30px; font-size:20px;" onclick='javascript: document.getElementById("qty").value++; document.getElementById("invisible").value++;' value='+'/>
			<input type='text' class="btn btn-hover" name='qty' onchange="invisible()" style="width:45px; height:45px; text-align:center;font-size:20px;" id='qty' value='1' />
			<input type='button' class="btn btn-hover" name='subtract'  style="height: 45px; width: 30px; font-size:20px;" onclick='javascript: document.getElementById("qty").value--; document.getElementById("invisible").value--;' value='-'/>
                       
                        </td>
                        <td>
                  
                        <button class="btn btn-hover" id="b" name="y" value="<?php $product_id ?>">ADD TO CART</button>
                        </form>
                        </td>
                        
                        <td>
                
                    <button class="btn btn-hover" id="a"  value="<?php echo $product_id ?>">
                        <a href="personalize3.php?y2=<?php echo $product_id ?>" style="color:white"> PERSONALIZE</a></button>
                    
                
                
                        </td>
                    </tr>
                </table>
                </br>
                <table>
                    <tr>
                        <td>
                <form action="product_description.php" method="post">
                    <input type="text" value="1" name="invisible" id="invisible" style="display:none;"/>
                        <button class="remove_btn" name="y1" value="<?php $product_id ?>">
                            <img class="line hover"  src="product_description_img/heart-icon.png" height="30" width="30" style="text-decoration:none;color:black;"/>
                Add to Wishlist</button>
                </form>  
                            
                        </td>
                        <td>
                            <img class="hover line" src="product_description_img/wrap.png" data-target="#gw_slide" data-toggle="collapse" height="30" width="30"/>
                <h5 class="hover line" data-target="#gw_slide" data-toggle="collapse">Wrap the product</h5>
                        </td>
                    </tr>
                </table>
                
                  <div class="collapse gw_slide" id="gw_slide">
                    <br>
                    <div class="container">
  
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:600px;height:250px;margin-top:10px;">
          <!-- Indicators -->
          <ol class="carousel-indicators">
             <li data-target="#myCarousel" data-slide-to="0" class="active" style="background-color:black;"></li>
            <li data-target="#myCarousel" data-slide-to="1" style="background-color:black;"></li>
            <li data-target="#myCarousel" data-slide-to="2" style="background-color:black;"></li>
            <li data-target="#myCarousel" data-slide-to="3" style="background-color:black;"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
              <br>
            <div class="item active">
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <img src="product_description_img/1.jpg" alt="Chicago" style="width:100%;height:120px;">
                        <center>
                        <input type="radio" class="line"  id="r1" name="r" value="r3"/>
                        <h4 class="line" style="color:teal;">Rs.50</h4>
                        </center>
                    </div>
                    <div class="col-sm-3">
                        <center>
                            <img class="line" src="product_description_img/2.jpg" alt="Chicago" style="width:100%;height:120px;">
                        <input class="line" type="radio" id="r2" name="r" value="r3"/>
                        <h4 class="line" style="color:teal;">Rs.40</h4>
                        </center>
                    </div>
                    <div class="col-sm-3">
                        <center>
                            <img class="line" src="product_description_img/3.jpg" alt="Chicago" style="width:100%;height:120px;">
                        <input class="line" type="radio" id="r3" name="r" value="r3"/>
                        <h4 class="line" style="color:teal;">Rs.0</h4>
                        </center>
                    </div>
                <div class="col-sm-1"></div>
                </div>
              <div class="item">
                    <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <img src="product_description_img/4.jpg" alt="Chicago" style="width:100%;height:120px;">
                        <center>
                        <input type="radio" class="line"  id="r4" name="r" value="r4"/>
                        <h4 class="line" style="color:teal;">Rs.50</h4>
                        </center>
                    </div>
                    <div class="col-sm-3">
                        <center>
                            <img class="line" src="product_description_img/5.jpg" alt="Chicago" style="width:100%;height:120px;">
                        <input class="line" type="radio" id="r5" name="r" value="r5"/>
                        <h4 class="line" style="color:teal;">Rs.60</h4>
                        </center>
                    </div>
                    <div class="col-sm-3">
                        <center>
                            <img class="line" src="product_description_img/6.jpg" alt="Chicago" style="width:100%;height:120px;">
                        <input class="line" type="radio" id="r6" name="r" value="r6"/>
                        <h4 class="line" style="color:teal;">Rs.50</h4>
                        </center>
                    </div>
                <div class="col-sm-1"></div>
          </div>
              <div class="item">
                    <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <img src="product_description_img/7.jpg" alt="Chicago" style="width:100%;height:120px;">
                        <center>
                        <input type="radio" class="line"  id="r7" name="r" value="r7"/>
                        <h4 class="line" style="color:teal;">Rs.30</h4>
                        </center>
                    </div>
                    <div class="col-sm-3">
                        <center>
                            <img class="line" src="product_description_img/8.jpg" alt="Chicago" style="width:100%;height:120px;">
                        <input class="line" type="radio" id="r8" name="r" value="r8"/>
                        <h4 class="line" style="color:teal;">Rs.40</h4>
                        </center>
                    </div>
                    <div class="col-sm-3">
                        <center>
                            <img class="line" src="product_description_img/9.jpg" alt="Chicago" style="width:100%;height:120px;">
                        <input class="line" type="radio" id="r9" name="r" value="r9"/>
                        <h4 class="line" style="color:teal;">Rs.60</h4>
                        </center>
                    </div>
                <div class="col-sm-1"></div>
          </div>
              <div class="item">
                    <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <img src="product_description_img/10.jpg" alt="Chicago" style="width:100%;height:120px;">
                        <center>
                        <input type="radio" class="line"  id="r10" name="r" value="r10"/>
                        <h4 class="line" style="color:teal;">Rs.80</h4>
                        </center>
                    </div>
                    <div class="col-sm-3">
                        <center>
                            <img class="line" src="product_description_img/11.jpg" alt="Chicago" style="width:100%;height:120px;">
                        <input class="line" type="radio" id="r11" name="r" value="r11"/>
                        <h4 class="line" style="color:teal;">Rs.90</h4>
                        </center>
                    </div>
                    <div class="col-sm-3">
                        <center>
                            <img class="line" src="product_description_img/12.jpg" alt="Chicago" style="width:100%;height:120px;">
                        <input class="line" type="radio" id="r12" name="r" value="r12"/>
                        <h4 class="line" style="color:teal;">Rs.80</h4>
                        </center>
                    </div>
                <div class="col-sm-1"></div>

            </div>


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

                </div>
                
                
        <hr>
        <h4><b class="tick">✓</b>Free Shipping&nbsp <b class="tick">✓</b>Cash On delievery &nbsp<b class="tick">✓</b>Next day delievery&nbsp <br><b class="tick">✓</b>Same day delievery<h4>
		</br>
        <h5><b>Delivery 4-6 Working Days &nbsp &nbsp 
                <img class="line hover"  src="https://tse2.mm.bing.net/th?id=OIP.ydr-1Jn8DgTfCm3QtWSo6QHaHa&pid=15.1&P=0&w=300&h=300" height="6%" width="8%" alt="" >
		<h5 style="color:red" class="line hover" data-target="#d_pin" data-toggle="collapse">Delivery Coverage & Charges</h5></b>
		</h5>
		
                <div class="collapse disp_pin" id="d_pin">
                    <div class="container">
                        <input type="text" id="pin" placeholder="enter your pin here"/><br><br>
                        <button class="btn" id="pin_btn" onclick="check()" style="background-color:teal;color:white;">CHECK</button>
                    </div>
                
                <div class="hide_pin" id="hide_pin" style="display: none;">
                    <div class="container-fluid">
                        <div class="jumbotron">
                                
                          <p>Standard Delivery service is available in your area.Standard Delivery charges - ₹60.00
                              Priority Delivery is available for this product in your area at an extra charge of ₹129.00</p>
                        </div>   
                      </div>

                </div>
                <div id="warn" class="alert alert-danger" style="display:none;">It is not a valid pincode.</div>
                </div>
                <hr>
	<div class="container-fluid">     
            <div>
                <h3 style="color:teal"><b>Description:</b></h3>   
             <h4> <?php echo $details; ?></h4>
             <hr>
            </div>

        </div>

        </div>
    </div>
       </div>
	   </br>
	   </br>
	   <h4><b>Top Customers Reviews</b></h34>
<?php 

for($j=0;$j<count($userid);$j++)
{ ?>
<h3>
<img src="https://images-eu.ssl-images-amazon.com/images/S/amazon-avatars/default._CR0,0,1024,1024_SX48_.png" height="30" width="30" align="middle" alt=""></img>
&nbsp <?php
echo $username[$j];


?>

</h3>
<img src="<?php echo $pic[$rating[$j]]; ?>" height="30" width="75"></img>
</br>

<?php
echo "<p>&nbsp &nbsp".$review[$j]."</p>";

echo "<p><b>Purchased on:</b>".$dop[$j]."</p>";

?>

</br>
<hr>
<?php
}
?>
<?php
  
  
   
?>
<a id="rev"></a>
<div class="well" style="font-size:10px;">

<table align="lef" style="font-size:10px;"> 
<tr><td ><h4 style="font-weight:normal;color:#f78e21">Submit your Review Here !</h4></td></tr>
<tr></tr>
        <form method="post" action="review_form_db.php">
        <!-- alternate codepen version https://codepen.io/mad-d/pen/aJMPWr?editors=0010 -->
  <tr><td style="font-size:14px;font-weight:bold;">Purchased Date of the product:<input type="date" name="dop">  </td></tr><tr></tr>
   <tr><td style="font-size:10px;font-weight:bold;">  <div class="stars" data-rating="0">
        <span class="star"></span>
        <span class="star"></span>
        <span class="star"></span>
        <span class="star"></span>
        <span class="star"></span>
    </div></td></tr>
  
   <tr><td style="font-size:14px;font-weight:bold;">Write your comment's:</td></tr>
  <tr><td style="font-size:14px;font-weight:bold;"><textarea rows="4" cols="50" name="com">
    </textarea></td></tr>
    <tr></tr>
<tr><td>
    <input type="text" id="t" name="t" value="" style="display:none;"/></td></tr>
     <tr><td style="font-size:14px;font-weight:bold;"><center><p> <button id="su" class="btn btn-warning">Submit</button></p></center> </td></tr>
	 </table>
    </form>
 </div>
 
    <script>
	
        
        //initial setup
        document.addEventListener('DOMContentLoaded', function(){
            let stars = document.querySelectorAll('.star');
            stars.forEach(function(star){
                star.addEventListener('click', setRating); 
            });
            
            let rating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
            let target = stars[rating - 1];
            target.dispatchEvent(new MouseEvent('click'));
        });
        function setRating(ev){
            let span = ev.currentTarget;
            let stars = document.querySelectorAll('.star');
            let match = false;
            let num = 0;
            stars.forEach(function(star, index){
                if(match){
                    star.classList.remove('rated');
                }else{
                    star.classList.add('rated');
                }
                //are we currently looking at the span that was clicked
                if(star === span){
                    match = true;
                    num = index + 1;
                }
            });
            document.querySelector('.stars').setAttribute('data-rating', num);

                        document.getElementById("t").value=num;
                        console.log(document.getElementById("t").value);
        }
        function nohover(){
		y=event.target.id;
		var x=document.getElementById(y);
		x.style.border="none";
	}
        function hover(){
		y=event.target.id;
		var x=document.getElementById(y);
		x.style.border="2px solid Silver";
		document.m1.src=x.getAttribute("src");
	}
        function check(){
            var pin=document.getElementById("pin").value;
            console.log(pin);
            if(!pin.match(/\d{6}/))
            {
                document.getElementById("warn").style.display="block";
            }
            else{
                document.getElementById("hide_pin").style.display="block";
                document.getElementById("warn").style.display="none";
                document.getElementById("pin_btn").style.opacity="0.6";
            }
        }
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
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['y1']))
    {
        if(!isset($_SESSION["active_user"]))
        {
            
            echo "<script>alert('Log in to shop')</script>";
            
        }
        else{
        
        addToWl();
        }
    }
    
    function addToCart()
    {
        
            include 'db.php';
            $source=$_SESSION['source'];
             $userid=$_SESSION["active_user"];
            $qa1=mysqli_query($connection,"select * from product where productId=$source");
            while($r1=mysqli_fetch_array($qa1))
        {
            $product_id=$r1["productId"];;
            $y=$product_id;
        }
        
       
            $qty=$_POST["qty"];
         $cq1=mysqli_query($connection,"select * from cart where productId=$y and userId='$userid'");   
       if(mysqli_num_rows($cq1)>0){
           while($rcq1=mysqli_fetch_array($cq1))
        {
               $qtya=$rcq1["qty"];
        }
           
          $qty=$qty+$qtya;
          $sql2="update cart set qty='$qty' where productId='$y' and userId='$userid'";
        $check=mysqli_query($connection,$sql2); 
        
       }
        else{
        $sql2="insert into cart(userId,productId,qty) values('$userid','$y','$qty')";
        $check=mysqli_query($connection,$sql2); 
        }
       
    }
    function addToWl()
    { $userid=$_SESSION["active_user"];
            include 'db.php';
            $source=$_SESSION['source'];
            $qa1=mysqli_query($connection,"select * from product where productId=$source");
            while($r1=mysqli_fetch_array($qa1))
        {
            $product_id=$r1["productId"];;
            $y=$product_id;
        }
        
         $qty1=$_POST["invisible"];
         $cq2=mysqli_query($connection,"select * from wishlist where productId='$y' and userId='$userid'");   
       if(mysqli_num_rows($cq2)>0){
          while($rcq2=mysqli_fetch_array($cq2))
        {
               $qtyb=$rcq2["qty"];
        }
           
          $qty1=$qty1+$qtyb;
          $sql1="update wishlist set qty='$qty1' where ( productId='$y' and userId='$userid')";
        $check1=mysqli_query($connection,$sql1); 
        
       }
       else{
        $sql1="insert into wishlist(userId,productId,qty) values('$userid','$y','$qty1')";
        $check1=mysqli_query($connection,$sql1); 
       }
    }
?>

<?php
include 'footer.php'; 
?>
</body>
</html>