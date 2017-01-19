
<!DOCTYPE html>
<style>
    body{
        background-image: url("/POS1/Sources/img/lgbg.jpg");
    }
    .form-control,span{
        width:50%;
        margin-left: 30%;
    }
    label{
        color:#e5e5e5;
        margin-left: 30%;
        
    }
    button,a{
         margin-left: 30%;
    }
    span{
        color:#f7ecb5;
        margin-left:30%;
    }
    .main{
         margin-left: 10%;
         margin-top:10%;
         width:50%;
    }
</style>
 <script src="/POS2/Sources/js/registerValidation.js" type="text/javascript"></script>
<html>
    <body >
    <div class="container">
    <div class="main">
        <form name="regForm" id="regForm" class="form" method="POST" action="/POS2/RegisterController/register"  >
       <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required="true">
    </div>
    <div class="form-group">
        <label for="email">Email:</label><span id='user-exist'></span>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="true">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required="true">
    </div>
     <div class="form-group">
      <label for="address">Address:</label>
      <input type="password" class="form-control" id="address" name="address" placeholder="Enter Address" required="true">
    </div>
    <div class="form-group">
           <label for="type">Type:</label><br>

            <label for="type">User:</label>
            <input type="radio" id="type" name="type" value="user" checked> 
            <label for="type">Admin:</label>
             <input type="radio" id="type" name="type" value="admin"> <br>
        </div>
      <button type="submit" class="btn btn-default" id="register">Sign Up</button><span id='user-reg'></span>
  </form>
    </div>
        
    </div>
    <!--method="POST" action="<?php echo base_url(); ?>index.php/Logedin/doLogin"-->
</body>
</html>


