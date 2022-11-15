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
    <img src="./images/product/SS22NAR-banner.png" class="dekstop-only">
    <img src="./images/product/SS22NAR-banner-resp.png" class="mobile-only">
  </section>
    <section class="product-box single-video-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="produt-img-box">
                    <video autoplay loop muted playsinline>
                        <source src="./images/product/product-shots/Z07.mp4" type="video/mp4">
                      </video>
                        <!-- <video autoplay loop muted playsinline poster="./images/product/emergence-product.png">
                         <source src="./images/product/product-shots/product1.mp4" type="video/mp4">
                      </video> -->

                    </div>
                </div>
                <div class="col-lg-6 col-12 d-block" id="primary_content">
                    <div class="text-break p-0">
                        <h2 class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">Tranquil Vales</h2>
                        <p class="pro_code">
                            <strong>Product code :</strong>&nbsp; SS22NAR
                        </p>
                        <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Like the storm that ushers in calm, the roaring cascades of a river of old, makes way for calm rippling waters. Asymmetrically assembled morganites encrusted with round emeralds imitate the spellbinding lustre of pink skies permeating the waters. An intricately braided gold chain draws a serene balance within the chaos of irregularity, depicting her multifaceted nature.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!--  <section class="product-box1  mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="produt-img-box">
                        <video autoplay loop muted playsinline>
                          
                            <source src="./images/product/product-shots/v5mp4.mp4" type="video/mp4">
   
                        </video>

                    </div>
                </div>
            </div>
        </div>
    </section> -->
  <!--     <section class="btn-box text-center">
      <div class="container">
      <div class="col-lg-12">
        <div class="button-first-collection pop_btn">
              <button type="button" id="button-collection-one" id="contact-btn" data-bs-toggle="modal" data-bs-target="#schedulein" class="d-block bookapt1">Book an Appointment</button>
            </div>
      </div>
    </div>
    </section> -->
     <section class="zy-lifestyle-box">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="zy-lifestyle-image">
              <img src="./images/product/SS22NAR-lifestyle1.png">
            </div>
          </div>
          <div class="col-lg-6 col-12">
           <div class="zy-lifestyle-image">
              <img src="./images/product/SS22NAR-lifestyle2.png">
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
              <button type="button" id="button-collection-one" id="contact-btn" data-bs-toggle="modal" data-bs-target="#schedulein" class="d-block bookapt1">Book an Appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include('./includes/footer.php')
    ?>