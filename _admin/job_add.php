<?php  
include('includes/db.php');
?>
<!doctype html>
<html lang="en">
<head>
    <title>Filo Technologies Private Limited</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <!-- text editor -->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- font awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- ionicons icon -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- mega menu -->
    <link href="css/mega-menu/mega_menu.css" rel="stylesheet" type="text/css" />
    <!-- owl-carousel -->
    <link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <!-- magnific popup -->
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <!-- animate -->
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <!-- media element player -->
    <link href="css/mediaelementplayer.min.css" rel="stylesheet" type="text/css" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link href="revolution/css/settings.css" rel="stylesheet" type="text/css">
    <!-- ADD-ONS CSS FILES -->
    <link href="revolution/css/revolution.addon.particles.css" rel="stylesheet" type="text/css">
    <!-- shortcodes -->
    <link href="css/shortcodes.css" rel="stylesheet" type="text/css" />
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- responsive -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- custom -->
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="#" data-style="styles">
    <link rel="stylesheet" href="css/style-customizer.css" />
</head>

<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="images/loader.png" alt="loder">
        </div>
    </div>
    <!-- loading End -->
    <?php
include("includes/header.php");
?>

        <!--======= Breadcrumb Left With BG Image =======-->
        <div class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white" style="background-image: url('images/bg/03.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-12">
                        <div class="iq-mb-0">
                            <h2 class="iq-font-white iq-tw-6">Careers Job Post</h2>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--======= Breadcrumb Left With BG Image =======-->
        <div class="container">
        <div class="job_post_form" style="margin: 36px 0px;">
    	<form class="form-horizontal" method="post" action="lib/jobs.php">
            <div class="form-group">
            <div class="col-sm-12">
                 <label for="email"><b>Job Title</b></label>
                <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title: Ex- Clean Code" />
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-12">
                 <label for="email"><b>Job Qualification:</b></label>
            <textarea class="form-control" name="job_qualification" rows="10" id="job_qualification" placeholder="Job Descriptions: Ex- Educational Qualification Required : MBA-Marketing
Joining : Immediate / Max 30 days
Location : Swargate - Pune"></textarea>
                </div>
            </div>
            <div class="form-group">
            <div class="col-sm-12">
                 <label for="email"><b>Job Icon:</b></label>
            <input type="text" class="form-control" name="job_icon" id="job_icon" placeholder="Job Icon: Ex- ion-ios-list-outline iq-font-white"/>
            </div>
            </div>
            <div class="form-group"> 
            <div class="col-sm-12">
            <input type="submit" class="btn btn-success" name="submit" value="Post Job"/>
            </div>
            </div>
            <input type="hidden" name="act" value="save_jobpost" />
        </form>  
        </div>  
        </div>
 <?php include('includes/footer.php'); ?>
</body>
</html>