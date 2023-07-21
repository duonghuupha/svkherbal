<?php
$item = $this->_Data->get_block_5();
?>
<section class="section section-xxl bg-image-1 text-md-start">
    <div class="container">
        <div class="row row-40 row-md-60 justify-content-center align-items-xl-center">
            <div class="col-md-11 col-lg-5">
                <h3 class="title-style-4 wow fadeInRight" data-wow-delay=".3s">
                    <?php echo $item[0]['title'] ?>
                </h3>
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs-1-1">
                            <?php echo $item[0]['content'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-11 col-lg-7">
                <div class="slick-slider-1 inset-xl-left-35">
                    <!-- Slick Carousel-->
                    <div class="slick-slider carousel-parent slick-nav-1 slick-nav-2" id="carousel-parent"
                        data-items="1" data-autoplay="true" data-slide-effect="true" data-child="#child-carousel"
                        data-for="#child-carousel" data-arrows="true">
                        <div class="item">
                            <img src="<?php echo URL_IMAGE.'/block/'.$item[0]['image'] ?>" 
                                alt=""
                                width="634" 
                                height="373" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>