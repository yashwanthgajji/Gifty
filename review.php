<?php
error_reporting(0);
include 'db.php' ;
$pic=["https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Star_rating_0_of_5.png/120px-Star_rating_0_of_5.png","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQr-0KsUrJwE9Xq8Pi7-LU-xrYxgB2LtZyLu7odpn151U4OLoxg"];
$q1=mysqli_query($connection,"select * from review where productid=111"); 
 $i=0;
while($r=mysqli_fetch_array($q1))
{
    $review[$i]=$r["review"];
	$userid[$i]=$r["userid"];
	$dop[$i]=$r['dop'];
	$rating[$i]=$r['rating'];
    $i++;
}
$k=0;
for($j=0;$j<count($userid);$j++)
{
	$q1=mysqli_query($connection,"select * from profile where userid=$userid[$j]"); 
 while($r=mysqli_fetch_array($q1))
{
    
	$username[$k]=$r["username"];
    $k++;
}
	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css" rel="stylesheet">
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
a:hover{
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
     background-color:#f78e21;
     color:white;
     border:2px solid #F44336;
 }
     
     #su:hover{
background-color:teal;
border:2px solid powderblue;
}
  </style>



</head>
<body>

<h1>Top Customers Reviews</h1>
<a href="#a"><button class="pd" >Write a product Review</button></a>
<?php for($j=0;$j<count($userid);$j++)
{ ?>
<h4>
	<div class="all-comments">
		<div class="view-comments">
                <div class="comments">
                    <div class="author-thumb">
<img src="https://images-eu.ssl-images-amazon.com/images/S/amazon-avatars/default._CR0,0,1024,1024_SX48_.png"  style="height:90px;width:75px" align="middle" alt=""></img>
 </div>
 <div class="comment-body">
 	<h1>
 <?php
echo $username[$j];
?>
</h1>
<img src="<?php echo $pic[$rating[$j]]; ?>" height="30" width="80"></img>
    <a href="#" class="hidden-xs"><i class="fa fa-thumbs-up" style="font-size: 19px "></i></a>
<?php
echo "<p>".$review[$j]."</p>";

echo "<span class='date'><b>Purchased on:</b>".$dop[$j]."</span>";

?>
 </div>
    </div>
        </div>
            </div>
</h4></br>
<?php
}
?>
  <?php
  
  
    if(isset($_POST["t"]))
  {$s=$_POST["t"];

$b=$_POST['com'];
$d=$_POST['dop'];
$c="$b";
    $sql = "INSERT INTO review (userid,productid,review,dop,rating) VALUES (1002,111,'$c','$d','$s')";

if (mysqli_query($connection, $sql)) {
    echo "<script>alert('Thank you for submitting ');</script>";
} else {
    
}
  }
?>
<a id="a"></a>
<fieldset  style="margin:auto; margin-top:90px;">
<form>
<table align="center"> 
<tr><td ><h2 style="font-weight:bold;color:#f78e21">Submit your Review Here !</h2></td></tr>
<tr></tr>
        <form method="post" action="s0.php">
        <!-- alternate codepen version https://codepen.io/mad-d/pen/aJMPWr?editors=0010 -->
  <tr><td>Purchased Date of the product:<input type="date" name="dop">  </td></tr><tr></tr>
  <tr><td>   Rate the item :</td></tr>
  <tr></tr>
  <tr><td>  <div class="stars" data-rating="0">
        <span class="star"></span>
        <span class="star"></span>
        <span class="star"></span>
        <span class="star"></span>
        <span class="star"></span>
    </div></td></tr>
  <tr></tr>
   <tr><td> Write your comment's:</td></tr>
  <tr><td><textarea rows="4" cols="50" name="com">
    </textarea></td></tr>
    <tr></tr>
<tr><td>
    <input type="text" id="t" name="t" value="abc" style="display:none;"/></td></tr></form></table>
     <center><p> <button id="su">Submit</button></p></center> 
    </form>
 </fieldset> 
 <a href="#" class="dev" ><i class="fa fa-arrow-circle-up" style="font-size: 40px "></i></a>
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
            </script>
</body>
</html>