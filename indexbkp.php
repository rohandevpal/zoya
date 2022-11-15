<?php
include('./includes/header.php');
include('./includes/mainnav.php');
include('./includes/mainlogo.php');
include('./includes/form.php');
?>
<body id="body">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWM74VD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <section class="zy-showcase-banner">
        <div class="zy-video-container embed-responsive" id="divi-video-container">
        <!-- <video id="myVideonew" autoplay muted loop playsinline>
                <source src="./video/mobile_view_video.mp4"  >
                 <source src="https://staticimg.titan.co.in/Zoya/videos/Zoya-Main-16-Sep.mp4"> -->
                <!-- <source src="https://staticimg.titan.co.in/Zoya/videos/Zoya_Intro.mp4" type="video/mp4"> 
            </video> -->
            <video id="myVideo" autoplay muted loop playsinline>
                <!-- <source src="./video/mobile_view_video.mp4" class="d-none"> -->
                 <source src="./video/zoya_main_banner.mp4">
<!--                 <source src="https://staticimg.titan.co.in/Zoya/videos/Zoya_Intro.mp4" type="video/mp4">
 -->            </video>
        </div>
        <div class="content">
            <div class="beyond-logo-box">
                <img src="./images/beyond-logo-white.png">
            </div>
            <p id="video-para" data-aos="fade-zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="1500" data-aos-offset="0">Click to Begin</p>
            <a href="banner" data-aos="fade-zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="1500" data-aos-offset="0">
                <div class="video-btn">
                    <img src="./images/video.svg">
                </div>
            </a>
        </div>
    </section>
    <div id="audio-control" class="muted">
        <img id="mute" src="images/mute.svg">
    </div>
    <?php
    include('./includes/footer.php')
    ?>