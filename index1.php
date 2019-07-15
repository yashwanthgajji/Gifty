<?php
error_reporting(0);
session_start();
$login_flag=$_GET["login_flag"];
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
</head>
<body>

<div class="container">
 <?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
            include 'user.php';
            $user = new User();
            $conditions['where'] = array(
                'id' => $sessData['userID'],
            );
            $conditions['return_type'] = 'single';
            $userData = $user->getRows($conditions);
            $_SESSION["active_user"]=$userData['id'];
            $_SESSION["active_user_name"]=$userData['first_name'];
            header("Location:index.php?name=1");
    ?>
    <div id="account1" style="background-color:#E6E6FA;">
    <h4>Welcome <?php echo $userData['first_name']; ?>!</h4>
    <h6><a href="userAccount.php?logoutSubmit=1" class="logout">Logout</a></h6>
    
	</div>
     
    <?php }else{ 
        unset($_SESSION['active_user']);
        unset($_SESSION['active_user_name']);
    if($login_flag==1)
    {
    header("Location:index.php");
    }
    ?>



  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="userAccount.php" method="post">
            <div class="form-group">

            <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
        </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" name="email" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <div class="send-button">
                <button type="submit"  name="loginSubmit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
            </div>
              
          </form>
        </div>
        <div class="modal-footer">
          <!--<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>-->
          <p>Not Registered? <a href="registration.php">Sign Up</a></p>
          
        </div>
      </div>
      
    </div>
  </div>
  <?php } ?> 
</div>
 
<script>
$(document).ready(function(){
    
        $("#myModal").modal();
    });

</script>

</body>
</html>
<?php include 'index.php';?>