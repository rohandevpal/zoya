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
            <h2
              class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">
              Through the Green Valley</h2>
            <p class="pro_code">
              <strong>Product code :</strong>&nbsp; SS22SBI
            </p>
            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Sunlight sparkles over
              the river as she gushes through valleys and meadows. Traversing paths unknown, her meander is framed
              forever in an intricately linked gold framework embellished with piercing diamonds. Determined in her
              path, she breaks ephemerally over boulders covered in moss. Emeralds glistening from their depths dot the
              landscape she carves.</p>
            <div class="button-first-collection pop_btn">
              <button type="button" id="button-collection-one" id="contact-btn" data-bs-toggle="modal"
                data-bs-target="#schedulein" class="d-block bookapt1">Book an Appointment</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="product-box single-video-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="text-break p-0" id="primary_content1" class="primary_content">
            <h2
              class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">
              THROUGH THE GREEN VALLEY
            </h2>
            <p class="textext-sm-center text-center text-lg-start text-md-start">Geometric structures aligns the central
              gemstone set horizontally</p>
          </div>
          <div class="text-break animateIT p-0" style="display:none" id="secondry_content">
            <h2
              class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">
              THROUGH THE GREEN VALLEY
            </h2>
            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Geometric structures
              aligns the central gemstone set horizontally</p>
          </div>
          <div class="text-break animateIT p-0" style="display:none" id="secondry_content1">
            <h2
              class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">
              THROUGH THE GREEN VALLEY
            </h2>
            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Centre Emerald stone-
              2.92cts- each accompanied by round-cut diamonds</p>
          </div>
          <div class="text-break animateIT p-0" style="display:none" id="secondry_content2">
            <h2
              class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">
              THROUGH THE GREEN VALLEY
            </h2>
            <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">
              Either ends of the piece coalesce into the vision, the pear cut solitaire is enhanced in a unique setting
              giving a kite-shaped outer form.</p>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="produt-img-box">
            <span id="p10_cng_content"><img src="./images/Group 293.png" alt="" class="img-fluid"></span>
            <span id="p10_cng_content2"><img src="./images/Group 301.png" alt="" class="img-fluid"></span>
            <span id="p10_cng_content3"><img src="./images/Group 302.png" alt="" class="img-fluid"></span>
            <img id="img_small" src="./images/product/SS22SBI-pro.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    //product 10
    const p10_cng_content = document.querySelector("#p10_cng_content");
    const p10_cng_content1 = document.querySelector("#p10_cng_content2");
    const p10_cng_content2 = document.querySelector("#p10_cng_content3");
    const p10_primary_content = document.querySelector("#primary_content1");
    const p10_secondry_content = document.querySelector("#secondry_content");
    const p10_secondry_content1 = document.querySelector("#secondry_content1");
    const p10_secondry_content2 = document.querySelector("#secondry_content2");

    //defining function for change content
    p10_cng_content.addEventListener("click", () => {
      p10_primary_content.style.display = "none";
      p10_secondry_content.style.display = "flex";
      p10_secondry_content1.style.display = "none";
      p10_secondry_content2.style.display = "none";
    });
    p10_cng_content1.addEventListener("click", () => {
      p10_primary_content.style.display = "none";
      p10_secondry_content.style.display = "none";
      p10_secondry_content1.style.display = "flex";
      p10_secondry_content2.style.display = "none";
    });
    p10_cng_content2.addEventListener("click", () => {
      p10_primary_content.style.display = "none";
      p10_secondry_content.style.display = "none";
      p10_secondry_content1.style.display = "none";
      p10_secondry_content2.style.display = "flex";
    });

  </script>
  <?php
  include('./includes/footer.php')
    ?>