<?php
include('./includes/header.php');
include('./includes/form.php');
include('./includes/script.php');
?>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWM74VD" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <section class="inner-header">
    <?php
    include('./includes/mainnav.php');
    include('./includes/mainlogo.php');
    ?>
  </section>
  <div class="header-height"></div>
  <section class="banner-section">
    <img src="./images/banners/banner-ZJ22NBN.png" class="dekstop-only">
    <img src="./images/banners/banner-resp-ZJ22NBN.png" class="mobile-only">
  </section>
  <section class="product-box single-video-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="produt-img-box">
            <video autoplay loop muted playsinline>
              <!--               <source src="./images/product/product-shots/product1.mp4" type="video/mp4">
 -->
              <source src="./images/product/product-shots/sketch-ZJ22NBN.mp4" type="video/mp4">
            </video>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="text-break p-0">
            <h2
              class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">
              A Playful Meander </h2>
            <p class="pro_code">
              <strong>Product code :</strong>&nbsp; SS22NAH
            </p>
            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">The picturesque
              panorama of a meandering river, curiously weaving its way through moody terrain, remains encased in this
              analogue blend of tapered baguette and round-cut diamonds. Pear-shaped emeralds add a distinct definition,
              a homage to the riverbank carved out by her might. Stealing the centre stage, is a cushion-cut morganite,
              held in the delicate embrace of a basket carved out of white gold.</p>
            <!--  <div class="button-first-collection pop_btn">
              <button type="button" id="button-collection-one" id="contact-btn" data-bs-toggle="modal" data-bs-target="#schedulein" class="d-block bookapt1">Book an Appointment</button>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="product-box single-video-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="text-break p-0" id="primary_content">
            <h2
              class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">
              A PLAYFUL MEANDER

            </h2>
            <p class="textext-sm-center text-center text-lg-start text-md-start">Elongated V style
              silhouette with a central focus</p>
          </div>
          <div class="text-break animateIT p-0" style="display:none" id="secondry_content">
            <h2
              class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">
              A PLAYFUL MEANDER

            </h2>

            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Elongated V style
              silhouette with a central focus</p>
          </div>
          <div class="text-break animateIT p-0" style="display:none" id="secondry_content1">
            <h2
              class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">
              A PLAYFUL MEANDER

            </h2>

            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Meandering flow with
              baguette cut and brilliant diamonds along with pear-cut emeralds.</p>
          </div>
          <div class="text-break animateIT p-0" style="display:none" id="secondry_content2">
            <h2
              class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">
              A PLAYFUL MEANDER

            </h2>

            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">
              Centre stone- 11.72 cts Pinkish Morganite in cushion cut.</p>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="produt-img-box">
            <span id="cng_content"><img src="./images/Group 293.png" alt="" class="img-fluid"></span>
            <span id="cng_content2"><img src="./images/Group 301.png" alt="" class="img-fluid"></span>
            <span id="cng_content3"><img src="./images/Group 302.png" alt="" class="img-fluid"></span>
            <img id="img_small" src="./images/product/leap-product_test.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="zy-lifestyle-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="zy-lifestyle-image">
            <img src="./images/lifestyle/SS22NAH-lifestyle1.png">
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="zy-lifestyle-image">
            <video autoplay loop muted playsinline>
              <source src="./images/product/product-shots/product1.mp4" type="video/mp4">
            </video>
            <!--               <img src="./images/lifestyle/calm_ss22nah.jpg">
 -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="zy-btm-footer">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="like-what-you-see-box text-center">
            <h2>LIKE WHAT YOU SEE?</h2>
            <p>Sign up for a personalised Zoya experience with one of our in-house stylists.</p>
            <button type="button" id="button-collection-one" id="contact-btn" data-bs-toggle="modal"
              data-bs-target="#schedulein" class="d-block bookapt1">Book an Appointment</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  include('./includes/footer.php')
    ?>