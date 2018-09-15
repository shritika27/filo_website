<?php
include('includes\contact-us-email.php');
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
    <!-- HEADER  -->
   <?php
include("includes/header.php");
?>

    <!-- /HEADER END -->
 
    <!--======= Breadcrumb Left With BG Image =======-->
    <section class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white" style="background-image: url('images/bg/03.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="iq-mb-0">
                        <h2 class="iq-font-white iq-tw-6">SharePoint Development Company</h2>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!--======= Breadcrumb Left With BG Image =======-->
    <!--=================================
MAIN CONTENT -->
    <div class="main-content">
        <!-- detail Start -->
       <section class="overview-block-ptb device-blog" style="background-image:url('images/bg/bg-8.html'); background-position: center center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 iq-mtb-15">
                                 <div class="heading-title text-center">
                            <h2 class="title iq-tw-6">Get In Touch</h2>
                            
                        </div>
                                <form id="contact" method="post">
                            <div class="contact-form">
                                        <div class="section-field iq-mt-10">
                                            <input id="contact_name" type="text" placeholder="Name*" name="name">
                                            <span class="error">This field is required</span>
                                        </div>
                                        <div class="section-field iq-mt-10">
                                            <input id="contact_email" type="email" placeholder="Email*" name="email">
                                            <span class="error">A valid email address is required</span>
                                        </div>
                                        <div class="section-field iq-mt-10">
                                            <input id="contact_phone" type="text" placeholder="Phone*" name="phone">
                                            <span class="error">A valid phone is required</span>
                                        </div>
                                    
                                   
                                        <div class="section-field textarea iq-mt-10">
                                            <textarea id="contact_message" class="input-message" placeholder="Comment*" rows="5" name="message"></textarea>
                                            <span class="error">This field is required</span>
                                        </div>
                                        <button id="submit" name="submit" type="submit" value="Send" class="button pull-right iq-mt-20">Send Message</button>
                                    <?php
                                    if(isset($_REQUEST['msg'])){
                                        echo "<h3>Email Send !!</h3>";
                                    }
                                    ?>
                                    <p role="alert"></p>
                                
                            </div>
                        </form>
                                
                            </div>
                    <div class="col-md-8 col-sm-12">
                         <div class="heading-title text-center">
                            <h2 class="title iq-tw-6">Overview</h2>
                            
                        </div>
                        <p class=" iq-mt-20">In the global age, organization and their teams are scattered geographically where the exchange of documents and information is a big challenge which is being faced by most of the companies of the present age. SharePoint lets organizations people connect as well as enable them to create and share information, documents and ideas in the same way as if they are in the same chamber, internally as well as outside the organization.

Filo Technologies Private Limited, a SharePoint Development Company, have expert team of Sharepoint Developers, Technical Consultants and SharePoint Architects. SharePoint consultancy team mainly assists to draft a consultative approach for a customer by aligning themselves with customer needs and goals. Our full-service development includes every part of project lifecycle starting from business process analysis and requirement study, architecture design, implementation to deployment.Filo Technologies Private Limitedhas experience in building Intranet/Extranet Portals and even public facing sites which help organizations to improve their collaboration, document management and sharing.

</p>
                        
                    </div>
                  
                </div>
            </div>
        </section>
        <!-- detail End-->
        <!--=================================
portfolio -->
        <section class="overview-block-ptb popup-gallery">
          <div class="container">
           <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title text-center">
                            <h2 class="title iq-tw-6">We believe our work speaks for itself</h2>
                            
                        </div>
                    </div>
                </div>
              </div>  
            <div class="container-fluid iq-hide">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                     
                        <div class="isotope iq-columns-4">
                            <div class="iq-grid-item">
                                <div class="iq-portfolio-05">
                                    <img alt="#" src="images/portfolio/grid/10.jpg">
                                    <div class="hoverdir">
                                        <a href="#">Web Design</a> / <a href="#">Graphic</a>
                                        <h5><a href="#" class="title">Portfolio Dashboard</a></h5>
                                        <div class="iq-portfolio-bottom">
                                            <ul class="iq-portfolio-icon">
                                                
                                                <li><a class="image-link popup-img" href="images/portfolio/grid/10.jpg"><i class="fa fa-arrows-alt"></i></a></li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-grid-item">
                                <div class="iq-portfolio-05">
                                    <img alt="#" src="images/portfolio/grid/11.jpg">
                                    <div class="hoverdir">
                                        <a href="#">Web Design</a> / <a href="#">Graphic</a>
                                        <h5><a href="#" class="title">Portfolio Dashboard</a></h5>
                                        <div class="iq-portfolio-bottom">
                                            <ul class="iq-portfolio-icon">
                                              
                                                <li><a class="image-link popup-img" href="images/portfolio/grid/11.jpg"><i class="fa fa-arrows-alt"></i></a></li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-grid-item ">
                                <div class="iq-portfolio-05">
                                    <img alt="#" src="images/portfolio/grid/12.jpg">
                                    <div class="hoverdir">
                                        <a href="#">Web Design</a> / <a href="#">Graphic</a>
                                        <h5><a href="#" class="title">Portfolio Dashboard</a></h5>
                                        <div class="iq-portfolio-bottom">
                                            <ul class="iq-portfolio-icon">
                                                
                                                <li><a class="image-link popup-img" href="images/portfolio/grid/12.jpg"><i class="fa fa-arrows-alt"></i></a></li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-grid-item">
                                <div class="iq-portfolio-05">
                                    <img alt="#" src="images/portfolio/grid/13.jpg">
                                    <div class="hoverdir">
                                        <a href="#">Web Design</a> / <a href="#">Graphic</a>
                                        <h5><a href="#" class="title">Portfolio Dashboard</a></h5>
                                        <div class="iq-portfolio-bottom">
                                            <ul class="iq-portfolio-icon">
                                                
                                                <li><a class="image-link popup-img" href="images/portfolio/grid/13.jpg"><i class="fa fa-arrows-alt"></i></a></li>
                                            </ul>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-grid-item">
                                <div class="iq-portfolio-05">
                                    <img alt="#" src="images/portfolio/grid/14.jpg">
                                    <div class="hoverdir">
                                        <a href="#">Web Design</a> / <a href="#">Graphic</a>
                                        <h5><a href="#" class="title">Portfolio Dashboard</a></h5>
                                        <div class="iq-portfolio-bottom">
                                            <ul class="iq-portfolio-icon">
                                                
                                                <li><a class="image-link popup-img" href="images/portfolio/grid/14.jpg"><i class="fa fa-arrows-alt"></i></a></li>
                                            </ul>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-grid-item">
                                <div class="iq-portfolio-05">
                                    <img alt="#" src="images/portfolio/grid/15.jpg">
                                    <div class="hoverdir">
                                        <a href="#">Web Design</a> / <a href="#">Graphic</a>
                                        <h5><a href="#" class="title">Portfolio Dashboard</a></h5>
                                        <div class="iq-portfolio-bottom">
                                            <ul class="iq-portfolio-icon">
                                               
                                                <li><a class="image-link popup-img" href="images/portfolio/grid/15.jpg"><i class="fa fa-arrows-alt"></i></a></li>
                                            </ul>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-grid-item">
                                <div class="iq-portfolio-05">
                                    <img alt="#" src="images/portfolio/grid/17.jpg">
                                    <div class="hoverdir">
                                        <a href="#">Web Design</a> / <a href="#">Graphic</a>
                                        <h5><a href="#" class="title">Portfolio Dashboard</a></h5>
                                        <div class="iq-portfolio-bottom">
                                            <ul class="iq-portfolio-icon">
                                               
                                                <li><a class="image-link popup-img" href="images/portfolio/grid/17.jpg"><i class="fa fa-arrows-alt"></i></a></li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-grid-item">
                                <div class="iq-portfolio-05">
                                    <img alt="#" src="images/portfolio/grid/18.jpg">
                                    <div class="hoverdir">
                                        <a href="#">Web Design</a> / <a href="#">Graphic</a>
                                        <h5><a href="#" class="title">Portfolio Dashboard</a></h5>
                                        <div class="iq-portfolio-bottom">
                                            <ul class="iq-portfolio-icon">
                                                
                                                <li><a class="image-link popup-img" href="images/portfolio/grid/18.jpg"><i class="fa fa-arrows-alt"></i></a></li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
portfolio -->
        <!-- Available Choices Start-->
        <section class="overview-block-ptb6 iq-bg iq-over-black-80 jarallax" style="background-image: url('images/bg/05.jpg'); background-position: center center;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="title iq-tw-6" style="text-align: center;color: white;">What research firms say about us</h2>
                    </div>
                    <div class="col-lg-6 col-sm-12 iq-mt-10">
                        <ul class="iq-tw-5 iq-font-white">
                            <h1 style="color:white;text-align: center;">clutch</h1>
                             <h6 style="color:white;text-align: center;">FIRMS THAT DELIVER</h6>
                       <li class="iq-mt-20 iq-font-white"><i class="ion-checkmark iq-mr-10 iq-font-green"></i>“They're [Sphinx Solution] extremely reliable. I don't have much experience with other technology providers, but I found the process very easy. They bring good people to the table.</li>
                           
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-12 iq-mt-10">
                        <ul class="iq-tw-5 iq-font-white">
                             <h1 style="color:white;text-align: center;">Good Firms</h1>
                       <li class="iq-mt-20 iq-font-white"><i class="ion-checkmark iq-mr-10 iq-font-green"></i>“The thing that makes them stand out is that they are very professional. You feel like you are not just working with some company, but you are working with somebody who really cares and lets you say what you feel and what you need.</li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Available Choices End-->
        <!-- Services Start-->
        <section class="overview-block-ptb">
            <div class="container">
                <section class="iq-feature1 overview-block-ptb grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="heading-title text-center">
                            <h2 class="title iq-tw-6">Services We Offer</h2>
                            <p>SharePoint Content Management and Enterprise Document Management System
Content Management system in multi-lingual
Building SharePoint Farm Architecture as per Microsoft Best Practices
SharePoint App Development (Provider Hosted App and SharePoint Hosted App)
Synchronize Azure Active Directory with SharePoint
Integrating other systems with SharePoint and upgrading legacy sites to new versions
SharePoint Business Intelligence, BI Capabilities such as Reports, Charts and Graphs in SharePoint Development and Dashboard Development
</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 iq-mt-30">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">

                            <div><i class="fa fa-file-code-o iq-mb-10"></i>
                                <h6 class="iq-tw-6">Intranet Site for Commercial Company</h6>
                            </div>
                            <div class="content-blog">
                                <p>Our client wanted us to develop a product to manage an Online Data Synchronization (data) coming from different clients. Data was sensitive as it was financial data which required the high level of security. He required Client Server application where server distributes data to all clients via email (SMTP). The client can evaluate and process data using window based application and re-send to the server via FTP.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 iq-mt-30">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <div><i class="fa fa-mobile iq-mb-10"></i>
                                <h6 class="iq-tw-6">Calligraphy Expert</h6>
                            </div>
                            <div class="content-blog">
                                <p>The concept of Calligraphy Experts was to simplify and automate the process of accepting orders and allow users to view their printing proofs online.

Our client wanted a solution to manage online printing business. This system allows users to place orders for Envelopes printed with different handwritten font styles. He wanted to provide good graphical user interactivity to enhance user's online printing and shopping experience.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 iq-mt-30">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <div><i class="fa fa-link iq-mb-10"></i>
                                <h6 class="iq-tw-6">Competitive Intelligence Tool</h6>
                            </div>
                            <div class="content-blog">
                                <p>In order to get full advantage of the current business system and managing the various business operations, the client decided to develop and launch a web-based reporting tool to enhance its capability to report most up to date details about competitive intelligence gathered through market research and manual processes. The tool will empower the client to manage Market Intelligence through device agility and competitor portfolio analysis.  </p>
                                
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
            </div>
        </section>
        <!-- Services End-->
        <?php
include("includes/footer.php");
?>
</body>
</html>