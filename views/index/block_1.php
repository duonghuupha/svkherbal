<?php
$json = $this->_Data->get_block_1();
?>
<section class="section swiper-container swiper-slider swiper-slider-6 swiper-nav-1" data-loop="true">
    <div class="swiper-wrapper text-sm-start">
        <?php
        foreach($json as $row){
        ?>
        <div class="swiper-slide" 
            data-slide-bg="<?php echo URL_IMAGE.'/slide/'.$row['image'] ?>"></div>
        <?php
        }
        ?>
    </div>
    <!-- Swiper Pagination-->
    <div class="swiper-pagination"></div>
    <!-- Swiper Navigation-->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</section>