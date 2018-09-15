<?php  
include('includes/db.php');

 if(isset($_POST['submit'])){
 {
       $sql = "INSERT INTO `career_apply_form` (`name`, `email`, `contact`, `image`) VALUES ('$_REQUEST[name]', '$_REQUEST[email]', '$_REQUEST[phone]', '$_REQUEST[image]');";

        $rs = mysqli_query($conn, $sql);

        if($rs){
            
            header("location:index.php?msg=Apply Successfully!!");
        }
 }
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Filo</title> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
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
                            <h2 class="iq-font-white iq-tw-6">Careers</h2>
                            <p>We value innovation, originality, novelty, most importantly timeliness… do you have it?</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--======= Breadcrumb Left With BG Image =======-->
        <!-- Main Content -->
        <div class="main-content">

  <!-- career -->
<section class="overview-block-ptb iq-hide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="heading-title text-center">
                            <h2 class="title iq-tw-6">Engineering Positions</h2>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $sql ="select * from joblist";
                    $rs = mysqli_query($conn, $sql);
                    while($data=mysqli_fetch_assoc($rs)){

                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 iq-mt-40">
                        <div class="iq-feature9 text-center iq-plr-10 wow fadeInUp" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                            <div class="iq-feature9-blog">
                                <div class="left">
                                    <i class="<?php echo $data['job_icon']; ?>"></i>
                                </div>
                                <h5 class="iq-font-black iq-tw-6 iq-mt-15"><?php echo $data['job_title']; ?></h5>
                                <p class="iq-mb-0"><?php echo $data['job_qualification']; ?></p>
                                <a class="button grey iq-mt-20" href="#" role="button"  data-toggle="modal" data-target=".iq-register-from" data-whatever="@fat">Apply Now</a>
								  <!--<form action="lib/career_apply_form.php" id="" method="post">-->
                                <form action="career.php" id="" method="post">
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    
                </div>
            </div>
        </section>
  <!-- career -->
         <!--=================================
       
            </div>
            <!--=================================
            Main Content -->
            <!--=================================
    
    <!--=================================
Register -->
    <div class="modal fade iq-register-from" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title iq-tw-5">Apply Now</h4>
                    <a class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</a>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="recipient-username" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" id="recipient-email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" id="Phone" placeholder="Mobile">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="Image" id="Phone" placeholder="Mobile">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">I Agree to the Terms and Conditions</label>
                        </div>
                        <p>Qwailo galley of type and scrambled it to make a type specimen book.</p>
                        <input type="submit" class="button iq-mtb-10" name="submit">
                        <!--<a class="button iq-mtb-10" href="#">Submit</a>-->
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div> Already Have an Account? <a href="#" class="iq-font-yellow">Login</a></div>
                    <ul class="iq-media-blog iq-mt-20">
                        <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                        <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                        <li><a href="# "><i class="fa fa-google "></i></a></li>
                        <li><a href="# "><i class="fa fa-github "></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
Register -->
    <?php
include("includes/footer.php");
?>
</body>
</html>
