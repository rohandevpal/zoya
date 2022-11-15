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
  <section class="product-box">
    <div class="container">
      <div class="row">
        <!-- <span id="cng_content">1</span> -->
        <div class="col-lg-6 col-12">
          <div class="produt-img-box">
            <video autoplay loop muted playsinline>
              <source src="./images/product/product-shots/Gif 07.mp4" type="video/mp4">
            </video>
            <!-- <video autoplay loop muted playsinline poster="./images/product/emergence-product.png">
                         <source src="./images/product/product-shots/product1.mp4" type="video/mp4">
                      </video> -->

          </div>
        </div>
        <div class="col-lg-6 col-12 d-block" id="primary_content">
          <div class="text-break p-0">
            <h2 class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">The Dance of the River</h2>
            <p class="pro_code">
              <strong>Product code :</strong>&nbsp; SS22NAC
            </p>
            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Cascading over mountains and valleys, the river dances to a rhythm of her own. Ripples studded with baguette diamonds are interspersed with emeralds in a fine exhibition of the terrain through which she traveled. The intoxicating scent of pines, water and earth remains sealed within a memory she carries with her. The stages of her flow culminate in a showstopper pendant with an oval morganite pendant surrounded by square emeralds and roaring tassels.
            </p>
            <div class="button-first-collection pop_btn">
              <button type="button" id="button-collection-one" id="contact-btn" data-bs-toggle="modal" data-bs-target="#schedulein" class="d-block bookapt1">Book an Appointment</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  include('./includes/footer.php')
  ?>