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
    <img src="./images/banners/SS22DAH-banner.png" class="dekstop-only">
    <img src="./images/banners/SS22DAH-banner-resp.png" class="mobile-only">
  </section>
  <section class="single-video-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="produt-img-box">
           <video autoplay loop muted playsinline>
              <source src="./images/product/product-shots/v10mp4.mp4" type="video/mp4">
            </video>
<!--  <img src="./images/product/SS22DAH.png">
 -->   </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="text-break p-0">
            <h2 class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">A Playful Meander Earrings</h2>
            <p class="pro_code">
              <strong>Product code :</strong>&nbsp; SS22DAH
            </p>
            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Impressed with cushion-cut morganites, these earrings define her meandering course, up to the milestone set to change the contours of her journey.</p>
            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Undulating waves imbibing a canvas of dual hues, have been illustrated through a clever combination of diamonds and emeralds. The round and baguette-cut diamonds draw a resounding halo, while pear-shaped emeralds form the core, adding a distinct vibrancy to the piece.</p>
        <!--     <div class="button-first-collection pop_btn">
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