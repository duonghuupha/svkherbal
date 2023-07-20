<?php
$json = $this->_Data->get_block_10();
?>
<section class="section section-lg bg-image-1">
    <div class="container">
        <div class="owl-carousel owl-style-2" 
            data-items="2" 
            data-sm-items="3" 
            data-md-items="4" 
            data-lg-items="5"
            data-margin="30" 
            data-dots="true">
            <?php
            foreach($json as $row){
                $width = '120'; $height = '114';
                $img_src = $this->_Convert->convert_img('/block/', $row['image'], $width, $height); 
            ?>
            <a class="clients-classic" href="<?php echo $row['link'] ?>">
                <img src="<?php echo URL_IMAGE.'/block/'.$width.'x'.$height.'/'.$img_src ?>" 
                    alt="<?php echo $row['title'] ?>" 
                    width="120"
                    height="114" />
                </a>
            <?php
            }
            ?>
        </div>
    </div>
</section>