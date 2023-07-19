<?php
$json = $this->_Data->get_block_2();
?>
<section class="section bg-default">
    <!-- Owl Carousel-->
    <div class="owl-carousel owl-style-13" 
        data-items="1" 
        data-sm-items="2" 
        data-lg-items="3" 
        data-xxl-items="3"
        data-dots="true" 
        data-mouse-drag="false">
        <!-- Product Dawn-->
        <?php
        foreach($json as $row){
        ?>
        <a class="product-dawn product-dawn-bg-1" href="<?php echo $row['link'] ?>">
            <div class="unit unit-spacing-0 align-items-center">
                <div class="unit-left">
                    <div class="product-dawn-figure">
                        <img src="<?php echo URL_IMAGE.'/block/'.$row['image'] ?>" alt="" width="234" height="362" />
                    </div>
                </div>
                <div class="unit-body">
                    <div class="product-dawn-title">
                        <div class="heading-5 product-dawn-title-small"><?php echo $row['title'] ?></div>
                    </div>
                    <div class="button button-sm button-icon-3 product-dawn-button">
                        <span  class="mdi mdi-arrow-right"></span>
                    </div>
                </div>
            </div>
        </a>
        <?php
        }
        ?>
    </div>
</section>