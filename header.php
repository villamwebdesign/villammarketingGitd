<!DOCTYPE html>
<html lang="<?php echo $_COOKIE['lang']; ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="<?php echo $lang['META_DESC']; ?>">
    <meta name="author" content="Villám marketing Agency">
    <title><?php echo $lang['MAIN_TITLE']; ?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link href="assets/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/pure.css" type="text/css">
    <link rel="stylesheet" href="assets/css/lightslider.css" type="text/css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=Poiret+One&subset=latin-ext' rel='stylesheet' type='text/css'><link rel="stylesheet" href="font-awesome/assets/css/font-awesome.min.css" type="text/css"><link rel="stylesheet" href="assets/css/animate.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.cookiebar.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/pace.css" />
    <!-- jQuery -->
  <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="assets/js/pace.min.js"></script>
    <script src="assets/js/creative.js"></script>
    <script src="assets/js/lightslider.js"></script>
    <script src="assets/js/wow.min.js"></script>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.assets/js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
    window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', 'c67b78fccfb1458a77e0de1875c4f52ba5eff030');
</script></head>

<body>
  <div id="noty-holder"></div><!-- HERE IS WHERE THE NOTY WILL APPEAR-->

<script>new WOW().init();</script>
<!-- FULLSCREEN MODAL CODE (.fullscreen) -->
    <div class="modal fade fullscreen" id="menuModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.php#weboldal-keszites-olcson" data-toggle="modal" data-target="#menuModal"><?php echo $lang['MENU_1']; ?></a>
                    </li>
                    <!--<li>
                        <a class="arak-link" href="index.php?p=weboldal-keszites-arak-budapest-esztergom"><?php echo $lang['MENU_2']; ?></a>
                    </li>-->
                    <!--<li>
                        <a class="page-scroll" href="index.php?p=mobilbarat-weboldal-keszites"><?php echo $lang['MENU_3']; ?></a>
                    </li>-->
                    <li>
                        <a class="page-scroll" href="#webaruhaz-keszites-szolgaltatasok" data-toggle="modal" data-target="#menuModal"><?php echo $lang['MENU_4'];?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#weblap-keszites-kapcsolat" data-toggle="modal" data-target="#menuModal"><?php echo $lang['MENU_5']; ?></a>
                    </li>
                    <li>
                        <a href="./hosting.php"><?php echo $lang['MENU_6']; ?></a>
                    </li>
                </ul>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.fullscreen -->

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                    <span class="sr-only">Weboldal készítés olcsón</span>
                <a class="navbar-brand page-scroll" href="<?php echo "https://" . $_SERVER['SERVER_NAME'];?>
" style="font-size:<?php
if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod'))
 {echo "15px";}?> "> <?php echo $lang['MENU_TITLE']; ?></a>

    <button type="button" class="btn btn-primary vm-navbar navbar-toggle collapsed" data-toggle="modal" data-target="#menuModal"></button>
            </div><!--</nav>-->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-navigation">

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

</div>
