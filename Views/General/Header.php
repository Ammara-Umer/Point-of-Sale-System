
<html>
    <header>
   
<!-- Bootstrap Core CSS -->
    <link href="/POS2/Sources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
   <link href="/POS2/Sources/css/thumbnail-gallery.css" rel="stylesheet">
   <script src="/POS2/Sources/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/POS2/Sources/js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.js" type="text/javascript"></script>
    
    </header>
    <body>
        <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="/POS2/AdminController/index">Services</a>
                    </li>
                     <?PHP if($_SESSION['name']==null){?>
                    <li class="pull-right">
                        <a href="/POS2/LoginController/index">Login</a>
                    </li>
                 <?php  ; }
                 else {;?>
                    
                         <li>
                         
                        <a href=""><?php echo "Welcome admin ".$_SESSION['name'];?></a>
                    </li>
                         
                   
                    <li class="pull-right">
                         
                        <a href="/POS2/LoginController/logOut">Logout</a>
                    </li>
                    
                     <?php  ; }?>
                    <li class="pull-right">
                         
                        <a href="/POS2/RegController/index">Sign Up</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</body>
</html>

    </body>
</html>