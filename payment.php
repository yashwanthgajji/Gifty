 <?php 
 include 'nav.php' ; 
?> 
    <br><br><br><br><br><br><br><br><br>
 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.paymentWrap {
	padding: 50px;
}

.paymentWrap .paymentBtnGroup {
	max-width: 800px;
	margin: auto;
}

.paymentWrap .paymentBtnGroup .paymentMethod {
	padding: 40px;
	box-shadow: none;
	position: relative;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active {
	outline: none !important;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active .method {
	border-color: #4cd264;
	outline: none !important;
	box-shadow: 0px 3px 22px 0px #7b7b7b;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method {
	position: absolute;
	right: 3px;
	top: 3px;
	bottom: 3px;
	left: 3px;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	border: 2px solid transparent;
	transition: all 0.5s;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.visa {
	background-image: url("http://i.imgur.com/VkiM7PL.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.cod {
	background-image: url("http://www.dubaicake.com/image/home-img/cod.png");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.paytm {
	background-image: url("https://img.etimg.com/thumb/msid-57371266,width-300,imgsize-9448,resizemode-4/paytm-wallet-reaches-200-million-users.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.phonepe {
	background-image: url("http://mishoppe.in/wp-content/uploads/2017/12/PhonePe.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.netbanking {
	background-image: url("https://www.kannurjillabank.com/content/net%20banking.jpg");
}


.paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
	border-color: #4cd264;
	outline: none !important;
}
/* Padding - just for asthetics on Bootsnipp.com */
body { margin-top:20px;
left: 500px; }

/* CSS for Credit Card Payment form */
.box .panel-title {
    display: inline;
    font-weight: bold;
}
.box .form-control.error {
    border-color: red;
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
}
.box label.error {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.box .payment-errors {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.box label {
    display: block;
}
/* The old "center div vertically" hack */
.box .display-table {
    display: table;
}
.box .display-tr {
    display: table-row;
}
.box .display-td {
    display: table-cell;
    vertical-align: middle;
    width: 65%;
}
/* Just looks nicer */
.box .panel-heading img {
    min-width: 180px;
}
	</style>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$("#form1").hide();
         $("#form2").hide();
          $("#form3").hide();
          $("#form4").hide();
          $("#form5").hide();
    $("#card").click(function(){
        $("#form1").show();
         $("#form2").hide();
          $("#form3").hide();
           $("#form4").hide();
            $("#form5").hide();

    });
    $("#cod").click(function(){
        $("#form2").show();
         $("#form1").hide();
          $("#form3").hide();
           $("#form4").hide();
            $("#form5").hide();

    });
$("#paytm").click(function(){
        $("#form3").show();
         $("#form1").hide();
          $("#form2").hide();
           $("#form4").hide();
            $("#form5").hide();

    });
$("#phonepe").click(function(){
        $("#form4").show();
         $("#form1").hide();
          $("#form3").hide();
           $("#form2").hide();
            $("#form5").hide();

    });
$("#netbanking").click(function(){
        $("#form5").show();
         $("#form1").hide();
          $("#form3").hide();
           $("#form4").hide();
            $("#form2").hide();

    });



});
	
</script>

    
</head>
<body>

<div class="container">
	<div class="jumbotron">
	<div class="row">
		<div class="paymentCont">
						<div class="headingWrap">
								<h3 class="headingTop text-center" style="color: red">Select Your Payment Method</h3>	
						</div>
						<div class="paymentWrap">
							<div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
					            <label class="btn paymentMethod active">
					            	<div class="method visa" id="card"></div>
                                                        <input type="radio" name="options" checked/> 
					            </label>
					            <label class="btn paymentMethod">
					            	<div class="method cod" id="cod"></div>
                                                        <input type="radio" name="options"/> 
					            </label>
					            <label class="btn paymentMethod">
				            		<div class="method paytm" id="paytm"></div>
                                                        <input type="radio" name="options"/>
					            </label>
					             <label class="btn paymentMethod">
				             		<div class="method phonepe" id="phonepe"></div>
					                <input type="radio" name="options"> 
					            </label>
					            <label class="btn paymentMethod">
				            		<div class="method netbanking" id="netbanking"></div>
					                <input type="radio" name="options"> 
					            </label>
					         
					        </div>

						</div>
	<div class="container" id="form1">
    <div class="row" >
             <div class="col-xs-12 col-md-3" style="font-size: 12pt; line-height: 2em;">
            
            </div>
        <div class="col-xs-12 col-md-6" >
            <div class="panel panel-default box" >
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="https://www.feegenie.com/blog/wp-content/uploads/2016/10/BLog-19th-Oct-1024x341.png" style="height: 50px;width: 150px">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel"  class="form-control" name="cardNumber" placeholder="Valid Card Number" required='required'/>
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input  type="tel"   class="form-control"   name="cardExpiry"  placeholder="MM / YY" required/>
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input  type="tel" class="form-control"  name="cardCVC" placeholder="CVC" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">Card Holder Name</label>
                                    <input type="text" class="form-control" name="couponCode" />
                                </div>
                            </div>                        
                        </div>
                        </form>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="subscribe btn btn-success btn-lg btn-block" tid="btnpay5" ype="button">Proceed To Pay</button>
                            </div>
                        </div>
                    
                </div>
            </div> 
            <div class="col-xs-12 col-md-3" style="font-size: 12pt; line-height: 2em;">
            </div>
            </div>
            </div>
            </div>
            <div class="container" id="form2" >
			    <div class="row" >
			             <div class="col-xs-12 col-md-3" style="font-size: 12pt; line-height: 2em;">
			            </div>
			        <div class="col-xs-12 col-md-6" >
			            <div class="panel panel-default box">
			                <div class="panel-heading display-table" >
			                    <div class="row display-tr" >
			                        <h3 class="panel-title display-td" >Payment Details</h3>
			                        <div class="display-td" >                            
			                            <img class="img-responsive pull-right" src="https://www.feegenie.com/blog/wp-content/uploads/2016/10/BLog-19th-Oct-1024x341.png" style="height: 50px;width: 150px">
			                        </div>
			                    </div>                    
			                </div>
			                <div class="panel-body">
			                    <form role="form" id="payment-form" method="POST" action="">
			                        <div class="row">
			                            <div class="col-xs-7 col-md-7">
			                                <div class="form-group">
			                                	<div class="input-group">
			                                		<label for="cardNumber">PHONE NUMBER</label>
			                                        <input type="tel" class="form-control" name="Phone number" placeholder="Valid Phone Number"  required autofocus  />
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="col-xs-5 col-md-5 pull-right">
			                                <div class="form-group">
			                                	<div >
			                                    	<img src="https://www.payone.com/fileadmin/_migrated/pics/header-cashondelivery-eng.png" style="height: 80px;width: 150px">
			                                    </div>
			                                  
			                                </div>
			                            </div>
			                        </div>
			                        <div class="row">
			                            <div class="col-xs-12">
			                                <div class="form-group">
			                                    <label for="couponCode">COUPON CODE</label>
			                                    <input type="text" class="form-control" name="couponCode" />
			                                </div>
			                            </div>                        
			                        </div>
                                                </form>
			                        <div class="row">
			                            <div class="col-xs-12">
			                                <button class="subscribe btn btn-success btn-lg btn-block" id="btnpay4" type="button">Proceed To Pay</button>
			                            </div>
			                        </div>
			                    
			                </div>
			            </div> 
			            <div class="col-xs-12 col-md-3" style="font-size: 12pt; line-height: 2em;"></div>
			            </div>
			            </div>  
			            </div>
			            <div class="container" id="form3" >
			    <div class="row" >
			             <div class="col-xs-12 col-md-3" style="font-size: 12pt; line-height: 2em;">
			            </div>
			        <div class="col-xs-12 col-md-6" >
			            <div class="panel panel-default box">
			                <div class="panel-heading display-table" >
			                    <div class="row display-tr" >
			                        <h3 class="panel-title display-td" >Payment Details</h3>
			                        <div class="display-td" >                            
			                            <img class="img-responsive pull-right" src="https://www.feegenie.com/blog/wp-content/uploads/2016/10/BLog-19th-Oct-1024x341.png" style="height: 50px;width: 150px">
			                        </div>
			                    </div>                    
			                </div>
			                <div class="panel-body">
			                    <form role="form" id="payment-form" method="POST" action="">
			                        <div class="row">
			                            <div class="col-xs-7 col-md-7">
			                                <div class="form-group">
			                                	<div class="input-group">
			                                		<label for="cardNumber">PHONE NUMBER</label>
			                                        <input type="tel" class="form-control" name="Phone number" placeholder="Valid Paytm Number"  required autofocus  />
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="col-xs-5 col-md-5 pull-right">
			                                <div class="form-group">
			                                	<div >
			                                    	<img src="https://s3.envato.com/files/214251340/590x300.jpg" style="height: 80px;width: 150px">
			                                    </div>
			                                  
			                                </div>
			                            </div>
			                        </div>
			                        <div class="row">
			                            <div class="col-xs-12">
			                                <div class="form-group">
			                                    <label for="couponCode">COUPON CODE</label>
			                                    <input type="text" class="form-control" name="couponCode" />
			                                </div>
			                            </div>                        
			                        </div>
                                                </form>
			                        <div class="row">
			                            <div class="col-xs-12">
			                                <button class="subscribe btn btn-success btn-lg btn-block" id="btnpay3" type="button">Proceed To Pay</button>
			                            </div>
			                        </div>
			                    
			                </div>
			            </div> 
			            <div class="col-xs-12 col-md-3" style="font-size: 12pt; line-height: 2em;"></div>
			            </div>
			            </div>  
			            </div>
			            <div class="container" id="form4" >
			    <div class="row" >
			             <div class="col-xs-12 col-md-3" style="font-size: 12pt; line-height: 2em;">
			            </div>
			        <div class="col-xs-12 col-md-6" >
			            <div class="panel panel-default box">
			                <div class="panel-heading display-table" >
			                    <div class="row display-tr" >
			                        <h3 class="panel-title display-td" >Payment Details</h3>
			                        <div class="display-td" >                            
			                            <img class="img-responsive pull-right" src="https://www.feegenie.com/blog/wp-content/uploads/2016/10/BLog-19th-Oct-1024x341.png" style="height: 50px;width: 150px">
			                        </div>
			                    </div>                    
			                </div>
			                <div class="panel-body">
			                    <form role="form" id="payment-form" method="POST" action="">
			                        <div class="row">
			                            <div class="col-xs-7 col-md-7">
			                                <div class="form-group">
			                                	<div class="input-group">
			                                		<label for="cardNumber">UPI Address</label>
			                                        <input type="tel" class="form-control" name="Phone pe number" placeholder="Enter valid UPI"  required autofocus  />
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="col-xs-5 col-md-5 pull-right">
			                                <div class="form-group">
			                                	<div >
			                                    	<img src="https://i0.wp.com/www.3ghackerz.com/wp-content/uploads/2017/04/flipkart-phonepe-offer.png?ssl=1" style="height: 80px;width: 150px">
			                                    </div>
			                                  
			                                </div>
			                            </div>
			                        </div>
			                        <div class="row">
			                            <div class="col-xs-12">
			                                <div class="form-group">
			                                    <label for="couponCode">COUPON CODE</label>
			                                    <input type="text" class="form-control" name="couponCode" />
			                                </div>
			                            </div>                        
			                        </div>
			                        <div class="row">
			                            <div class="col-xs-12">
			                                <button class="subscribe btn btn-success btn-lg btn-block" id="btnpay2" type="button">Proceed To Pay</button>
			                            </div>
			                        </div>
			                    </form>
			                </div>
			            </div> 
			            <div class="col-xs-12 col-md-3" style="font-size: 12pt; line-height: 2em;"></div>
			            </div>
			            </div>  
			            </div>
			            <div class="container" id="form5">
    <div class="row" >
             <div class="col-xs-12 col-md-3" style="font-size: 12pt; line-height: 2em;">
            </div>
        <div class="col-xs-12 col-md-6" >
            <div class="panel panel-default box" >
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="https://www.feegenie.com/blog/wp-content/uploads/2016/10/BLog-19th-Oct-1024x341.png" style="height: 50px;width: 150px">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input  type="tel" class="form-control" name="cardNumber"  placeholder="Valid Card Number" />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input type="tel"  class="form-control"  name="cardExpiry" placeholder="MM / YY"
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input  type="tel"  class="form-control" name="cardCVC" placeholder="CVC"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">ENTER BANK NAME</label>
                                    <input type="text" class="form-control" name="couponCode" placeholder="BANK NAME" />
                                </div>
                            </div>                        
                        </div>
                        </form>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="subscribe btn btn-success btn-lg btn-block" id="btnpay1"  type="button">Proceed To Pay</button>
                            </div>
                        </div>
                    
                </div>
            </div> 
            <div class="col-xs-12 col-md-3" style="font-size: 12pt; line-height: 2em;">
            </div>
            </div>
            </div>
            </div>                                                                                 
					<div class="footerNavWrap clearfix">
							<div class="btn btn-success btn-fyi" id="home" style="width: 200px"><span class="glyphicon glyphicon-chevron-left"></span> CONTINUE SHOPPING</div>
					</div>
		
	</div>
</div>
</div>
    <script>
$(document).ready(function(){
    $("#btnpay1").click(function(){
        alert("Fill  all the fiels or Details filled are not correct. Recheck!!");
    });
});
$(document).ready(function(){
    $("#btnpay2").click(function(){
        alert("Fill  all the fiels or Details filled are not correct. Recheck!!");
    });
});
$(document).ready(function(){
    $("#btnpay3").click(function(){
        alert("Fill  all the fiels or Details filled are not correct. Recheck!!");
    });
});
$(document).ready(function(){
    $("#btnpay4").click(function(){
        alert("Fill  all the fiels or Details filled are not correct. Recheck!!");
    });
});
$(document).ready(function(){
    $("#btnpay5").click(function(){
        alert("Fill  all the fiels or Details filled are not correct. Recheck!!");
    });
});
$(document).ready(function(){
    $("#home").click(function(){
        window.location="index.php";
    });
});



    </script>
</body>
</html>
<?php include 'footer.php'?>