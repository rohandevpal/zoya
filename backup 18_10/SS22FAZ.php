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
        <div class="col-lg-6 col-12">
          <div class="produt-img-box">
            <video autoplay loop muted playsinline>
<!--               <source src="./images/product/product-shots/product5.mp4" type="video/mp4">
 -->           
                            <source src="./images/product/product-shots/sparkling_rapids.mp4" type="video/mp4">

  </video>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="text-break p-0">
            <h2 class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">Sparkling Rapids</h2>
            <p class="pro_code">
              <strong>Product code :</strong>&nbsp; SS22FAZ
            </p>
            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">The boundless spirit of the river Indus, as she winds through a valley, is mapped in the geography of this ring. An emerald and pink morganite dazzle his piece, encased within pave-set baguette-cut diamonds, an artful reimagination of every curve and slope that she discovers and embraces.</p>
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