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
    <img src="./images/banners/SS22VAM-banner.png" class="dekstop-only">
    <img src="./images/banners/banner-resp-SS22VAM.png" class="mobile-only">
  </section>
  <section class="single-video-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
         <!--  <div class="produt-img-box">
         
             <img src="./images/product/SS22VAM.png">

          </div> -->
            <div class="produt-img-box">
            <video autoplay loop muted playsinline>
                <source src="./video/web-videos/leap/Z09.mp4" type="video/mp4">
            </video>
            <!-- <video autoplay loop muted playsinline poster="./images/product/emergence-product.png">
                         <source src="./images/product/product-shots/product1.mp4" type="video/mp4">
                      </video> -->

          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="text-break p-0">
            <h2 class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">Emerald Riversong Bracelet</h2>
            <p class="pro_code">
              <strong>Product code :</strong>&nbsp; SS22VAM
            </p>
            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Traced in emeralds and diamonds is the grace of her flow. Over the course of her journey she meanders and turns, leaving her distinctive mark upon the terrain. Her gorgeous leap is mapped in marquise cut diamonds, her perennial flow in glinting emeralds. A large pear shaped emerald in the centre synchronizes her highs and lows harmoniously, in sunshine or in the rain.</p>
           <!--  <div class="button-first-collection pop_btn">
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