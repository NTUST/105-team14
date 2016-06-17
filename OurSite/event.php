<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php require_once("connect.php"); session_start(); ?>
    <title>Event</title>	
	<!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
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

<body class="homepage">

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

    <!-- Page Content -->
    <?php $data = mysql_fetch_array(mysql_query("SELECT * FROM `active` WHERE `id`='" . $_GET["id"] . "'")) ?>
    <div class="container" style="font-family:MyFonts">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1 style="color: #333;font-family:MyFonts"><?php echo $data["name"]; ?></h1>

                <!-- Author -->
                <p>
                    <?php echo $data["host"]; ?>
                </p>
                <p class="lead">Introuduction</p>
                <p><?php echo $data["introduction"] . "..."; ?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="images\event\<?php echo $data["image"]; ?>" alt="">

                <hr>

                <!-- Post Content -->
                <p>日期:<?php echo $data["date"]; ?></p>
                <p>時間:<?php echo $data["time"]; ?></p>
                <p>地點:<?php echo $data["place"]; ?></p>
                <p>人數限制:<?php echo $data["amount"]; ?></p>
                <p>對象:<?php echo $data["participate"]; ?></p>
                <p>連結:<a href="<?php echo $data["link"]; ?>"><?php echo $data["name"]; ?></a></p>
                <p><?php echo "#" . $data["tag"]; ?></p>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    </div>
    
    <footer id="footer" class="midnight-blue">
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