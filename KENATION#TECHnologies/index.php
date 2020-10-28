<?php

session_start();
require "dbConnect.php";



print $_POST["messages"];
if(isset($_POST["messages"])){

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $messages =  $_POST["messages"];
    
    require "phpmailer/PHPMailerAutoload.php";
    $user_insert = "INSERT INTO messages(fullname, email,subject, messages) VALUES('$fullname','$email','$subject','$messages')";

    if($conn->query($user_insert) === TRUE){
               header("Location: index.html");
                exit();
              
    }else{
        print $conn->error;
    }
}







?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>KENATION TECHnologies</title>

    <!-- Favicon -->
    
    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="loader">
            <span class="inner1"></span>
            <span class="inner2"></span>
            <span class="inner3"></span>
        </div>
    </div>

    <!-- Search Form Area -->
    <div class="fancy-search-form d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Close Btn -->
                    <div class="search-close-btn" id="closeBtn">
                        <i class="ti-close" aria-hidden="true"></i>
                    </div>
                    <!-- Form -->
                    <form action="#" method="get">
                        <input type="search" name="fancySearch" id="search" placeholder="| Enter Your Search...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="index.html">KENATION TECHnologies</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fancyNav" aria-controls="fancyNav" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                        <div class="collapse navbar-collapse" id="fancyNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#about-section"> About Us?</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#service-section"> Our Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact-section">Contact Us</a>
                                </li>

                            </ul>
                           
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
    <div class="fancy-hero-area bg-img bg-overlay animated-img" style="background-image: url(img/pic8.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="fancy-hero-content text-center">
                        <!-- Video Overview -->
                       <h2>KENATION TECHnologies</h2>
                        <h2>An Innovative Technological Website and Software Provider At Your Service </h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Top Feature Area Start ***** -->
    <div class="fancy-top-features-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fancy-top-features-content">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> RELIABILITY & EFFICIENCY</h5>
                                    <p>We provide a one on one feedback with the customer to enhance a reliable feedback on the project progress and also to ensure there is efficiency in the project being developed and designed </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i> EXPERTISE</h5>
                                    <p>We have experienced Website and Software Developers that are equiped with skills needed in coming up with exclusive high-end quality project designs and developments. </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-diamond" aria-hidden="true"></i> QUALITY</h5>
                                    <p>We offer the best advanced technological trends and features to the website and software projects being developed and designed so as to meet the right technological era. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Feature Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="fancy-about-us-area bg-gray" class="site-section" id="about-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-us-text">
                        <h2>Why choose KENATION TECHnologies?</h2>
                        <h1>MOTTO</h1>
                        <p>To provide high quality website and sofware solutions.</p>
                        <h1>AIM</h1>
                        <p>To offer the best skilled technologial development and designs to customer websites and software projects meeting their own specifications and requirements.</p>
                        <a href="#skills-section" class="btn fancy-btn fancy-dark">Read More</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-5 ml-xl-auto">
                    <div class="about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/pic3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->
 <!-- ***** Service Area Start ***** -->
    <section class="fancy-services-area bg-img bg-overlay section-padding-100-70" style="background-image: url(img/pic4.jpg) " class="site-section" id="service-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading heading-white text-center">
                        <h2>What We Provide</h2>
                        <p>Here at KENATION TECHnologies we provide the following services</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service -->
                <div class="col-12 col-md-4">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="0.5s">
                        <i class="ti-desktop"></i>
                        <h5>Website Development</h5>
                        <p>We analyse the current market website and software programs developments and try to implement the cool features to the projects specified by the clients strictly abiding to their requiremnts and specifications</p>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-4">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="1s">
                        <i class="ti-ruler-pencil"></i>
                        <h5>Website Design</h5>
                        <p>We analyse the current market website and software programs designs and try to implement the cool features to the projects specified by the clients strictly abiding to their requiremnts and specifications</p>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-4">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="1.5s">
                        <i class="ti-menu"></i>
                        <h5>Website Portfolio</h5>
                        <p>We design business and personal portfolios strictly abiding to the requirements and specifications of the customer. </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="1.5s">
                        <i class="ti-desktop"></i>
                        <h5>Mobile App Development</h5>
                        <p>We design and develop mobile apps for android and IOS.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Service Area End ***** -->
    <!-- ***** Skills Area Start ***** -->
    <section class="fancy-skills-area section-padding-200" class="site-section" id="skills-section">
        <!-- Side Thumb -->
        <div class="skills-side-thumb">
            <img src="img/pic7.jpg" alt="">
        </div>
        <!-- Skills Content -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-5 ml-auto">
                    <div class="section-heading">
                        <h2>Areas 0f Speciality</h2>
                        <p>Here at KENATION TECHnologies we offer skill services on the following specialities.</p>
                    </div>
                    <div class="skills-content">
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar wow fadeInUp" data-wow-delay="0.5s">
                            <h6> 1. Website Development</h6>
                            <!--<div id="bar1" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="90"></span>
                            </div>-->
                        </div>
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar wow fadeInUp" data-wow-delay="1s">
                            <h6> 2. Website Design</h6>
                            <!--<div id="bar2" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="95"></span>
                            </div>-->
                        </div>
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar wow fadeInUp" data-wow-delay="1.5s">
                            <h6> 3. Website Portfolio</h6>
                            <!--<div id="bar3" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="90"></span>
                            </div>-->
                        </div>
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar wow fadeInUp" data-wow-delay="2s">
                            <h6> 4. Mobile App Development</h6>
                            <!--<div id="bar4" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="90"></span>
                            </div>-->
                        </div>
                       
                        
                    </div>
                    <a href="#contact-section" class="btn fancy-btn fancy-dark">Work With Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Skills Area End ***** -->

   

    <!-- ***** Testimonials Area Start ***** -->
    

    <!-- ***** CTA Area Start ***** -->
    <!--<section class="fancy-cta-area bg-img bg-overlay section-padding-100" style="background-image: url(img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2>Ready To Discuss Your Project?</h2>
                        <p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
                        <a href="#" class="btn fancy-btn">Work with us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url(img/pic8.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>Contact Us</h2>
                        <p>Get In Touch With KENATION TECHnologies Today.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

<!-- ***** Contact Area Start ***** -->
<section class="site-section" id="contact-section">
    <div class="fancy-contact-area section-padding-100">
        <div class="container">
         

            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- Contact Details -->
                    <div class="contact-details-area">
                        <div class="section-heading">
                            <h2>Contact Us</h2>
                            <p>We value your feedback here at KENATION TECHnologies and due to that feel free to contact us and offer your reviews and comments on our services.</p>
                        </div>
                        <p>+2547------<br> info.-------@gmail.com
                        </p>
                        <p>Street <br> Town , County</p>
                        <p>Open hours: 8.00-18.00 Mon-Fri <br> Sunday: Closed</p>
                    </div>
                    <!-- Follow Us -->
                    <div class="follow-us-area">
                        <h2>Follow Us:</h2>
                        <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <!-- Contact Form -->
                    <div class="contact-form-area">
                        <div class="section-heading">
                            <h2>Get In Touch With Us!</h2>
                            <p>Fill out the form below to get in touch with us Today.</p>
                        </div>
                        <div class="contact-form">
                            
                            <form action="contactprocess.php" method="POST" autocomplete = "off" >
                                <!-- Message Input Area Start -->
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Single Input Area -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h2>Full Names</h2>
                                                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area -->
                                        <div class="col-12">
                                            <h2>Email Address</h2>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h2>Subject</h2>
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h2>Message</h2>
                                                <textarea name="messages" class="form-control" id="messages" cols="30" rows="10" placeholder="Messages" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Single Input Area -->
                                        <div class="col-12">
                                            <button type="submit" class="btn fancy-btn fancy-dark bg-transparent">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- ***** Contact Area End ***** -->
    <!-- ***** Footer Area Start ***** -->
    <footer class="fancy-footer-area fancy-bg-dark">
        <div class="footer-content section-padding-80-50">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Our Newsletter</h6>
                            <p>Subscribe to our mailing list to get the updates to your email inbox.</p>
                            <form action="#" method="get">
                                <input type="search" name="search" id="footer-search" placeholder="E-mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <div class="footer-social-widegt d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Link Categories</h6>
                            <nav>
                                <ul>
                                   
                                    <li><a href="#index.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a></li>
                                     <li><a href="#about-section"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About Us?</a></li>
                                    <li><a href="#service-section"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Our Services</a></li>
                                     <li><a href="#contact-section"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Contact Us</a></li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Contact Us</h6>
                            <p>+254708190804<br>info.kenationtechnologies@gmail.com
                            </p>
                            <p>Location<br>Town and County, Country</p>
                            <p>Open hours: 8.00-18.00 Mon-Fri</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copywrite -->
        <div class="footer-copywrite-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="copywrite-content h-100 d-flex align-items-center justify-content-between">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script></i> by <a href="" target="_blank">KENATION TECHnologies</a>

                            </div>
                            <!-- Footer Nav -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>