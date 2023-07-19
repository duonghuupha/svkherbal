<?php
$item = $this->_Data->get_block_4();
$json = $this->_Data->get_data_block_4($item[0]['link']);
?>
<section class="section section-xxl bg-default">
    <div class="container">
        <h2 class="title-style-3 wow fadeScale"><?php echo $item[0]['title'] ?></h2>
        <div class="row row-30 justify-content-center align-items-center">
            <div class="col-md-12 col-lg-12">
                <div class="row row-30 row-md-40">
                    <?php
                    if(count($json) > 0){
                        $i = 0;
                        foreach($json as $row){
                            $i++;
                            $delay = ($i % 2 == 0) ? 'data-wow-delay=".1s"' : "";
                            $width = 306; $height = 234;
                            $img_src = $this->_Convert->convert_img('blogs/content/', $row['image'], $width, $height);
                    ?>
                    <div class="col-sm-4 wow fadeInDown" <?php echo $delay ?>>
                        <!-- Product-->
                        <article class="product product-3">
                            <div class="product-body">
                                <div class="product-figure">
                                    <img src="<?php echo URL_IMAGE.'/blogs/content/'.$width.'x'.$height.'/'.$img_src ?>" 
                                    alt="<?php echo $row['title'] ?>" width="306" height="234" />
                                </div>
                                <h5 class="product-title">
                                    <a href="<?php echo URL.'/'.$this->_Convert->vn2latin($row['title'], true).'-post-'.base64_encode($row['id']).'.html' ?>">
                                        <?php echo $row['title'] ?>
                                    </a>
                                </h5>
                            </div>
                            <div class="product-button-wrap">
                                <div class="product-button">
                                    <a class="button button-style-2 button-zakaria fl-bigmug-line-search74" 
                                        href="<?php echo URL.'/'.$this->_Convert->vn2latin($row['title'], true).'-post-'.base64_encode($row['id']).'.html' ?>"></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>