
<?php
      require "header.php";
    ?>

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/banner/breadcrumb.jpg');">
            <div class="container">
                <div class="page-heading center">
                    <h1>Login</h1>
                    <ul class="breadcrumb-items">
                        <li>
                            <a href="index.html">
                            Home Page
                            </a>
                        </li>
                        <li>
                            <i class="far fa-chevron-right"></i>
                        </li>
                        <li>
                            Login
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--<< Contact Info Section Start >>-->
        <section class="contact-info-section fix section-padding section-bg">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="contact-info-items text-center">
                            <div class="icon">
                                <img src="assets/img/icon/location.svg" alt="icon-img">
                            </div>
                            <div class="content">
                                <h3>address line</h3>
                                <p>
                                    Bowery St, New York, 37 USA <br>
                                    NY 10013,USA 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="contact-info-items active text-center">
                            <div class="icon">
                                <img src="assets/img/icon/phone.svg" alt="icon-img">
                            </div>
                            <div class="content">
                                <h3>Phone Number</h3>
                                <p>
                                    +1255 - 568 - 6523 4374-221 <br>
                                    +1255 - 568 - 6523
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="contact-info-items text-center">
                            <div class="icon">
                                <img src="assets/img/icon/email.svg" alt="icon-img">
                            </div>
                            <div class="content">
                                <h3>Mail Adress</h3>
                                <p>
                                    email@example.com <br>
                                    info@yourdomain.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<< Contact Section Start >>-->
        <section class="contact-section section-padding pt-0 section-bg">
            <div class="container">
                <div class="contact-area">
                    <div class="row justify-content-between">
                        
                        <div class="col-md-12">
                            <div class="contact-form-items">
                                <div class="contact-title">
                                    <h3 class="wow fadeInUp" data-wow-delay=".3s">Fill Up The Form</h3>
                                    <p class="wow fadeInUp" data-wow-delay=".5s">Your email address will not be published. Required fields are marked *</p>
                                </div>
                                <form action="https://modinatheme.com/html/foodking-html/contact.php" id="contact-form" method="POST">
                                    <div class="row g-4">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Full Name*">
                                                <div class="icon">
                                                    <i class="fal fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email" placeholder="Email Address*">
                                                <div class="icon">
                                                    <i class="fal fa-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                                            <button type="submit" class="theme-btn">
                                            <span class="button-content-wrapper d-flex align-items-center">
                                            <span class="button-icon"><i class="fal fa-paper-plane"></i></span>
                                            <span class="button-text">Login</span>
                                            </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Cta Banner Section Start -->
        <section class="main-cta-banner-2 section-padding bg-cover" style="background-image: url('assets/img/banner/main-cta-bg-2.jpg');">
            <div class="tomato-shape-left float-bob-y">
                <img src="assets/img/tomato.png" alt="shape-img">
            </div>
            <div class="chili-shape-right float-bob-y">
                <img src="assets/img/chilli.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="main-cta-banner-wrapper-2 d-flex align-items-center justify-content-between">
                    <div class="section-title mb-0">
                        <span class="theme-color-3 wow fadeInUp">crispy, every bite taste</span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                            30 minutes fast <br>
                            <span class="theme-color-3">delivery</span> challage
                        </h2>
                    </div>
                    <a href="shop-single.html" class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">
                    <span class="button-content-wrapper d-flex align-items-center">
                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                    <span class="button-text">order now</span>
                    </span>
                    </a>
                    <div class="delivery-man">
                        <img src="assets/img/delivery-man-2.png" alt="img">
                    </div>
                </div>
            </div>
        </section>

        <?php
      require "footer.php";
    ?>