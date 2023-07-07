<!-- New products-->
<section class="section section-xxl bg-default">
    <div class="container">
        <h2 class="title-style-3 wow fadeScale">New products</h2>
        <div class="row row-30 justify-content-center align-items-center">
            <div class="col-md-9 col-lg-6">
                <div class="owl-nav-1 owl-nav-2">
                    <div class="owl-style-14">
                        <!-- Owl Carousel-->
                        <div class="owl-carousel" 
                            data-items="1" 
                            data-autoplay="true" 
                            data-mouse-drag="true"
                            data-navigation-class=".owl-nav-1">
                            <!-- Product Terri-->
                            <article class="product-terri">
                                <h3 class="product-terri-title">
                                    <a href="single-product.html">Grapefruits</a>
                                </h3>
                                <div class="product-terri-price-wrap">
                                    <div class="product-terri-price product-terri-price-old">$30.00</div>
                                    <div class="product-terri-price">$23.00</div>
                                </div>
                                <div class="product-terri-figure">
                                    <img src="<?php echo URL.'/styles/' ?>images/product-big-7-344x250.png" alt="" width="344" height="250" />
                                </div>
                            </article>
                            <!-- Product Terri-->
                            <article class="product-terri">
                                <h3 class="product-terri-title">
                                    <a href="single-product.html">Watermelons</a>
                                </h3>
                                <div class="product-terri-price-wrap">
                                    <div class="product-terri-price product-terri-price-old">$28.00</div>
                                    <div class="product-terri-price">$17.00</div>
                                </div>
                                <div class="product-terri-figure"><img
                                        src="<?php echo URL.'/styles/' ?>images/product-big-8-358x243.png" alt=""
                                        width="358" height="243" />
                                </div>
                            </article>
                        </div>
                        <div class="countdown-mini" 
                            data-countdown="data-countdown" 
                            data-to="2023-06-26">
                            <div class="countdown-block countdown-block-hours">
                                <div class="countdown-inner-block">
                                    <svg class="countdown-circle" x="0" y="0" width="90" height="90"
                                        viewbox="0 0 100 100" data-progress-hours="">
                                        <circle class="countdown-circle-bg" cx="50" cy="50" r="41"></circle>
                                        <circle class="countdown-circle-fg clipped" cx="50" cy="50" r="48"></circle>
                                    </svg>
                                    <div class="countdown-wrap">
                                        <h4 class="countdown-counter countdown-mini-counter" data-counter-hours="">00</h4>
                                    </div>
                                </div>
                                <div class="countdown-mini-title">HRS</div>
                            </div>
                            <div class="countdown-block countdown-block-minutes">
                                <div class="countdown-inner-block">
                                    <svg class="countdown-circle" x="0" y="0" width="90" height="90"
                                        viewbox="0 0 100 100" data-progress-minutes="">
                                        <circle class="countdown-circle-bg" cx="50" cy="50" r="41"></circle>
                                        <circle class="countdown-circle-fg clipped" cx="50" cy="50" r="48"></circle>
                                    </svg>
                                    <div class="countdown-wrap">
                                        <h4 class="countdown-counter countdown-mini-counter" data-counter-minutes="">00</h4>
                                    </div>
                                </div>
                                <div class="countdown-mini-title">MIN</div>
                            </div>
                            <div class="countdown-block countdown-block-seconds">
                                <div class="countdown-inner-block">
                                    <svg class="countdown-circle" x="0" y="0" width="90" height="90"
                                        viewbox="0 0 100 100" data-progress-seconds="">
                                        <circle class="countdown-circle-bg" cx="50" cy="50" r="41"></circle>
                                        <circle class="countdown-circle-fg clipped" cx="50" cy="50" r="48"></circle>
                                    </svg>
                                    <div class="countdown-wrap">
                                        <h4 class="countdown-counter countdown-mini-counter" data-counter-seconds="">00</h4>
                                    </div>
                                </div>
                                <div class="countdown-mini-title">SEC</div>
                            </div>
                        </div>
                        <a class="button button-sm button-shadow-2 button-primary button-zakaria" href="grid-shop.html">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-lg-6">
                <div class="row row-30 row-md-40">
                    <?php
                    for($i = 1; $i <= 4; $i++){
                        $delay = ($i % 2 == 0) ? 'data-wow-delay=".1s"' : "";
                    ?>
                    <div class="col-sm-6 wow fadeInDown" <?php echo $delay ?>>
                        <!-- Product-->
                        <article class="product product-3">
                            <div class="product-body">
                                <div class="product-figure">
                                    <img src="<?php echo URL.'/styles/' ?>images/product-5-204x156.png" alt="" width="204" height="156" />
                                </div>
                                <h5 class="product-title"><a href="single-product.html">Strawberries</a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price">$15.00</div>
                                </div>
                            </div>
                            <div class="product-button-wrap">
                                <div class="product-button">
                                    <a class="button button-style-2 button-zakaria fl-bigmug-line-search74" href="single-product.html"></a>
                                </div>
                                <div class="product-button">
                                    <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>