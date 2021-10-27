<!DOCTYPE html>
<html>
    <head>
         <!-- title -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <!-- End title -->

        <!-- icon -->
        <link rel="shortcut icon" href="icon.png" />
        <!-- End icon -->

        <!-- Start mobile -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- End mobile -->

        <!-- Start meta tags -->
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Content-Script-Type" content="text/javascript">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta name="description" content="">
        <meta name="abstract" content="">
        <meta name="keywords" content="">
        <meta name="Distribution" content="Global">
        <meta name="author" content="">
        <meta name="robots" content="index,follow">
        <meta name="revisit-after" content="1 days">
        <meta name="web_author" content="">
        <!-- End meta tags -->

        <?php 
            wp_head();
        ?>
    </head>
    <body>
        <!--Start Navbar-->
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" alt="" class="brandlogo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>


              <div class="collapse navbar-collapse" id="navbarSupportedContent">


              <?php

                wp_nan_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_warp' => '<ul id="" class="navbar-nav ms-auto mb-2 mb-lg-0">%3$s</ul>'
                    )
                );
              ?>
              
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Services
                    </a>
                    <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="translation.html">Creative Branding</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="checking.html">Social Media Services</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="scholars.html">Marketing Strategies</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="scholars.html">Advertisement</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="scholars.html">Photography Videos</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="scholars.html">Voice Over</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="scholars.html">Content Creation & Strategy</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="scholars.html">Web Development & Solutions</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">Use Cases</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                  </li>
                    
                    <div class="dropdown">
                        <div class="dropdown-toggle targemHome-navbarLangIconToggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-globe-americas targemHome-navbarLangIcon" aria-hidden="true"></i>
                        </div>
                        <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="arabic/index.html">العربية</a></li>
                        </ul>
                      </div>
                </ul>
              </div>






            </div>
          </nav>    
        <!--End of Navbar-->


        <!-- Start Whatsapp Icon -->
        <a href="https://wa.me/0096598008445" class="float" target="_blank">
          <i class="fab fa-whatsapp my-float"></i>
          </a>
          <!-- End Whatsapp Icon -->