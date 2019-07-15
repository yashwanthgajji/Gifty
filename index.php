<?php 
error_reporting(0);
$note=$_GET["note"];
if($note==1)
{
  echo "<script>alert('Log in to shop')</script>" ;  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gifty</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
   <link rel="stylesheet" type="text/css" href="css/home.css">
   <link rel="stylesheet" type="text/css" href="css/home1.css">
   <link rel="stylesheet" type="text/css" href="css/home2.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php 
 include 'nav.php' ; 
?> 
    <br><br><br><br><br><br><br>
 
<div class="container-fluid">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="https://fm.cnbc.com/applications/cnbc.com/resources/img/editorial/2017/12/04/104878340-Christmas_tree_presents.1910x1000.jpg?v=1512420798" alt="gifts" id="slid">
      <div class="carousel-caption">
        <h2>Special Gifts for Your Loved One's</h2>
      </div>
    </div>
       <div class="item">
      <img src="https://www.designsbysns.com/wp-content/uploads/2017/04/slide3.jpg" alt="men" id="slid">
      <div class="carousel-caption">
        <h3>For</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://tdsblog.com/wp-content/uploads/2018/02/Burberry_Christmas_2012_accessories.jpg" alt="accessories" id="slid">
      <div class="carousel-caption">
        <h2>All Accessories</h2>
      </div>
    </div>
    <div class="item">
      <img src="https://i.ytimg.com/vi/YeUUgbJxWTE/maxresdefault.jpg" alt="electronics" id="slid">
      <div class="carousel-caption">
        <h2>Best Accessories You Like the Most</h2>
      </div>
    </div>
    <div class="item">
      <img src="https://cdn6.f-cdn.com/contestentries/324803/15600593/568bbf7d7abd5_thumb900.jpg" alt="perfumes" id="slid">
      <div class="carousel-caption">
        <h2>Classic Perfumes</h2>
      </div>
    </div>
    <div class="item">
      <img src="https://m.giftsdirect.com/wysiwyg/giftsdirect/landing_pages/occasion/Gifts-For-All-Occasions-7-min.jpg" alt="ocassions" id="slid">
      <div class="carousel-caption">
        <h2>Choose The Best</h2>
      </div>
    </div>
  </div>

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

<div class="container-fluid">
  <div class="jumbotron">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">


<div class="content">
        <div class="grid">
          <figure class="effect-ruby">
              <img onclick="for_him()" src="http://glamshelf.com/wp-content/uploads/2017/01/banner.jpg" alt="men" style="width:350px;height: 300px">
            </figure>
          
        </div>
      </div>
             <div class="row">
              <ul>
                  <div class="col-sm-12">
                    <span class="" style="color: red"><h3>For Men</h3</span>
                  </div>
                </ul>
              </div>
        </div>    
    </div>
    <div class="col-md-4">
      <div class="thumbnail">

<div class="content">
        <div class="grid">
          <figure class="effect-ruby">
          <img onclick="for_her()" src="https://ae01.alicdn.com/kf/HTB1G8QbJVXXXXa0aXXXq6xXFXXX3/2018-Latino-Dancewear-Dance-Wear-Plus-Size-Women-Latin-Dress-Dresses-For-Stage-Ballroom-Dance-Costumes.jpg" alt="women" style="width:350px;height: 300px">
          </figure>
        </div>
      </div>
            <div class="row">
              <ul>
                  <div class="col-sm-12">
                    <span class="" style="color: red"><h3>For Women</h3</span>
                  </div>
                </ul>
              </div>  
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">


<div class="content">
        <div class="grid">
          <figure class="effect-ruby">
          <img onclick="pendrive()" src="http://www.pmstaging.xyz/wp-content/uploads/Electronics-Accessories-category.png" alt="electronics" style="width:350px;height: 300px">
            </figure>
        </div>
      </div>
            <div class="row">
              <ul>
                  <div class="col-sm-12">
                    <span class="" style="color: red"><h3>Electronics</h3</span>
                  </div>
                </ul>
              </div>  
      </div>
    </div>
   
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">


<div class="content">
        <div class="grid">
          <figure class="effect-ruby">
          <img onclick="lsticker()" src="https://cdn.shopify.com/s/files/1/2530/5088/products/m03_1024x1024@2x.jpg?v=1518397083" alt="laptop skins" style="width:350px;height: 300px">
           </figure>
        </div>
      </div>
            <div class="row">
              <ul>
                  <div class="col-sm-12">
                    <span class="" style="color: red"><h3>Laptop Skins</h3</span>
                  </div>
                </ul>
              </div>  
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">


<div class="content">
        <div class="grid">
          <figure class="effect-ruby">

          <img onclick="Keychain()" src="https://www.greetingseveryday.com/wp-content/uploads/2017/06/Fathers-Day-2017-HD-Wallpaper-for-Desktop.jpg" alt="key chains" style="width:350px;height: 300px">
            </figure>
          
        </div>
      </div>



            <div class="row">
              <ul>
                  <div class="col-sm-12">
                    <span class="" style="color: red"><h3>Key Chains</h3</span>
                  </div>
                </ul>
              </div>  
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">

<div class="content">
        <div class="grid">
          <figure class="effect-ruby">


          <img onclick="icase()" src="http://wp.widewallpapers.net/4k/mobile/sony/xperia-z-ultra/3840x2160/Sony-Xperia-Z-Ultra-3840x2160-004.jpg" alt="key chains" style="width:350px;height: 300px">

            </figure>
          
        </div>
      </div>




            <div class="row">
              <ul>
                  <div class="col-sm-12">
                    <span class="" style="color: red"><h3>Mobile Phone</h3</span>
                  </div>
                </ul>
              </div>  
      </div>
    </div>
  </div>
   <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">


<div class="content">
        <div class="grid">
          <figure class="effect-ruby">

          <img onclick="Boquet()" src="http://videsa.info/wp-content/uploads/2018/05/blue-wedding-flowers-hd-awesome-flowers-for-weddings-royal-and-silver-navy.jpg" alt="bouquet" style="width:350px;height: 300px">

            </figure>
          
        </div>
      </div>





            <div class="row">
              <ul>
                  <div class="col-sm-12">
                    <span class="" style="color: red"><h3>Bouquet</h3</span>
                  </div>
                </ul>
              </div>  
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">


<div class="content">
        <div class="grid">
          <figure class="effect-ruby">

          <img onclick="Valentine_gift()" src="http://wpuploads.appadvice.com/wp-content/uploads/2015/01/TAG-Heuer.jpg" alt="watches" style="width:350px;height: 300px">


            </figure>
          
        </div>
      </div>



            <div class="row">
              <ul>
                  <div class="col-sm-12">
                    <span class="" style="color: red"><h3>Watches</h3</span>
                  </div>
                </ul>
              </div>  
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">


<div class="content">
        <div class="grid">
          <figure class="effect-ruby">

          <img onclick="Anniversary()" src="http://d2ugg20l2vux3.cloudfront.net/blog/wp-content/uploads/2014/06/gift.jpg" alt="gifts" style="width:350px;height: 300px">

            </figure>
          
        </div>
      </div>



            <div class="row">
              <ul>
                  <div class="col-sm-12">
                    <span class="" style="color: red"><h3>Anniversary Gifts</h3</span>
                  </div>
                </ul>
              </div>  
      </div>
    </div>
  </div>
  
</div>
 <?php
include 'footer.php'; 
?>
  <script>
   function for_him(){
       window.location="for_him.php";
   }
   function for_her(){
       window.location="for_her.php";
   }
   function Boquet(){
       window.location="Boquet.php";
   }
   function pendrive(){
       window.location="pendrive.php";
   }
   function lsticker(){
       window.location="lsticker.php";
   }
   function Keychain(){
       window.location="Keychain.php";
   }
   function Valentine_gift(){
       window.location="Valentine_gift.php";
   }
   function Anniversary_gift(){
       window.location="Anniversary.php";
   }
   function icase(){
           window.location="icase.php";
   }
  </script>
 </body>
</html>