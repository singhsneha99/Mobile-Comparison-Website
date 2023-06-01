<?php session_start();
include 'connection.php';
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MobileHub</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- ECHO -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

  </head>
  <body>
   
    
    
     
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                    <li>
                    <div class="logo" style="height:20px !important;">
                        <h1><a href="./"><img src="img/mlogo.jpg" style="margin-left:-100px;margin-top:-50px !important;"></a></h1>
                    </div>
                    </li>
                        <li style="margin-left:200px;"><a href="index.php">Home</a></li>
                        <li><a href="compare.php?mob1=1&mob2=2">Compare Mobile</a></li>
                        <li><a href="findmobile.php?os=&ram=&internam_memory=&front_camera=">Find Mobile</a></li>
                         <li><a href="contactus.php">Contact Us</a></li>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
