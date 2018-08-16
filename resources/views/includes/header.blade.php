<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Lumbini Medical College And Teaching Hospital</title>

 <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
  <script src="{{URL::to('/')}}/templateEditor/ckeditor/ckeditor.js"></script> 
  <!-- Bootstrap CSS -->
  <link href="{{URL::to('/')}}/backend/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{URL::to('/')}}/backend/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{URL::to('/')}}/backend/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="{{URL::to('/')}}/backend/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{URL::to('/')}}/backend/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet"/>
  <link href="{{URL::to('/')}}/backend/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet"/>
  <!-- easy pie chart-->
  <link href="{{URL::to('/')}}/backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{URL::to('/')}}/backend/css/owl.carousel.css" type="text/css">
  <link href="{{URL::to('/')}}/backend/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{URL::to('/')}}/backend/css/fullcalendar.css">
  <link href="{{URL::to('/')}}/backend/css/widgets.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/backend/css/style.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/backend/css/style-responsive.css" rel="stylesheet" />
  <link href="{{URL::to('/')}}/backend/css/xcharts.min.css" rel=" stylesheet">
  <link href="{{URL::to('/')}}/backend/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">LMC<span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="{{URL::to('/')}}/backend/img/avatar1_small.jpg">
                            </span>
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
           
              <li>
                <a href="{{URL::to('/logout')}}"><i class="icon_key_alt"></i> Log Out</a>
              </li>
             
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
     

