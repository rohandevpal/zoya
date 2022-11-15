<?php
include('./includes/header.php');
include('./includes/mainnav.php');
include('./includes/mainlogo.php');
?>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWM74VD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <section class="zy-showcase-banner">
        <div class="custom-seekbox">
        </div>
        <input type="hidden" id="checkVideo" value="0">
        <div id="custom-seekbar"> <span></span>
            <ul class="bar-box-chapter">
                <li class="chapter-1-bar"></li>
                <li class="chapter-2-bar"></li>
                <li class="chapter-3-bar"></li>
                <li class="chapter-4-bar"></li>
            </ul>
        </div>
        <div class="btn-skip" id="btn-skip">Skip</div>
        <video id="vid1" src="https://staticimg.titan.co.in/Zoya/videos/Zoya-Chapter-Video_New.mp4" autoplay muted loop playsinline></video>
        <ul class="zy-chapters-block">
            <li id="chapter1">Emergence</li>
            <li id="chapter2">Fervour</li>
            <li id="chapter3">Leap</li>
            <li id="chapter4">Calm</li>
        </ul>
    </section>
    <div id="audio-control-main" class="">
        <img id="mute" src="images/mute.svg">
    </div>
    <?php
    include('./includes/landingpages.php');
    include('./includes/form.php')
    ?>
    <!--second popup after one popup start-->
    <?php
    include('./includes/footer.php');
    ?>