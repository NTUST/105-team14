<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php require_once("connect.php"); session_start(); ?>
    <title><?php if($_GET["method"]=="login") echo "Login"; else echo "Register";?></title>
    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon-20160604120352181.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<?php
if ($_SESSION["login"])
{
    session_unset("login");
    echo "<script>alert('log out!');";
    echo "location.href='home.php';</script>";
}
?>
<body class="homepage" style="padding-top: 0px">
    
    <!-- Navigation -->
    <header id="header">
        <div class="top-bar">
            <div class="container">
                 <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/anson.wu.359?fref=ts"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
    </header><!--/header-->

    <header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.php"><img src="images/logo.png" alt="logo" style="width:100px"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-left">
                    <ul class="nav navbar-nav">
                        <li><a href="about.php">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="club.php">Club</a></li>
                                <li><a href="another.php">Another Type</a></li>
                            </ul>
                        </li>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="loginAndRegister.php?method=login"><?php if($_SESSION["login"]) echo "Logout"; else echo "Login"; ?></a></li>
                        <?php 
                        if(!$_SESSION["login"]) 
                        { 
                        ?>
                            <li><a href="loginAndRegister.php?method=register">Register</a></li></ul>
                        <?php 
                        }
                        else
                        {
                        ?>
                            <li><a href="eventEdit.php">New Event</a></li></ul>
                        <?php
                        }
                        ?>                   
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
    
    <!--Contain-->
    <section id="contact-page">
        <div class="container">
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <?php if ($_GET["method"] == "login") { ?>
                    <form class="contact-form"  method="post" action="login_check.php">
                        <div class="col-sm-5">
                            <div class="center">        
                                <h2>Login</h2>
                            </div> 
                            <div class="form-group">
                                <label>User *</label>
                                <input type="text" name="user" class="form-control" value="<?php echo $_GET["user"]; ?>">
                            </div>
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div><input type="submit" name="sure" value="submit" class="btn btn-primary btn-lg"></div>
                        </div>
                    </form>
                <?php } ?>
                <?php if ($_GET["method"] == "register") { ?>
                    <form class="contact-form"  method="post" action="register_check.php">
                        <div class="col-sm-5">
                            <div class="center">        
                                <h2>Register</h2>
                            </div> 
                            <div class="form-group">
                                <label>User *</label>
                                <input type="text" name="user" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div><input type="submit" name="sure" value="submit" class="btn btn-primary btn-lg"></div>
                        </div>
                    </form> 
                <?php } ?>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
    <!--ContainEnd-->
    </div>
    <footer id="footer" class="midnight-blue" style="position:fixed;bottom:0;width:100%;">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-lg-6">
                        <p>Copyright &copy; This Website 2016</p>
                    </div>
                    <div class="col-lg-6">
                        &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>

</body>
</html>