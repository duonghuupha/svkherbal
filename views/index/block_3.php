<?php
$json = $this->_Data->get_block_3();
?>
<section class="section section-xxl section-bottom-0 section-inset-5 bg-gray-100 text-sm-start bg-image"
    style="background-image: url(<?php echo URL.'/styles/' ?>images/fruit-farm/bg-image-2.png);">
    <div class="container">
        <div class="row justify-content-sm-end">
            <div class="col-sm-9 col-md-8 col-lg-7 col-xl-6">
                <h3 class="title-style-3 wow fadeInRight">
                    Nền tảng & khoa học
                </h3>
                <div class="swiper-container swiper-slider swiper-slider-custom swiper-slider-7 swiper-scrollbar-1"
                    data-autoplay="5000" data-direction="vertical" data-margin="25" data-slides="auto"
                    data-simulate-touch="true" data-mousewheel="true">
                    <div class="swiper-wrapper">
                        <?php
                        foreach($json as $row){
                        ?>
                        <div class="swiper-slide">
                            <article class="box-icon-kelly block-1">
                                <div class="unit unit-spacing-lg flex-column flex-sm-row text-center text-sm-start">
                                    <div class="unit-body">
                                        <h4 class="box-icon-kelly-title">
                                            <a href="<?php echo $row['link'] ?>">
                                            <?php echo $row['title'] ?>
                                        </a>
                                        </h4>
                                        <p class="box-icon-kelly-text">
                                            <?php echo $row['content'] ?>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="swiper-slide swiper-slide-last"></div>
                    </div>
                    <!-- Siwper Scrollbar-->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </div>
</section>