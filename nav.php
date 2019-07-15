<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <link rel="stylesheet" type="text/css" href="css/home.css">
     <link rel="stylesheet" type="text/css" href="css/home1.css">
      <link rel="stylesheet" type="text/css" href="css/home2.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <script>
            function sear()
            {
                var x=document.getElementById('ns').value;
                if (x == "" ) {
        return;
    } else {
        
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var d = this.responseText;
                document.getElementById("d1").innerHTML=d;
            }
        };
        xmlhttp.open("GET","search.php?q="+x,true);
        xmlhttp.send();
            }
        }
        function rem(y)
        {
            var z=document.getElementById(y).value;
            document.getElementById('ns').value=z;
            u1.style.display='none';
            var page=z+".php";
            window.location=page;
           
        }
        </script>
      <?php
      include "db.php";
      $wn1=0;
      $cn1=0;
      $userid=$_SESSION["active_user"];
      $cn=mysqli_query($connection,"select * from cart where userId='$userid'");
      while($an=mysqli_fetch_array($cn))
       {
        $cn1++;
      }                   
      $wn=mysqli_query($connection,"select * from wishlist where userId='$userid'");
      while($b=mysqli_fetch_array($wn))
       {
        $wn1++;
      }                   
     
      ?>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="navbar-fixed-top">
<div class="container-fluid" style="background-color: #F0FFF0;">
     <form class="navbar-form navbar-left" action="/action_page.php" id="nform">
      <div class="input-group">
          <img src="https://www.gifty.com.kw/images/logo.png" style="float: left">
        <input type="text" class="form-control" placeholder="Search" id="ns" onkeyup="sear()"  name="search" style="width: 400px;top: 30px">
        <button type="button" class="btn btn-warning btn-sm" id="sb" type="submit" style="margin-top:30px">Search</button>
        <div id="d1" style="position:absolute;z-index:15;top:60px;left:165px;bottom:500px;background-color: red;width:115px;border-radius: 20px;
border-bottom-right-radius:15px;border-bottom-left-radius:15px;">
        </div> 
         </div>
        </form>
    <?php
    if(isset($_SESSION["active_user"])){
        $userid=$_SESSION["active_user"];
        $display="block";
        $display1="none";
        $login_flag=1;
    }
    if(!isset($_SESSION["active_user"])){
        
        $display="none";
        $display1="block";
        $login_flag=0;
    }
    
    ?>
    
        
     
    
     <script>
        function account(){
            document.getElementById("account_home").style.display="block";
        }	
        
        </script>
        <?php 
        if(isset($_SESSION["active_user"]))
        {
            $heart_page="wishlist.php";
            $cart_page="cart.php";
            
        }
        else{
           
            $heart_page=$cart_page="index.php?note=1";
        }
        ?>
<ul class="nav navbar-nav navbar-right" id="cart" style="margin-top: 30px">
       <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
       <li><a href="account.php"><span class="glyphicon glyphicon-user"></span>Account</a></li>
      <li><a href="<?php echo $cart_page?>"><span class="glyphicon glyphicon-shopping-cart"></span><span class="badge badge-pill badge-danger pull-right"
              style="background-color:orange;color:white;border-radius:100%;"><?php if(isset($_SESSION["active_user"])){echo $cn1;} ?></span>
Cart</a></li>
<li><a href="<?php echo $heart_page?>"><span class="glyphicon glyphicon-heart"></span><span class="badge badge-pill badge-danger pull-right"
              style="background-color:orange;color:white;border-radius:100%;"><?php if(isset($_SESSION["active_user"])){echo $wn1;} ?></span>Wish List</a></li>
    </ul>
  </div>
  <nav class="navbar navbar-inverse" style="box-shadow: 8px 3px 30px 8px rgba(0,0,0,0.2);background-color:#00264d;z-index:1;">
  <div class="container-fluid">
     <ul class="nav navbar-nav" id="pr">
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white">Clothing <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color: #e0e0eb;height: 400px">
            <div class="container-fluid" style="background-color: #e0e0eb">

            <div class="row" id="na">

          

              <div class="col-md-4 text-left">
                <ul>
                <h2 style="padding:5px;color:#003d99">Men</h2>
                <p style="padding: 1px 1px;background-color: red;width: 60%">
                  <li><div class="but">
                  <div class="ef"></div>
                  <a href="M_T-Shirt.php">  T Shirts</a>
                   </div></li>
                  <hr style="width:100%;float: left">
                  <li><div class="but">
                  <div class="ef"></div>
                  <a href="Cap.php">Caps</a>
                  </div></li><hr style="width:100%;float: left">
                  <li><div class="but">
                  <div class="ef"></div>
                   <a href="Wallets.php">Wallets</a>
                  </div></li><hr style="width:100%;float: left">

                </ul>
              </div>
              <div class="col-md-4 text-left">
                <ul>
                <h2 style="padding:5px;color:#003d99">Women</h2>
                <p style="padding: 1px 1px;background-color: red;width: 60%">

                   <li><div class="but">
                  <div class="ef"></div>
                  <a href="Girls T-Shirt.php">  T Shirts</a>
                   </div></li>
                  <hr style="width:100%;float: left">
                  <li><div class="but">
                  <div class="ef"></div>
                  <a href="Tote.php">  Tote Bags</a>
                  </div></li><hr style="width:100%;float: left">
                  <li><div class="but">
                  <div class="ef"></div>
                   <a href="Jewellery.php">Jewellery</a>
                  </div></li><hr style="width:100%;float: left">
                 
                </ul>
              </div>
              <div class="col-md-4 text-left">
                <ul>
                <h2 style="padding: 5px;color:#003d99">Kids</h2>
                <p style="padding: 1px 1px;background-color: red;width: 60%">
                  <li><div class="but">
                  <div class="ef"></div>
                  <a href="Couple_Tees.php">Couple T Shirts</a>
                   </div></li>
                  <hr style="width:100%;float: left">
                  <li><div class="but">
                  <div class="ef"></div>
                  <a href="Infants.php">Infants</a>
                  </div></li><hr style="width:100%;float: left">
                </ul>
              </div>

             
            </div>
          </div>
        </li>
    </ul>

         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white">Special days <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color: #e0e0eb;height: 400px">
             <div class="container-fluid" style="background-color: #e0e0eb">
                  
                  <div class="row" id="na">
          
              <div class="col-md-6 text-left">
                <ul>
                    <a href="Fathers_day_gift.php"><h3 style="padding:35px;color:#003d99">Fathers Day</h3></a>
                     <ul><p style="padding: 0.5px 0.5px;background-color: red;width: 60%"></ul>
                  <a href="Mothers_day_gift.php"><h3 style="padding:35px;color:#003d99">Mothers Day</h3></a>
                    <ul><p style="padding: 0.5px 0.5px;background-color: red;width: 60%"></ul>
                    <a href=Friendship_day_gift.php"><h3 style="padding:35px;color:#003d99">Friendship Day</h3></a>
                    <ul><p style="padding: 0.4px 0.5px;background-color: red;width: 60%"></ul>
                    <a href="Anniversary_gift.php"><h3 style="padding:35px;color:#003d99">Anniversary Day</h3></a>
                    <ul><p style="padding: 0.4px 0.5px;background-color: red;width: 60%"></ul>  

              
                </ul>
              </div>
              <div class="col-md-6 text-left">
                <ul>
                
                  <h2 style="padding:5px;color:#003d99">Birthday</h2>
              <p style="padding: 1px 1px;background-color: red;width: 60%">
                 <li><div class="but">
                  <div class="ef"></div>
                  <a href="for_him.php">For Him</a>
                   </div></li>
                  <hr style="width:100%;float: left">
                  <li><div class="but">
                  <div class="ef"></div>
                  <a href="for_her.php">For Her</a>
                  </div></li><hr style="width:100%;float: left">

                </ul>
              </div>
              <div class="row">
              <div class="col-md-6 text-left">
                <ul>
                <h2 style="padding:5px;color:#003d99">Valentines Day</h2>
              <p style="padding: 1px 1px;background-color: red;width: 60%">
                <li><div class="but">
                  <div class="ef"></div>
                 <a href="Valentine_gift.php">For Him</a>
                   </div></li>
                  <hr style="width:100%;float: left">
                  <li><div class="but">
                  <div class="ef"></div>
                  <a href="Valentine_gift.php">For Her</a>
                  </div></li><hr style="width:100%;float: left">

                </ul>
              </div>
               <!--<div class="col-md-6 text-left">
                <ul>
                <h2 style="padding:5px;color:#003d99">Aniversary Day</h2>
              <p style="padding: 1px 1px;background-color: red;width: 60%">

                  <a href="Anniversary_gift.php"><li>For Him</li></a>
                  <hr style="width:100%;float: left">
                  <a href="Anniversary_gift.php"><li>For Her</li></a>
                  <hr style="width:100%;float: left">

                </ul>
              </div>-->
            </div>
          </ul>
        </li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white">Accesories <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color: #e0e0eb;height: 400px">
            <div class="container-fluid" style="background-color: #e0e0eb">
                  
            <div class="row" id="na">
               <div class="col-md-6 text-left">
                <ul>
                <h2 style="padding:5px;color:#003d99">Mobile Cases</h2>
                <p style="padding: 1px 1px;background-color: red;width: 60%">
                  <li><div class="but">
                  <div class="ef"></div>
                  <a href="rcase.php">Redmi case</a>
                   </div></li>
                  <hr style="width:100%;float: left">
                  <li><div class="but">
                  <div class="ef"></div>
                  <a href="scase.php">Samsung case</a>
                  </div></li><hr style="width:100%;float: left">
                  <li><div class="but">
                  <div class="ef"></div>
                   <a href="icase.php">Iphone case</a>
                  </div></li><hr style="width:100%;float: left">
                  
                </ul>
              </div>
              <div class="col-md-6 text-left">
                <ul>
                  <h2 style="padding:5px;color:#003d99">Computer Accessories</h2>
                <p style="padding: 1px 1px;background-color: red;width: 60%"> 
                  <li><div class="but">
                  <div class="ef"></div>
                  <a href="lsticker.php">Laptop Stickers</a>
                   </div></li>
                  <hr style="width:100%;float: left">
                  <li><div class="but">
                  <div class="ef"></div>
                  <a href="pendrive.php">Pen Drives</a>
                  </div></li><hr style="width:100%;float: left">
                </ul>
              </div>
          
            </div>
          </div>
          </ul>
        </li>


         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white">Others <span class="caret"></span></a>

          <ul class="dropdown-menu" style="background-color: #e0e0eb;height: 400px">
            <div class="container-fluid" style="background-color: #e0e0eb">

            <div class="row" id="na">

          
              <div class="col-md-4 text-left">
             
                <ul>
                <h2 style="padding:5px;color:#003d99">Classic Gifts</h2>
                <p style="padding: 1px 1px;background-color: red;width: 60%">
                   <li><div class="but">
                  <div class="ef"></div>
                  <a href="Boquet.php">Bouquet</a>
                   </div></li>
                  <hr style="width:100%;float: left">
                  <li><div class="but">
                  <div class="ef"></div>
                  <a href="Mugs.php">Cups</a>
                  </div></li><hr style="width:100%;float: left">
                  <li><div class="but">
                  <div class="ef"></div>
                   <a href="Photo frame.php">Photo Frame</a>
                  </div></li><hr style="width:100%;float: left">
                    <li><div class="but">
                  <div class="ef"></div>
                   <a href="Diary.php">Diary</a>
                  </div></li><hr style="width:100%;float: left">
                </ul>
              </div>

               <div class="col-md-4 text-left">
                <ul>
                 <h2 style="padding:5px;color:#003d99">Home Decors</h2>
                <p style="padding: 1px 1px;background-color: red;width: 60%">
                    <li><div class="but">
                  <div class="ef"></div>
                   <a href="Magnets.php">Magnets</a>
                  </div></li><hr style="width:100%;float: left">
                    <li><div class="but">
                  <div class="ef"></div>
                   <a href="Cushions.php">Cushions</a>
                  </div></li><hr style="width:100%;float: left">
             </ul>
              </div>
                <div class="col-md-4 text-left">
                <ul>
                 <h2 style="padding:5px;color:#003d99">Utilities</h2>
                <p style="padding: 1px 1px;background-color: red;width: 60%">
                    <li><div class="but">
                  <div class="ef"></div>
                   <a href="Keychain.php">Key Chains</a>
                  </div></li><hr style="width:100%;float: left">

             </ul>
              </div>

            </div>

          </ul>
        </li>
         <!--<li class="nav navbar-nav navbar-right" style="float:right;align:right;">
          <a href="userAccount.php?logoutSubmit=1" class="logout" style="color: white">Logout</a>
         </li>-->
      </ul>
  </div>
</nav>
</div> 
           
        
  </body>
</html>