<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php require_once("connect.php"); session_start(); ?>
    <title>About Us</title>
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

    <!-- Header Carousel -->
    <section id="about-us" style="font-family:MyFonts">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="color:#333;">Our Team
                        <small></small>
                    </h1>
                </div>
            </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/about/Wu.jpg" alt="">
            </div>
            <div class="col-md-6">
                <br>
                <h2 style="font-family:MyFonts">
                    巫雁量
                </h2>
                <pre>
                    神 概念發想人

                    芸芸眾生需要一個領導
                    而他總是像神一般的給予下一步的意見
                    據說還有兼前端工程師
                    我是不知道啦.....
                </pre>
            </div>
        </div>
        <!-- /.row -->

        <br>
        <br>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6">
                <br>
                <h2 style="font-family:MyFonts;text-align:">
                    林益弛
                </h2>
                <pre>
                    前後端整合 後端總工頭

                    你知道什麼叫凱瑞嗎
                    就是carry
                    也是他的中間名
                    沒錯
                    他是 林‧凱瑞‧益弛
                </pre>
            </div>
            <div class="col-md-6">
                    <img class="img-responsive" src="images/about/Lin.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <br>
        <br>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6">
                    <img class="img-responsive" src="images/about/Su.jpg" alt="">
            </div>
            <div class="col-md-6">
                <br>
                <h2 style="font-family:MyFonts">
                    蘇新元
                </h2>
                <pre>
                    後端見習生

                    "我做了註冊"
                    "跟改一些像今天下午改的那種小東西"
                    他著麼說
                    謙虛地說
                </pre>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <br>
                <h2 style="font-family:MyFonts">
                    張瑞芸
                </h2>
                <pre>
                    PPT製作達人 大概是對外部門

                    我沒辦法說的更多
                    若想更了解
                    自己去找
                    加油 加油 再加油
                </pre>
            </div>
            <div class="col-md-6">
                    <img class="img-responsive" src="images/about/Chang.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <br>
        <br>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6">
                    <img class="img-responsive" src="images/about/Sun.jpg" alt="">
            </div>
            <div class="col-md-6">
                <br>
                <h2 style="font-family:MyFonts">
                    李尚峰
                </h2>
                <pre>
                    後端工具人 連接資料庫

                    依傍著凱瑞
                    而存活下來的工具人之一
                    受凱瑞指導而工作的工具人
                    自稱小廢物
                </pre>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <br>
                <h2 style="font-family:MyFonts">
                    顧唯耀
                </h2>
                <pre>
                    前端工程師

                    底層人員
                    因為在底層
                    所以不知道其他人會不會發現這裡寫了些什麼
                    等期末想回家
                </pre>
            </div>
            <div class="col-md-6">
                    <img class="img-responsive" src="images/about/Gu.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->
        </div>
    </section>


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