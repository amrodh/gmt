<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin System</title>

 <link rel="stylesheet" href="<?php echo base_url(); ?>application/static/css/bootstrap-theme.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>application/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/static/css/style.css">

<!-- <?php if ($request == 'content'): ?> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>application/static/css/style.css"> -->
<!-- <?php endif ?> -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/static/css/admin.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>application/static/css/datepicker.css">
<link href="<?= base_url();?>/application/static/css/jquery.bxslider.css" rel="stylesheet" />

 <link href="http://fonts.googleapis.com/css?family=Ubuntu:300,500,700" rel="stylesheet" type="text/css">

 
 <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>application/static/js/jquery.min.js"></script>
 <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>application/static/js/bootstrap.min.js"></script>
 
 <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>application/static/js/jquery-ui.min.js"></script>
 <link rel="stylesheet" href="<?php echo base_url(); ?>application/static/js/jquery-ui.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>application/static/js/jquery-ui.min.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>application/static/js/jquery-ui.structure.min.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>application/static/js/jquery-ui.theme.min.css">
<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>application/static/js/filter.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>application/static/js/bootstrap-select.js"></script>
    
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>application/static/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>application/static/css/bootstrap-select.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>application/static/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>application/static/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <input type="hidden" id="base_url" value="<?= base_url(); ?>">
</head>

<body>

<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" style="" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">
                   <u>
                       GMT Back-End
                   </u>
                </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
                     <?php 
                     $first_name = $this->session->userdata['first_name'];
                     $last_name = $this->session->userdata['last_name'];
                     echo $first_name.' '.$last_name;
                    ?>
                     </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>admin/logout"> 
                    <i class="fa fa-sign-out"></i> 
                     Log Out
                    </a>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="height:100%;">
                    <li <?php if($request == 'dashboard') echo 'class="active"'; ?> >
                        <a href="<?php echo base_url(); ?>admin/"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li <?php if($request == 'categories') echo 'class="active"'; ?>>
                        <a href="<?php echo base_url(); ?>admin/categories"><i class="fa fa-fw fa-cubes"></i> Categories</a>
                    </li>
                    <li <?php if($request == 'packages') echo 'class="active"'; ?> >
                        <a href="<?php echo base_url(); ?>admin/packages"><i class="fa fa-fw fa-tasks"></i> Packages</a>
                    </li>
                    <li <?php if($request == 'users') echo 'class="active"'; ?>>
                        <a href="<?php echo base_url(); ?>admin/users"><i class="fa fa-fw fa-user"></i> Users</a>
                    </li>
                    <li <?php if($request == 'social') echo 'class="active"'; ?>>
                        <a href="<?php echo base_url(); ?>admin/social"><i class="fa fa-fw fa-facebook-square"></i> Social</a>
                    </li>
                    <li <?php if($request == 'banners') echo 'class="active"'; ?>>
                        <a href="<?php echo base_url(); ?>admin/banners"><i class="fa fa-fw fa-camera"></i> Banners</a>
                    </li>
                    <li <?php if($request == 'contacts') echo 'class="active"'; ?>>
                        <a href="<?php echo base_url(); ?>admin/contacts"><i class="fa fa-fw fa-phone-square"></i>  Contacts</a>
                    </li>
                    <li <?php if($request == 'bookings' || $request == 'booking') echo 'class="active"'; ?>>
                        <a href="<?php echo base_url(); ?>admin/bookings"><i class="fa fa-fw fa-book"></i>  Bookings</a>
                    </li>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>