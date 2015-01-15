
<html>
  <head>
    <title>GMT</title>
        
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link href="<?= base_url();?>/application/static/css/jquery.bxslider.css" rel="stylesheet" />

    <link type="text/css" href="<?= base_url();?>/application/static/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/static/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>application/static/css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?= base_url(); ?>application/static/css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?= base_url(); ?>application/static/css/home.css" type="text/css" media="all" />    
    <link rel="stylesheet" href="<?= base_url(); ?>application/static/css/slider.css" type="text/css" media="all" />
  </head>
  <body>
    <div class="container">
      <div style="margin-top: 1px; width: 970px; margin-bottom: 0px;">
      <div style=" float: left; margin-bottom: 0px;">
          <ul class="list-inline" style="margin-top: 5px; margin-bottom: 3px;">
            <li><a href=""><img src="/static/img/ar.jpeg" alt="" style="height: 15px; width: 20px;"></a> | <a href=""><img src="/static/img/en.jpeg" alt="" style="height: 15px; width: 20px"></a></li>
            <!-- <li><a href="register.html">Register</a> | <a href="login.html">Login</a></li> -->
          </ul>
        </div>
        <div style="float: right; margin-top: 2px; margin-bottom: 0px;">
          <!-- <ul class="list-inline"> -->
            <a href=""><img src="/static/img/twitter.png" alt="" style="height: 22px; margin-right: 1px;"></a>
            <a href=""><img src="/static/img/facebook.png" alt="" style="height: 22px; margin-left: 1px;"></a>

        </div>
        <div style="float: right; margin: 5px;">
          <a href="<?= base_url(); ?>contact" style="color: grey; padding-top: 20px;">Contact Us</a> | <a href="aboutus/" style="color: grey;">About Us</a>
        </div>
      <img src="<?= base_url(); ?>application/static/upload/banner/<?= $banner->image; ?>" alt="" style="width: 970px; height: 70px; margin-top: 0px;">
        <div style=" float: left; margin-bottom: 0px;">
          <ul class="list-inline" style="margin-top: 5px; margin-bottom: 3px;">
            <!-- <li><a href=""><img src="/static/img/ar.jpeg" alt="" style="height: 15px; width: 20px;" /></a> | <a href=""><img src="/static/img/en.jpeg" alt="" style="height: 15px; width: 20px" /></a></li> -->
            <!-- <li><a href="register.html">Register</a> | <a href="login.html">Login</a></li> -->
          </ul>
        </div>

        <div style="float: right; margin-top: 2px; margin-bottom: 0px;">
          <!-- <ul class="list-inline"> -->
            <a href=""><img src="<?= base_url();?>application/static/images/twitter.png" alt="" style="height: 22px; margin-right: 1px;" /></a>
            <a href=""><img src="<?= base_url();?>application/static/images/facebook.png" alt="" style="height: 22px; margin-left: 1px;" /></a>

        </div>
        <div style="float: right; margin: 5px;">
          <a href="/contact" style="color: grey; padding-top: 20px;">Contact Us</a> | <a href="aboutus/" style="color: grey;">About Us</a>
        </div>
      </div>

      
      
        <!-- <img src="/media/images/homepageBanner_tXhW26s.png" alt="" style="width: 970px; height: 70px; margin-top: 0px;" /> -->
      
      

      <nav class="navbar" role="navigation" style="background: -moz-linear-gradient(#00CCFF, #000066); background: -webkit-linear-gradient(#00CCFF, #000066); background: -o-linear-gradient(#00CCFF, #000066); background: linear-gradient(#00CCFF, #000066); margin: 1px 0px 3px 0px; border-color: #eee; border-width: 3px; height: 50px; padding: 2px 0px; width: 970px;">
        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="height: 60px;"> -->
          <ul class="nav navbb nav-justified">
            <li><a href="<?= base_url(); ?>" style="color: white; height: 41px; border-right: 1px groove #F0F0F0;">HOME</a></li>
            <li><a href="<?= base_url(); ?>flights" style="color: white; height: 41px; border-right: 1px groove white;">FLIGHT</a></li>
            <li><a href="<?= base_url(); ?>hotels" style="color: white; height: 41px; border-right: 1px groove white;">HOTEL</a></li>
            <li><a href="<?= base_url(); ?>cars" style="color: white; height: 41px; border-right: 1px groove white;">CARS</a></li>
            <li><a href="<?= base_url(); ?>holidays" style="color: white; height: 41px; border-right: 1px groove white;">HOLIDAYS</a></li>
            <li><a href="<?= base_url(); ?>contact" style="color: white; height: 41px; border-right: 1px groove white;">CONTACT US</a></li>
            <li><a href="<?= base_url(); ?>holidays" style="color: white; height: 41px; border-right: 1px groove white;">ABOUT US</a></li>
            <!-- <li class="dropdown">
              <a href="/holidays" class="dropdown-toggle" style="color: white; height: 41px; border-right: 1px groove white;">HOLIDAYS <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                
                <li><a href="/holiday/1">VISIT EGYPT</a></li>
                
                <li><a href="/holiday/2">INTERNATIONAL</a></li>
                
              </ul>
            </li> -->
            <!-- <li><a href="#" style="color: white;">CORPORATE</a></li> -->
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" style="color: white; height: 41px; border-right: 1px groove white;">CORPORATE <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Travel</a></li>
              </ul>
            </li> -->
            <!-- <li><a href="/mice" style="color: white; height: 41px; border-right: 1px groove white;">M.I.C.E.</a></li> -->
            <!-- <li><a href="#" style="color: white;">CONTACT</a></li> -->
            <!-- <li class="dropdown">
              <a href="<?= base_url(); ?>contact" class="dropdown-toggle" style="color: white; height: 41px;">CONTACT <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/contact">Contact Us</a></li>
                <li><a href="/aboutus">About Us</a></li>
                <li><a href="/insurance">Insurance</a></li>
                <li><a href="/terms">Terms & Conditions</a></li>
                <li><a href="/planvacation">Plan your Vacation</a></li>
                <li><a href="/sitemap">Site Map</a></li>
              </ul>
            </li> -->
          </ul>
        <!-- </div> -->
      </nav>

      <div style="background-color: #eee; width: 970px; height: 30px; padding: 5px;">
        <div style="float: left; width: 300px; height: 20px; margin-left: 5px;"><a href="register/">Register</a> | <a href="login/">Login</a></div>
        <!-- <select class="form-control" style="float: left; width: 300px; height: 20px; margin-left: 5px; color: grey; padding: 0px;" placeholder="Text input">
          <option value="" disabled selected="selected">I am looking for ...</option>
          <option>Visit Egypt</option>
          <option>International Travel</option>
        </select> -->
        <div style="float: right;">
          <ul class="list-inline">
            <li style="color: grey;">FOR BOOKING CALL</li>
            <li style="color: #428bca;"><b>+2 022735808</b></li>
            <li style="color: grey;">EMERGENCY CALL</li>
            <li style="color: #428bca;"><b>+2 01020002022</b></li>
          </ul>
        </div>
      </div>