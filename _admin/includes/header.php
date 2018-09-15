<?php
session_start();
include("includes/db.php");
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard| Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- text editor -->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <link href="assets/css/style.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://localhost/qwilo1" class="simple-text">
                   Filo Technologies Private Limited
                </a>
            </div>

            <ul class="nav">
			   <li>
                    <a href="home.php">
                        <i class="pe-7s-note2"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="address_view.php">
                        <i class="pe-7s-note2"></i>
                        <p>Address list</p>
                    </a>
                </li>
                <li>
                    <a href="job_view.php">
                        <i class="pe-7s-note2"></i>
                        <p>Job List</p>
                    </a>
                </li>
               <li>
                  <a href="lib/login_logout.php?act=logout">
                        <i class="pe-7s-note2"></i>
                        <p>Logout</p>
                    </a>
                </li>
               
                
				
            </ul>
    	</div>
    </div>