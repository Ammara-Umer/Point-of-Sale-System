<?php

?>
<!DOCTYPE html>
<style>
    body{
        //background-image: url("<?php echo $GLOBALS['path']?>/POS1/Sources/img/lgbg.jpg");
    }
    .form-control{
        width:50%;
        margin-left: 30%;
    }
    label{
        color:#e5e5e5;
        margin-left: 30%;
        
    }
    button{
         margin-left: 30%;
    }
    .forgetPwd{
         margin-top:5%;
         margin-left: 25%;
    }
    .main{
         margin-left: 10%;
         margin-top:10%;
       
         width:50%;
    }
</style>
<html>
    <body >
    <div class="container">
    <div class="main">
        <form name="loginForm" id="loginForm" class="form" method="POST" action="/POS2/LoginController/Login">

     <div class="form-group">
         <label for="email">Email:</label><span id='user-exist'></span>
         <input type="email" class="form-control" id="mail" name="email" placeholder="Enter email" required="true">
     </div>
      <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required="true">
      </div>
     <div class="form-group">
         <label for="type">Type:</label><br>
         
          <label for="type">User:</label>
          <input type="radio" id="type" name="type" value="User" checked> 
          <label for="type">Admin:</label>
           <input type="radio" id="type" name="type" value="Admin"> <br>
      </div>
             
    <button type="submit" class="btn btn-default" id="login" name='login'>Login</button>
    </form>
    </div>
        <a class="forgetPwd" href="<?php echo $GLOBALS['path']?>/POS1/LoginController/ForgetPassword">Forget password </a>
    </div>
        
    <!--method="POST" action="<?php echo base_url(); ?>index.php/Logedin/doLogin"-->
</body>
</html>