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
              <source src="./images/product/product-shots/score_of_perspectives.mp4" type="video/mp4">
        </video>
<!--             <img src="./images/product/emergence-product.png">
 -->            <!-- <video autoplay loop muted playsinline poster="./images/product/emergence-product.png">
                         <source src="./images/product/product-shots/product1.mp4" type="video/mp4">
                      </video> -->

          </div>
        </div>
        <div class="col-lg-6 col-12 d-block" id="primary_content">
          <div class="text-break p-0">
            <h2 class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">Score of Perspectives</h2>
            <p class="pro_code">
              <strong>Product code :</strong>&nbsp; SS22SAS
            </p>
            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">In a subtly florid statement, these earrings
              dazzle - rendering an icy dream of stalactites and stalagmites adorning a cave of ice, through spikes of round-cut emeralds and sapphires. The image of a historic river emerging from this scene has been carved into a channel of baguette-cut diamonds.
            </p>
            <div class="button-first-collection pop_btn">
              <button type="button" id="button-collection-one" id="contact-btn" data-bs-toggle="modal" data-bs-target="#schedulein" class="d-block bookapt1">Book an Appointment</button>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12 d-none" id="Secondry_content1">
          <div class="text-break p-0">
            <h2 class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">Score of Perspectives</h2>
            <p class="pro_code">
              <strong>Product code :</strong>&nbsp; SS22SAS
            </p>
            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">In a subtly florid statement, these earrings
              dazzle - rendering an icy dream of stalactites and stalagmites adorning a cave of ice, through spikes of round-cut emeralds and sapphires. The image of a historic river emerging from this scene has been carved into a channel of baguette-cut diamonds.</p>
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