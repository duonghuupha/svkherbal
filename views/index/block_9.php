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
                $class = ($i % 2 == 0) ? 'fadeInLeft' : 'fadeInRight';
            ?>
            <div class="col-sm-6 wow <?php echo $class ?>">
                <!-- Post Creative-->
                <article class="post post-lisa block-2">
                    <div class="post-lisa-content">
                        <h4 class="post-lisa-title">
                            <a href="blog-post.html"
                            title="<?php echo $row['title'] ?>">
                                <?php echo $this->_Convert->cut($row['title'], 40) ?>
                            </a>
                        </h4>
                        <div class="post-lisa-time">
                            <time datetime="2022-08-09">August 9, 2022</time>
                        </div>
                    </div>
                    <a class="post-lisa-figure" href="blog-post.html">
                        <img src="<?php echo URL.'/styles/' ?>images/fruit-farm/post-1-550x247.jpg" alt="" width="550"
                            height="247" />
                    </a>
                </article>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>