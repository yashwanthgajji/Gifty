<?php
include 'nav.php';
include 'db.php';
$subtotal=$_GET["st"];
$avg_d=$_GET["ad"];
$pay=$_GET["p"];
$count=$_GET["c"];
$cid=$_GET["cid"];
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
  input{
      border: none;
  }
  .error{
  color:red;
  font-size:12px;
}

  .f{
background-color: transparent; 
border-style: solid; 
border-width: 0px 0px 2px 0px; 
border-color: #36688D;
width:230px;
height:32px;
padding:5px;
margin:10px;
font-size: 14px;
color: transparent;
text-shadow: 0 0 0 gray;
}
input:focus {
  box-shadow: 0 0 5px rgba(81, 203, 238, 1);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
}
#form_details{
    font-size:10px;
    line-height: 1;
}
  </style>
  <script>
  var b=0;
  var a=0;
  var c=0;
    function check(){
          var p=document.getElementById('pin').value;
          var h=document.getElementById('hno').value;
          var m=document.getElementById('mobile').value;
          var l=document.getElementById('locality').value;
          var city=document.getElementById('city').value;
          var s=document.getElementById('state').value;
          var pc=/^[0-9]{6}$/;
          if(p==""){
              alert("Enter your pin");
          }
          else if(!p.match(pc)){
              alert("Entered a valid 6 digit pin number");
          }
          else{
              c=1;
              if(h=="")
              {
                 alert("enter your house number"); 
              }
              else{
                    c=2;
                    if(l=="")
                    {
                    alert("enter your locality");
                    }
                    else{
                      c=3;
                      if(city=="")
                            {
                            alert("enter your city");
                            }
                        else{
                            c=4;
                            if(s=="")
                            {
                            alert("enter your state");
                            }
                      else{
                            c=5;
                            var mc=/^[0-9]{10,15}$/;
                            if(m=="")
                            {
                                alert("Enter your mobile number");
                            }
                            else if(!m.match(mc))
                            {
                            alert("Either a valid 10 digit mobile number");
                            }
                            else{
                               c=6;
                                }
                            }
                        }
                    }
                }
             }       
          
       
          
              if(c==6){
          pin=document.getElementById("pin").value;
          hno=document.getElementById("hno").value;
          locality=document.getElementById("locality").value;
          city=document.getElementById("city").value;
          state=document.getElementById("state").value;
          mobile=document.getElementById("mobile").value;
          
          alert("SUCCESS!! Your shipping address is stored successefully");
          document.getElementById("add_form").style.display="none";
          document.getElementById("submit").style.display="none";
          
          document.getElementById("again_btn").style.display="block";
          document.getElementById("pind").innerHTML=pin;
          document.getElementById("hnod").innerHTML=hno+",";
          document.getElementById("localityd").innerHTML=locality+",";
          document.getElementById("cityd").innerHTML=city+",";
          document.getElementById("stated").innerHTML=state+",";
          document.getElementById("mobiled").innerHTML=mobile+",";
          document.getElementById("form_details").style.display="block";
          document.getElementById("form_details1").style.display="block";
      }
  }
  function again(){
      document.getElementById("add_form").style.display="block";
      document.getElementById("submit").style.display="block";
  }
  function finalalert()
  {
      if(c==6){
        window.location="payment.php";
        }
    else{
     alert('Enter your shipping address to proceed');
    }
  }
   </script>
</head>
<body>
 

    <br><br><br><br><br><br><br><br>
    <div class='container-fluid'>
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="container-fluid">
                    <div class="well">
                        <div class="jumbotron" id="add_form">
                            <center>
                        <form method="post">  
                            <h3 style="color:teal"><b>Add your address</b></h3>
                            <input type="text" class="f" placeholder="Your Pin here" name="pin" id="pin" value=""  required/>
				<br>
				
                                <input type="text" class="f" placeholder="Your House.no" id="hno" value="" required/>
				<br>
				
                                <input type="text" class="f" placeholder="Your Locality/Town" id="locality" value="" required/>
				<br>
				
                                <input type="text" class="f" placeholder="Your City/District" id="city" value="" required/>
				<br>
				
                                <input type="text" class="f" placeholder="Your State" id="state" value="" required/>
				<br>
				
                                <input type="text" class="f" placeholder="Your Mobile Number" id="mobile"  value="" required/>
				<br>
				
                                
                                </form>
                        
                        <input type="button" class="btn btn-hover btn-warning" onclick="check()" name="submit" id="submit" value="Submit" style="width:90px;height:35px;float:center;"/>
                        <br>
                        <br>
                            </center>
                        </div>
                        
                <div id="form_details" style="display:none;font-size:14px;">        
                <div class="jumbotron">
                    <h3 style="color:teal;"><b>Saved Address</b></h4>
                            
                            <p id="hnod" style="font-size:14px;"></p>
                            <p id="localityd" style="font-size:14px;"></p>
                            <p id="cityd" style="font-size:14px;"></p>
                            <p id="stated" style="font-size:14px;"></p>
                            <p id="mobiled" style="font-size:14px;"></p>
                            <p id="pind" style="font-size:14px;"></p>
                        </div>
                        </div>
                    <div id="form_details1" style="display:none;">    
                        <div class="jumbotron">
                        
                            <h4>Add new address</h4>
                            <button onclick="again()" class="btn btn-hover btn-default" id="again_btn" style="display:none;">+</button>
                    </div>
                    </div>
                </div>
           </div>
                    </div>
            <div class="col-md-6">
                <div class="well">
                    <div class="alert alert-success">
                        <h4>Standard Delievery</h4>
                        <h5>Free</h5>
                    </div>
                    <div class="jumbotron">
                    <div class="row">
                        <div class="col-sm-12 col-md-10 col-md-offset-1">
                            <div class="table-responsive">
                            <table class="table">
                                    <tr>
                                        <td><h5>Subtotal</h5></td>
                                        <td class="text-right"><h5><strong>&#8377 <?php echo $subtotal?></strong></h5></td>
                                    </tr>
                                    <tr>
                                        <td><h5>shipping</h5></td>
                                        <td class="text-right" style="color: green"><h5><strong>Free</strong></h5></td>
                                    </tr>
                                    <tr>
                                        <td><h5>Discount</h5></td>
                                        <td class="text-right"><h5><strong><?php echo $avg_d ?>%</strong></h5></td>
                                    </tr>
                                    <tr>
                                        <td><h4>Amount Payable</h4></td>
                                        <td class="text-right" style="color: red"><h4><strong>&#8377 <?php echo $pay?></strong></h4></td>
                                    </tr>
                                    <tr>

                                        <td>
                                                <center>
                                                 <button  name="proceed" class="btn btn-warning" value="proceed" onclick="finalalert()" style="width:90px;">
                                                Proceed 
                                                </button>
                                                 </center>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
<?php 
/*if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["proceed"])){
    $a=$_POST["hnof"];
    $b=$_POST["localityf"];
    $c=$_POST["cityf"];
    $d=$_POST["statef"];
    $e=$_POST["pinf"];
    $f=$_POST["mobilef"];
   $address=$a.",".$b.",".$c.",".$d.",".$e.",".$f;
   $sql1="insert into orders(cartId,del_add,date,count,del_add1) values('$cid','$address',CURRENT_TIMESTAMP(),'$count','not filled')";
         
       
  if($a!="abc"){
     $check1=mysqli_query($connection,$sql1);
      
   }
   else{
        echo "<script>alert('Enter your shipping address to proceed')</script>";
   }
   
}
    */?>  
</body>
</html>
<?php include 'footer.php' ?>