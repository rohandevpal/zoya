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
        <img src="./images/product/SS22VBH-banner.png" class="dekstop-only">
        <img src="./images/product/SS22VBH-banner-resp.png" class="mobile-only">
    </section>
    <section class="single-video-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="produt-img-box">
                        <video autoplay loop muted playsinline>
                            <!--                             <source src="./images/product/product-shots/Gif 09.mp4" type="video/mp4">
 -->
                            <source src="./images/product/product-shots/SS22VBH.mp4" type="video/mp4">
                        </video>
                        <!-- <video autoplay loop muted playsinline poster="./images/product/emergence-product.png">
                         <source src="./images/product/product-shots/product1.mp4" type="video/mp4">
                      </video> -->

                    </div>
                </div>
                <div class="col-lg-6 col-12 d-block" id="primary_content1">
                    <div class="text-break p-0">
                        <h2
                            class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">
                            Crystalline Cascades Bracelet</h2>
                        <p class="pro_code">
                            <strong>Product code :</strong>&nbsp; SS22VBH
                        </p>
                        <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Born from
                            a crystalline glacier, of the Himalayas sheer, the river Indus unfurls. Her revered journey
                            past an area gelid into the world that lay beyond lies interpreted through an asymmetrical
                            array, adorned alternatively with frosty baguette and warm champagne diamonds. A cushion-cut
                            morganite lies encrusted at the centre of the piece, her crowning jewel, a reflection of her
                            spirit in light of the seven.</p>
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
                            CRYSTALLINE CASCADES BRACELET
                        </h2>
                        <p class="textext-sm-center text-center text-lg-start text-md-start">Lorem ipsum dolor, sit amet
                            consectetur
                            adipisicing elit. Quasi, voluptatibus possimus. Quis asperiores optio quisquam. Harum
                            voluptatum nobis
                            inventore laboriosam, perferendis rerum natus numquam officiis asperiores eaque est, quidem
                            recusandae? Ut
                            laboriosam quis nihil corporis inventore illum temporibus officiis voluptate quod tempora
                            sed eum est
                            natus vero quam, sapiente quibusdam?</p>
                    </div>
                    <div class="text-break animateIT p-0" style="display:none" id="secondry_content">
                        <h2
                            class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">
                            CRYSTALLINE CASCADES BRACELET
                        </h2>

                        <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">Structural
                            Quotient: Multiple-slices - Depicting Mountain Ridges </p>
                    </div>
                    <div class="text-break animateIT p-0" style="display:none" id="secondry_content1">
                        <h2
                            class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">
                            CRYSTALLINE CASCADES BRACELET
                        </h2>

                        <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">5.74
                            carats cushion cut- Pinkish Morganite </p>
                    </div>
                    <div class="text-break animateIT p-0" style="display:none" id="secondry_content2">
                        <h2
                            class="text-dark text-uppercase text-dark text-uppercase text-sm-center text-center text-lg-start text-md-start">
                            CRYSTALLINE CASCADES BRACELET
                        </h2>

                        <p class="text-dark text-dark text-sm-center text-center text-lg-start text-md-start">
                            Irregularity: Alternating baguette-cut and champagne diamonds</p>
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
    <section class="btn-box text-center">
        <div class="container">
            <div class="col-lg-12">
                <div class="button-first-collection pop_btn">
                    <button type="button" id="button-collection-one" id="contact-btn" data-bs-toggle="modal"
                        data-bs-target="#schedulein" class="d-block bookapt1">Book an Appointment</button>
                </div>
            </div>
        </div>
    </section>
    <script>

        /*js for change content on click for 10 products*/

        //product 1
        const cng_content = document.querySelector('#cng_content');
        const cng_content1 = document.querySelector('#cng_content2');
        const cng_content2 = document.querySelector('#cng_content3');
        const pc = document.querySelector('#primary_content1');
        const secondry_content = document.querySelector('#secondry_content');
        const secondry_content1 = document.querySelector('#secondry_content1');
        const secondry_content2 = document.querySelector('#secondry_content2');

        //defining function for change content
        cng_content.addEventListener('click', () => {
            primary_content.style.display = "none";
            primary_content.style.background = "red";
            secondry_content.style.display = "flex";
            secondry_content1.style.display = "none";
            secondry_content2.style.display = "none";
        });
        cng_content1.addEventListener('click', () => {
            primary_content.style.display = "none";
            secondry_content.style.display = "none";
            secondry_content1.style.display = "flex";
            secondry_content2.style.display = "none";
        });
        cng_content2.addEventListener('click', () => {
            primary_content.style.display = "none";
            secondry_content.style.display = "none";
            secondry_content1.style.display = "none";
            secondry_content2.style.display = "flex";
        });
    </script>
    <?php

    include('./includes/footer.php')
        ?>