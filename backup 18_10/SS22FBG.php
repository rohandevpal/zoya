<?php
include('./includes/header.php');
include('./includes/form.php');
include('./includes/script.php');
?>

<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWM74VD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <section class="inner-header">
    <?php
    include('./includes/mainnav.php');
    include('./includes/mainlogo.php');
    ?>
  </section>
  <div class="header-height"></div>
  <section class="banner-section">
    <img src="./images/banners/banner-SS22FBG.png" class="dekstop-only">
    <img src="./images/banners/banner-resp-SS22FBG.png" class="mobile-only">
  </section>
<!--   <section class="product-box1">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="produt-img-box">
                        <video autoplay loop muted playsinline>
                            <source src="./video/web-videos/Fervour/turntable-SS22FBG.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
  <section class="single-video-box">
    <div class="container">
      <div class="row">
        <!-- <span id="cng_content">1</span> -->
        <div class="col-lg-6 col-12">
          <div class="produt-img-box">
            <video autoplay loop muted playsinline>
                <source src="./video/web-videos/Fervour/turntable-SS22FBG.mp4" type="video/mp4">
            </video>
            <!-- <video autoplay loop muted playsinline poster="./images/product/emergence-product.png">
                         <source src="./images/product/product-shots/product1.mp4" type="video/mp4">
                      </video> -->

          </div>
        </div>
        <div class="col-lg-6 col-12 d-block" id="primary_content">
          <div class="text-break p-0">
            <h2 class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">Tranquil at Sunrise</h2>
            <p class="pro_code">
              <strong>Product code :</strong>&nbsp; SS22FBG
            </p>
            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Flowing in rose gold, paved with round emeralds, and flanked by baguette diamonds on embanking bridges, is the masterful expression of the river Indus, conquering one contour at a time. Conjured in a most coveted central morganite is the nonchalant flair of sun rays, breaking into the miasma of the surface of the water with their delicate yet piercing gaze.
            </p>
          <!--   <div class="button-first-collection pop_btn">
              <button type="button" id="button-collection-one" id="contact-btn" data-bs-toggle="modal" data-bs-target="#schedulein" class="d-block bookapt1">Book an Appointment</button>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>

    <section class="btn-box text-center">
      <div class="container">
      <div class="col-lg-12">
        <div class="button-first-collection pop_btn">
              <button type="button" id="button-collection-one" id="contact-btn" data-bs-toggle="modal" data-bs-target="#schedulein" class="d-block bookapt1">Book an Appointment</button>
            </div>
      </div>
    </div>
    </section>
  <?php
  include('./includes/footer.php')
  ?>