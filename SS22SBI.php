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
              <source src="./images/product/product-shots/product3.mp4" type="video/mp4">
            </video>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="text-break p-0">
            <h2 class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">Through the Green Valley</h2>
            <p class="pro_code">
              <strong>Product code :</strong>&nbsp; SS22SBI
            </p>
            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Sunlight sparkles over the river as she gushes through valleys and meadows. Traversing paths unknown, her meander is framed forever in an intricately linked gold framework embellished with piercing diamonds. Determined in her path, she breaks ephemerally over boulders covered in moss. Emeralds glistening from their depths dot the landscape she carves.</p>
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