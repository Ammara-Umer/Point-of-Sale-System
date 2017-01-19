
<html>
    <header>
        <?php include_once 'SourceFile.php'; ?>
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
                        <a href="#">Services</a>
                    </li>
                     <?PHP if($_SESSION['name']==null){?>
                    <li class="pull-right">
                        <a href="/POS/LoginController/logIn">Login</a>
                    </li>
                 <?php  ; }
                 else {;?>
                    
                         <li>
                         
                        <a href=""><?php echo "Welcome admin ".$_SESSION['name'];?></a>
                    </li>
                         
                   
                    <li class="pull-right">
                         
                        <a href="POS/LoginController/logOut">Logout</a>
                    </li>
                    
                     <?php  ; }?>
                    <li class="pull-right">
                         
                        <a href="/POS/RegisterController/register">Sign Up</a>
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