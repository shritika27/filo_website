
<?php
#include('includes\contact-us-email.php');
include('includes\db.php')
?>
<?php
/*  if(isset($_REQUEST['id'])){
        $sql = "select * from contact_us where id = '$_REQUEST[id]'";
        $rs = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($rs);
        print "<pre>";
        print_r($data);
    }*/

$query=mysqli_query($conn,'select * from country_details');

if (mysqli_num_rows($query) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($query)) {
        echo $row['country'];
        echo $row['state'];
        echo $row['map_url'];
    }
} else {
    echo "0 results";
}

?>

 <!doctype html>
<html lang="en">
<head>
    <title>Filo Technologies Private Limited</title>
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
        <section class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white" style="background-image: url('images/bg/03.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="iq-mb-0">
                            <h2 class="iq-font-white iq-tw-6">Contact Us</h2>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!--======= Breadcrumb Left With BG Image =======-->
        <!--=================================
        MAIN CONTENT -->
        <div class="main-content">
            <!-- Contact Us 2 -->
            <div class=" iq-contact2">
            <div class="iq-map">
                <?php
                echo"
                <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921'></iframe>";
                ?>
            </div>
          
            <section class="iq-our-touch overview-block-pb">
                <div class="container">
                    <div class="iq-get-in iq-pall-40 white-bg">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 iq-mtb-15">
                                <h4 class="heading-left iq-tw-6 iq-pb-20 iq-mb-20">Get in Touch</h4>
                                
                                <?php include("includes/contact_form.php"); ?>  
                                
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 iq-mtb-15">
                                <div class="contact-info iq-pall-60 iq-pt-0">
                                    <h4 class="heading-left iq-tw-6 iq-mb-20 iq-pb-20">Contact Us</h4>
                                    <div class="iq-contact-box media">
                                        <div class="iq-icon left">
                                            <i aria-hidden="true" class="ion-ios-location-outline"></i>
                                        </div>
                                        <div class="contact-box right media-body">
                                            <h5 class="iq-tw-6">Address</h5>
                                            <p>Plot No – 17,Sec – 16 A, Film City, Noida, Uttar Pradesh 201301</p>
                                        </div>
                                    </div>
                                    <div class=".iq-contact-box right media iq-mt-40">
                                        <div class="iq-icon left">
                                            <i aria-hidden="true" class="ion-ios-telephone-outline"></i>
                                        </div>
                                        <div class="contact-box right media-body">
                                            <h5 class="iq-tw-6">Phone</h5>
                                            <span class="lead iq-tw-5">+0123 456 789</span>
                                            <div class="iq-mb-0">Mon-Fri 8:00am - 8:00pm</div>
                                        </div>
                                    </div>
                                    <div class=".iq-contact-box right media iq-mt-40">
                                        <div class="iq-icon left">
                                            <i aria-hidden="true" class="ion-ios-email-outline"></i>
                                        </div>
                                        <div class="contact-box right media-body">
                                            <h5 class="iq-tw-6">Mail</h5>
                                            <span class="lead iq-tw-5"><a href="https://iqonicthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c5b6b0b5b5aab7b185a4b5b5acabaaeba6aaa8">[email&#160;protected]</a></span>
                                            <div class="iq-mb-0">24 X 7 online support</div>
                                        </div>
                                    </div>
                                    <ul class="info-share list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           
            <!-- Contact Us 2 -->
            </div>
            <!-- Faq 1 -->
        <div class="overview-block-ptb grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="iq-accordion light right-icon">
                          <form action="lib/address_detail.php" method="post">
                            <?php
                            $query=mysqli_query($conn,'select * from country_details');
                                if (mysqli_num_rows($query) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($query)) {

                                        
                                        echo"<div class='iq-ad-block iq-active'> <a href='#' class='ad-title iq-fw-4 iq-font-black iq-active'>$row[country]</a>
                                                <div class='ad-details' style='color: black'>
                                                    $row[state]<br>$row[map_url]     
                                                </div>
                                            </div>";
                                    }
                                } else {
                                    echo "0 results";
                                }

                            
                            ?>
                            <!--<div class="iq-ad-block"> <a href="#" class="ad-title iq-fw-4 iq-font-black">Dummy the printing and type setting?</a>
                                <div class="ad-details" style="display: none;">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</div>
                            </div>
                            <div class="iq-ad-block"> <a href="#" class="ad-title iq-fw-4 iq-font-black">Standard dummy since the 1500s?</a>
                                <div class="ad-details" style="display: none;">
                                    Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                </div>
                            </div>
                            <div class="iq-ad-block"> <a href="#" class="ad-title iq-fw-4 iq-font-black">Simply dummy text of the Lorem Ipsum?</a>
                                <div class="ad-details" style="display: none;">
                                    Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                </div>
                            </div>-->
                            
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="iq-accordion light right-icon iq-mt-30">
                            <div class="iq-ad-block iq-active"> <a href="#" class="ad-title iq-fw-4 iq-font-black iq-active">India</a>
                                <div class="ad-details" style="color: black">
                                    Noida<br>
                                    Gurgoan<br>
                                </div>
                            </div>
                            <div class="iq-ad-block"> <a href="#" class="ad-title iq-fw-4 iq-font-black">Australia</a>
                                <div class="ad-details" style="color: black">Noida<br>Gurgoan</div>
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Faq 1 -->
       <?php
include("includes/footer.php");
?> 
</body>
</html> 
