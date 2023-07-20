<?php
$item = $this->_Data->get_block_9();
$json = $this->_Data->get_data_block_9($item[0]['link']);
?>
<section class="section section-xxl bg-default">
    <div class="container">
        <h2 class="title-style-3 wow fadeScale"><?php echo $item[0]['title'] ?></h2>
        <div class="row row-lg row-30">
            <?php
            $i = 0;
            foreach($json as $row){
                $i++;
                $class = ($i % 2 == 0) ? 'fadeInLeft' : 'fadeInRight'; $width = '550'; $height = '247';
                $img_src = $this->_Convert->convert_img('blogs/content/', $row['image'], $width, $height); 
            ?>
            <div class="col-sm-6 wow <?php echo $class ?>">
                <!-- Post Creative-->
                <article class="post post-lisa block-2">
                    <div class="post-lisa-content">
                        <h4 class="post-lisa-title">
                            <a href="blog-post.html"
                            title="<?php echo $row['title'] ?>">
                                <?php echo $row['title'] ?>
                            </a>
                        </h4>
                        <div class="post-lisa-time">
                            <time datetime="<?php echo date("Y-m-d", strtotime($row['create_at'])) ?>"><?php echo date("F d, Y", strtotime($row['create_at'])) ?></time>
                        </div>
                    </div>
                    <a class="post-lisa-figure" href="blog-post.html">
                        <img src="<?php echo URL_IMAGE.'/blogs/content/'.$width.'x'.$height.'/'.$img_src ?>" 
                            alt="<?php echo $row['title'] ?>" width="550" height="247" />
                    </a>
                </article>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>