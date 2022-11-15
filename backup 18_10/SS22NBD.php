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
                            <source src="./images/product/product-shots/Gif 10.mp4" type="video/mp4">
                        </video>
                        <!-- <img src="./images/product/leap-product-3.png"> -->
                        <!-- <video autoplay loop muted playsinline poster="./images/product/emergence-product.png">
                         <source src="./images/product/product-shots/product1.mp4" type="video/mp4">
                      </video> -->

                    </div>
                </div>
                <div class="col-lg-6 col-12 d-block" id="primary_content">
                    <div class="text-break p-0">
                        <h2 class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">The Gleaming Vignette of a River </h2>
                        <p class="pro_code">
                            <strong>Product code :</strong>&nbsp; SS22NBD
                        </p>
                        <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Dynamic and dramatic, a rose gold shank studded with luminous diamonds recalls the ebullient journey of a most fabled river. The eye is drawn to the naturally picturesque vignette of her alacrity, as she prepares to leap into a waterfall. An emerald-cut morganite and oval emeralds lie fringed with diamonds, evocative of her magnificence. Her tremendous journey is cast forever through this flamboyant display.
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