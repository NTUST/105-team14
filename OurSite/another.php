<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php require_once("connect.php"); session_start(); ?>
    <title>Other Events</title>
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

<body class="homepage" style="padding-bottom: 0px">

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

   <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#333;">Other Events
                    <small></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Events Row -->
        <?php
        $sql = mysql_query("SELECT * FROM `active` WHERE `host`='another'");
        $count = 0;
        while ($data = mysql_fetch_array($sql))
        {
            if ($count == 0) echo "<div class='row'>";
            echo "<div class='col-md-4 portfolio-item'>";
            echo "<a href='event.php?id=" . $data["id"] . "'>";
            echo "<img class='img-responsive' src='images/event/" . $data["image"] . "' width='150px' >";
            echo "</a>";
            echo "<h3>";
            echo "<a href='event.php?id=" . $data["id"] . "'>" . $data["name"] . "</a>";
            echo "</h3>";
            echo "<p>" . $data["introduction"] . "...</p>";
            echo "</div>";
            if ($count == 2) echo "</div>";
            $count = ($count + 1) % 3;
        } 
        ?>
        <!--
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Event Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Event Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Event Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        -->
        <!-- /.row -->

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
            </div>
        </div>
        <!-- /.row -->
    </div>
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