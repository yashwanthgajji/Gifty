<?php
error_reporting(0);
 include 'db.php';
 $y2=$_GET["y2"];
 $q1=mysqli_query($connection,"select * from product where productId='$y'");
while($r=mysqli_fetch_array($q1))
{
    $img=$r["image6"];
}

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE]><script type="text/javascript" src="js/excanvas.js"></script><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>	
	<script type="text/javascript" src="js/fabric.js"></script>
	<script type="text/javascript" src="js/caseEditor.js"></script>
	<script type="text/javascript" src="js/jquery.miniColors.min.js"></script>
	
    <!-- Le styles -->
    <link type="text/css" rel="stylesheet" href="css/jquery.miniColors.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	 <script type="text/javascript">
	 </script>
	 <style type="text/css">
		 .footer {
			padding: 70px 0;
			margin-top: 70px;
			border-top: 1px solid #E5E5E5;
			background-color: whiteSmoke;
			}			
	      body {
	        padding-top: 60px;
/*	        background-color: #000000;	        */
	      }
	      .color-preview {
	      	border: 1px solid #CCC;
	      	margin: 2px;
	      	zoom: 1.8;
	      	vertical-align: top;
	      	display: inline-block;
	      	cursor: pointer;
	      	overflow: hidden;
	      	width: 20px;
	      	height: 20px;
	      }
	      .rotate {  
		    -webkit-transform:rotate(90deg);
		    -moz-transform:rotate(90deg);
		    -o-transform:rotate(90deg);
		    /* filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1.5); */
		    -ms-transform:rotate(90deg);		   
		}	
		::-webkit-file-upload-button {
  background: red;
  color: white;
  padding: 0.8em;
  width:58%;
   text-transform: uppercase;
   margin-top: 20px;
}
 #b
  {
	  background:Chocolate;
	  color:white;
	   padding: 0.8em;
	  width:60%;
  }	
  #cart li{
  	float: right;
  	padding-right: 25px;
  	font-size: 18px;
  }	
		.Arial{font-family:"Arial";}
		.Helvetica{font-family:"Helvetica";}
		.MyriadPro{font-family:"Myriad Pro";}
		.Delicious{font-family:"Delicious";}
		.Verdana{font-family:"Verdana";}
		.Georgia{font-family:"Georgia";}
		.Courier{font-family:"Courier";}
		.ComicSansMS{font-family:"Comic Sans MS";}
		.Impact{font-family:"Impact";}
		.Monaco{font-family:"Monaco";}
		.Optima{font-family:"Optima";}
		.HoeflerText{font-family:"Hoefler Text";}
		.Plaster{font-family:"Plaster";}
		.Engagement{font-family:"Engagement";}

	 </style>
  </head>

  <body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">

  <!-- Navbar
    ================================================== -->
 <div class="container">
		<section id="typography">
                  <div class="page" style="top:30px;">
		    <h1>Personalize <a href="index.php"><i class="fa fa-home"></i></a></h1>
                    <hr><hr>
		  </div>
		
		  <!-- Headings & Paragraph Copy -->
		  <div class="row">			
		    <div class="span3">
		    	
		    	<div class="tabbable"> <!-- Only required for left/right tabs -->
				  <ul class="nav nav-tabs">
				  	<li class="active"><a href="#tab1" data-toggle="tab"> Options</a></li>				    
				    <li><a href="#tab2" data-toggle="tab">Design and Text/image</a></li>
				  </ul>
				  <div class="tab-content">
				     <div class="tab-pane active" id="tab1">
				     	
					      <div class="well">
							<ul class="nav">
								<li class="color-preview" title="White" style="background-color:#ffffff;"></li>
								<li class="color-preview" title="Dark Heather" style="background-color:#616161;"></li>
								<li class="color-preview" title="Gray" style="background-color:#f0f0f0;"></li>
								
								<li class="color-preview" title="Black" style="background-color:#222222;"></li>
								<li class="color-preview" title="Heather Orange" style="background-color:#fc8d74;"></li>
								<li class="color-preview" title="Heather Dark Chocolate" style="background-color:#432d26;"></li>
								<li class="color-preview" title="Salmon" style="background-color:#eead91;"></li>
								<li class="color-preview" title="Chesnut" style="background-color:#806355;"></li>
								<li class="color-preview" title="Dark Chocolate" style="background-color:#382d21;"></li>
								<li class="color-preview" title="Citrus Yellow" style="background-color:#faef93;"></li>
								<li class="color-preview" title="Avocado" style="background-color:#aeba5e;"></li>
								<li class="color-preview" title="Kiwi" style="background-color:#8aa140;"></li>
								<li class="color-preview" title="Irish Green" style="background-color:#1f6522;"></li>
								<li class="color-preview" title="Scrub Green" style="background-color:#13afa2;"></li>
								<li class="color-preview" title="Teal Ice" style="background-color:#b8d5d7;"></li>
								<li class="color-preview" title="Heather Sapphire" style="background-color:#15aeda;"></li>
								<li class="color-preview" title="Sky" style="background-color:#a5def8;"></li>
								<li class="color-preview" title="Antique Sapphire" style="background-color:#0f77c0;"></li>
								<li class="color-preview" title="Heather Navy" style="background-color:#3469b7;"></li>							
								<li class="color-preview" title="Cherry Red" style="background-color:#c50404;"></li>
							</ul>
						</div>			      
				     </div>				   
				    <div class="tab-pane" id="tab2">
				    	<div class="well" style="height:400px;">
				    		<div class="input-append">
							  <input class="span2" id="text-string" type="text" placeholder="add text here..."><button id="add-text" class="btn" title="Add text"><i class="icon-share-alt"></i></button>
							  <hr>
							</div>
				    		<img style="cursor:pointer;width:90px;height:120px;" class="img-polaroid" src="img/phones/designs/1.jpg">
				    		<img style="cursor:pointer;width:90px;height:120px;" class="img-polaroid" src="img/phones/designs/7.jpg">
			                <img style="cursor:pointer;width:90px;height:120px;" class="img-polaroid" src="img/phones/designs/8.jpg">
			                <img style="cursor:pointer;width:90px;height:120px;" class="img-polaroid" src="img/phones/designs/2.jpg">
			                <img style="cursor:pointer;width:90px;height:120px;" class="img-polaroid" src="img/phones/designs/3.jpg">
			                <img style="cursor:pointer;width:90px;height:120px;" class="img-polaroid" src="img/phones/designs/4.jpg">
			                <img style="cursor:pointer;width:90px;height:120px;" class="img-polaroid" src="img/phones/designs/5.jpg">
			                <img style="cursor:pointer;width:90px;height:120px;" class="img-polaroid" src="img/phones/designs/6.jpg">	
			                <img style="cursor:pointer;" class="img-polaroid" id="blah" src="#" alt="UPLOADED IMAGE HERE">
							<script type="text/javascript">
    	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>		                
				    	</div>				      
				    </div>
				  </div>
				</div>				
		    </div>		
		    <div class="span6">		    
		    		<div align="center" style="min-height: 32px;">
		    			<div class="clearfix">
							<div class="btn-group inline pull-left" id="texteditor" style="display:none;">							  
								<button id="font-family" class="btn dropdown-toggle" data-toggle="dropdown" title="Font Style"><i class="icon-font" style="width:19px;height:19px;"></i></button>		                      
							    <ul class="dropdown-menu" role="menu" aria-labelledby="font-family-X">
								    <li><a tabindex="-1" href="#" onclick="setFont('Arial');" class="Arial">Arial</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Helvetica');" class="Helvetica">Helvetica</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Myriad Pro');" class="MyriadPro">Myriad Pro</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Delicious');" class="Delicious">Delicious</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Verdana');" class="Verdana">Verdana</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Georgia');" class="Georgia">Georgia</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Courier');" class="Courier">Courier</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Comic Sans MS');" class="ComicSansMS">Comic Sans MS</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Impact');" class="Impact">Impact</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Monaco');" class="Monaco">Monaco</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Optima');" class="Optima">Optima</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Hoefler Text');" class="Hoefler Text">Hoefler Text</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Plaster');" class="Plaster">Plaster</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Engagement');" class="Engagement">Engagement</a></li>
				                </ul>
							    <button id="text-bold" class="btn" data-original-title="Bold"><img src="img/font_bold.png" height="" width=""></button>
							    <button id="text-italic" class="btn" data-original-title="Italic"><img src="img/font_italic.png" height="" width=""></button>
							    <button id="text-strike" class="btn" title="Strike" style=""><img src="img/font_strikethrough.png" height="" width=""></button>
							 	<button id="text-underline" class="btn" title="Underline" style=""><img src="img/font_underline.png"></button>
							 	<a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Color"><input type="hidden" id="text-fontcolor" class="color-picker" size="7" value="#000000"></a>
						 		<a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Border Color"><input type="hidden" id="text-strokecolor" class="color-picker" size="7" value="#000000"></a>
								  <!--- Background <input type="hidden" id="text-bgcolor" class="color-picker" size="7" value="#ffffff"> --->
							</div>							  
							<div class="pull-right" align="" id="imageeditor" style="display:none;">					  
							  <div class="btn-group">										      
							      <button class="btn" id="bring-to-front" title="Bring to Front"><i class="icon-fast-backward rotate" style="height:19px;"></i></button>
							      <button class="btn" id="send-to-back" title="Send to Back"><i class="icon-fast-forward rotate" style="height:19px;"></i></button>							      
							      <button id="remove-selected" class="btn" title="Delete selected item"><i class="icon-trash" style="height:19px;"></i></button>
							  </div>
							</div>			  
						</div>												
					</div>					  		
				<!--	EDITOR      -->	
				<div style="background-color: #ffffff;position: relative; top:20px;height:560px;">				
					<div id="phoneDiv" class="page" style="width: 282px; height: 590px; position: relative;left:25%; background-color: rgb(255, 255, 255);">
						<img id="phone" src="<?php echo $img?>"></img>
						<div id="drawingArea" style="position: absolute;top:70px;left:30px;z-index: 10;width: 230px; height:450px;">					
							<canvas id="tcanvas" width=230 height="450" class="hover" style="-webkit-user-select: none;"></canvas>
						</div>
					</div>		
				</div>					
				<!--	/EDITOR		-->
		    </div>
		
		    <div class="span3">
		      <div class="well">
             <form method="post">                  
                    <button id="b" name="done" class="btn btn-hover">Done</button>&nbsp&nbsp&nbsp&nbsp
                        <input type="file" name="up" id="a"  onchange="readURL(this);"  />
         </form>
                    
                </div>
			</div>
			
		</div>
		</section>
	</div>
      <?php
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['done']))
    {
        if(!isset($_SESSION["active_user"]))
        {
            
            echo "<script>alert('Log in to shop')</script>";
            
        }
        else{
        
        echo "<script>alert('Your changes have been saved successfully')</script>";
        echo "<script>alert('Your can go back and add to cart')</script>";
        $i=1;
        }
    }
     ?>
    <!-- /container -->
    
<!-- Footer ================================================== -->
      
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->    
    <script src="js/bootstrap.min.js"></script>    
    
  </body>
</html>