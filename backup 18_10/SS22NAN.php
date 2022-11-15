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
<!--                             <source src="./images/product/product-shots/Gif 09.mp4" type="video/mp4">
 -->                       
                             <source src="./images/product/product-shots/a_rounded_glory.mp4" type="video/mp4">
 </video>
                        <!-- <video autoplay loop muted playsinline poster="./images/product/emergence-product.png">
                         <source src="./images/product/product-shots/product1.mp4" type="video/mp4">
                      </video> -->

                    </div>
                </div>
                <div class="col-lg-6 col-12 d-block" id="primary_content">
                    <div class="text-break p-0">
                        <h2 class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">A Rounded Glory</h2>
                        <p class="pro_code">
                            <strong>Product code :</strong>&nbsp; SS22NAN
                        </p>
                        <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Defined, clean lines distinguish the aesthetic of this piece. In a minimalistic affair, a cushion-cut emerald sits encrusted with princess-cut and brilliant round diamonds, in reflection of an animatedly dynamic pebble, glistening on the riverbed. <br>
                            A design marvel, the pendant offers versatility in style as it can be detached from the rose gold chain necklace, enabling the wearer to make a statement with or without the same.

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