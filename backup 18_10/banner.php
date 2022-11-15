<?php
include('./includes/header.php');
?>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWM74VD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <section class="banner-slider">
        <?php
        include('./includes/mainnav.php')
        ?>
        <ul class="banner-bx-design">
            <li>
                <a href="story">
                    <div class="ct-box">
                        <!-- <a href="javascript:void(0)" id="chapter1"> -->
                        <div class="zy-banner-content-box"> <span class="zy-radius-border"></span>
<!--                             <h6>Facet 1</h6>
 -->                            <h2>Emergence</h2>
                            <!--<p>hover content for the landingbanner</p> -->
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="story?=chapter2">
                    <div class="ct-box">
                        <!-- <a href="collectiongsap.php"> -->
                        <div class="zy-banner-content-box"> <span class="zy-radius-border"></span>
<!--                             <h6>Facet 2</h6>
 -->                            <h2>Fervour</h2>
                            <!-- <p>hover content for the landingbanner</p> -->
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="story?=chapter3">
                    <div class="ct-box">
                        <div class="zy-banner-content-box"> <span class="zy-radius-border"></span>
<!--                             <h6>Facet 3</h6>
 -->                            <h2>Leap</h2>
                            <!--<p>hover content for the landingbanner</p> -->
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="story?=chapter4">
                    <div class="ct-box">
                        <div class="zy-banner-content-box"> <span class="zy-radius-border"></span>
<!--                             <h6>Facet 4</h6>
 -->                            <h2>Calm</h2>
                            <!--  <p>hover content for the landingbanner</p> -->
                        </div>
                    </div>
                </a>
            </li>
            <div class="banner"></div>
        </ul>
    </section>
    <?php
    include('./includes/footer.php')
    ?>