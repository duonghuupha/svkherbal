<!-- New products-->
<section class="section section-xxl bg-default">
    <div class="container">
        <h2 class="title-style-3 wow fadeScale">Sản phẩm của chúng tôi</h2>
        <div class="row row-30 justify-content-center align-items-center">
            <div class="col-md-12 col-lg-12">
                <div class="row row-30 row-md-40">
                    <?php
                    for($i = 1; $i <= 8; $i++){
                        $delay = ($i % 2 == 0) ? 'data-wow-delay=".1s"' : "";
                    ?>
                    <div class="col-sm-3 wow fadeInDown" <?php echo $delay ?>>
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