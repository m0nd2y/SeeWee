<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/kakaotalk-20181020-205311760-182x212.jpg" type="image/x-icon">
  <meta name="description" content="Website Generator Description">
  <title>login</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-a">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobirise.com">
                         <img src="assets/images/kakaotalk-20181020-205311760-182x212.jpg" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.html">
                        SeeWe</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-7" href="https://mobirise.com">
                        </a>
                </li>
                <li class="nav-item"><a class="nav-link link text-white display-7" href="index.html"><span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Main</a></li><li class="nav-item"><a class="nav-link link text-white display-7" href="page3.html"><span class="mobi-mbri mobi-mbri-contact-form mbr-iconfont mbr-iconfont-btn"></span>law</a></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-7" href="page2.html" data-toggle="dropdown-submenu" aria-expanded="false"><span class="mbri-more-vertical mbr-iconfont mbr-iconfont-btn"></span>Demonstration</a><div class="dropdown-menu"><a class="text-white dropdown-item display-7" href="page4.html"><span class="mobi-mbri mobi-mbri-calendar mbr-iconfont mbr-iconfont-btn"></span>시위 리스트</a><a class="text-white dropdown-item display-7" href="page5.html"><span class="mobi-mbri mobi-mbri-paper-plane mbr-iconfont mbr-iconfont-btn"></span>시위 등록하기</a><a class="text-white dropdown-item display-7" href="page6.html"><span class="mobi-mbri mobi-mbri-video-play mbr-iconfont mbr-iconfont-btn"></span>진행중인 시위 현황</a></div></li><li class="nav-item"><a class="nav-link link text-white display-7" href="signin&out.php"><span class="mobi-mbri mobi-mbri-key mbr-iconfont mbr-iconfont-btn"></span>Login&out</a></li><li class="nav-item"><a class="nav-link link text-white display-7" href="page2.html"><span class="mobi-mbri mobi-mbri-lock mbr-iconfont mbr-iconfont-btn"></span>Register</a></li><li class="nav-item">
                    <a class="nav-link link text-white display-7" href="https://mobirise.com">
                        </a>
                </li><li class="nav-item"><a class="nav-link link text-white display-7" href="https://mobirise.com">
                        </a></li></ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/x">free css templates</a></section><section class="mbr-section form1 cid-r6Z58eJ8P5" id="form1-b">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    목록</h2>
					<?php
include_once ('login_check.php');

extract($_POST);

$mysqli = $mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);


$check = "SELECT * FROM demo";

$result = $mysqli->query($check);
echo "<table border='1'> <tr> <th>title</th> <th>descriptioin</th> <th>boss</th> <th>date</th> <th>tag</th> </tr>";
$n = 1;
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['descriptioin'] . "</td>";
echo "<td>" . $row['boss'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['tag'] . "</td>";
echo "</tr>";
$n++;
}
echo "</table>";

?>

					
            </div>
        </div>
    </div>
    <div class="container">
    </div>
</section>

<section once="" class="cid-r6Z5gixR0R" id="footer7-d">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">About us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">About us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">About us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">About us</a>
                    </li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.behance.net/Mobirise" target="_blank">
                            <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2017 Mobirise - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>