<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?=e(PROJECT_NAME)?> - <?=e($title)?></title>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- The META "Viewport" tag causes device to REPORT its CSS pixels, instead of ACTUAL pixels. So,
         an iPhone 4 for example, has ACUAL pixels of 640 x 960. But if it reports its CSS pixels, these
         are 320 x 480, or exactly HALF. This devices was known as a "Retina" device (apple term). Other 
         phone manufactures call it "high resolution". -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="icon" href="/favicon.png" type="image/x-icon"/>
    <link rel="apple-touch-icon" sizes="128x128" href="/favicon-128.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon-152.png"/>
    <link rel="apple-touch-icon" sizes="167x167" href="/favicon-167.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon-180.png"/>
    <link rel="apple-touch-icon" sizes="196x196" href="/favicon-196.png"/>
    <link rel="apple-touch-icon" sizes="32x32" href="/favicon-32.png"/>
  
    <link rel="stylesheet" type="text/css" href="/styles/flash.css"/>
    <!-- Set a "breakpoint" at 768pixels. This way, iPads and UP get the "desktop" stylesheet, while 
         767pixels and LOWER get the "mobile" stylesheet. -->  
    <link rel="stylesheet" type="text/css" href="/styles/desktop_styles.css" media="screen and (min-width: 768px)"/> 
    <!-- "Mobile" devices we will consider to be 767 and UNDER -->
    <link rel="stylesheet" type="text/css" href="/styles/mobile_styles.css" media="screen and (max-width: 767px)"/>
    <!-- print stylesheet -->
    <link rel="stylesheet" type="text/css" href="/styles/print_styles.css" media="print"/>
    
    <script src="/js/old_ie.js"></script>
    <!-- Make IE 8 and lower understand that these HTML5 elements should be block.--> 
    <!--[if LTE IE 8]>
      <link rel="stylesheet" type="text/css" href="styles/ie_styles.css" />
      <style type="text/css">
        nav, header, main, footer, aside, section{
          display: block;
        }
        nav ul#services_list{
          display: none !important;
        }
        nav li.has_submenu:hover ul#services_list{
          display: block !important;
        }

      </style>
    
    <![endif]-->
    
    <!--[if LTE IE 8]>
      <h1 id="ie_warning" style="color: #000">Hi Boss, Welcome to MO2. IE 8 and lower is not supported, please updated your browser!!</h1>
    <![endif]-->
    
<!--

  M)mm mmm    A)aa   Y)    yy  O)oooo  W)      ww   A)aa  
  M)  mm  mm  A)  aa   Y)  yy  O)    oo W)      ww  A)  aa 
  M)  mm  mm A)    aa   Y)yy   O)    oo W)  ww  ww A)    aa
  M)  mm  mm A)aaaaaa    Y)    O)    oo W)  ww  ww A)aaaaaa
  M)      mm A)    aa    Y)    O)    oo W)  ww  ww A)    aa
  M)      mm A)    aa    Y)     O)oooo   W)ww www  A)    aa

        ////////////////////////////////////////////
        //                                        //
        //      HTML5 CSS3 Capstone Project       //
        //               WDD7 - 2020              //
        //           Capstone Project(MO2)        //
        //          Instructor: Brent Scott       //
        //                                        //
        ////////////////////////////////////////////

       db               88       db        88b           d88 88        88
      d88b              88      d88b       888b         d888 88        88
     d8'`8b             88     d8'`8b      88`8b       d8'88 88        88
    d8'  `8b            88    d8'  `8b     88 `8b     d8' 88 88        88
   d8YaaaaY8b           88   d8YaaaaY8b    88  `8b   d8'  88 88        88
  d8""""""""8b          88  d8""""""""8b   88   `8b d8'   88 88        88
 d8'        `8b 88,   ,d88 d8'        `8b  88    `888'    88 Y8a.    .a8P
d8'          `8b "Y8888P" d8'          `8b 88     `8'     88  `"Y8888Y"' 

-->

  <?php if($slug == 'services') : ?>
    <style>
      /*Services content h3 declaration*/
      .services_content .service_box h3{
        position: relative;
        margin: 0;
        padding: 0;
        font-size: 100px;
        z-index: 1;
        opacity: .4;
      }
      /*Services content h4 declaration*/
      .services_content .service_box h4{
        margin: 0;
        padding: 0;
        font-size: 24px;
        text-transform: uppercase;
      }
      /*Services content p declaration*/
      .services_content .service_box p{
        margin: 0;
        padding: 0;
        font-size: 16px;
      }/*Services declaration ends here*/
    </style>
  <?php endif; ?>
 
  </head>
  <body>
    <div id="container">
      <div id="inner_container">
        <div id="navcontainer">
          <a href="/">
            <img src="/images/logoSmall.png" alt="<?=e(PROJECT_NAME)?>" class="logo" width="80" height="84"/>
          </a>
          <!-- Navigation Section of the page -->
          <nav id="home_nav">
            <!-- "Mobile" hamburger menu button -->
            <a href="#" id="menubutton">
              <div id="topbar"></div>
              <div id="middlebar"></div>
              <div id="bottombar"></div>
              <!--<div id="bartext">Menu</div>-->
            </a>
            <div id="nav_list">
              <ul id="navlist">
                <li><a <?=($slug == 'home') ? 'class="active"': ''?> href="/">Home</a></li>
                <li><a <?=($slug == 'about') ? 'class="active"': ''?> href="/about">About Us</a></li>
                <li><a <?=($slug == 'portfolio') ? 'class="active"': ''?> href="/portfolio">Portfolio</a></li>
                <li><a <?=($slug == 'services') ? 'class="active"': ''?> href="/services">Services</a></li>
                <li><a <?=($slug == 'contact') ? 'class="active"': ''?> href="/contact">Contact</a></li>
                <?php if(!isset($_SESSION['user_id'])) : ?>
                  <li><a <?=($slug == 'register') ? 'class="active"': ''?> href="/register">Register</a></li>
                  <li><a <?=($slug == 'login') ? 'class="active"': ''?> href="/login">Login</a></li>
                  <?php elseif (isset($_SESSION['user_id'])) : ?>
                  <li><a <?=($slug == 'logout') ? 'class="active"': ''?> href="/logout">Logout</a></li>
                  <li><a <?=($slug == 'profile') ? 'class="active"': ''?> href="/profile">Profile</a></li>
                <?php endif ?>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!-- Contains the entire page -->
      <div id="wrapper">
        <!-- Header Section of the page -->
        <?php 
          if($slug == 'home'){

            require __DIR__ . '/home.header.inc.php';
          } else{
            require __DIR__ . '/default.header.inc.php';
          }
        ?>