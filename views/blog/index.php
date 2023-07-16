<?php
$item = $this->info_menu;
$jsonObj = $this->jsonObj; $perpage = $this->perpage; $pages = $this->page;
?>
        <section class="breadcrumbs-custom">
            <div class="parallax-container" data-parallax-img="<?php echo URL.'/styles/' ?>images/bg-blog.jpg">
                <div class="breadcrumbs-custom-body parallax-content context-dark">
                    <div class="container">
                        <h2 class="breadcrumbs-custom-title"><?php echo $item[0]['title'] ?></h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Button Sizes-->
        <section class="section section-xl bg-default">
            <div class="container">
                <div class="row row-30">
                    <?php
                    foreach($jsonObj['rows'] as $row){
                        $width = 370; $height = 239;
                        $img_src = $this->_Convert->convert_img('blogs/content/', $row['image'], $width, $height);
                    ?>
                    <div class="col-sm-6 col-lg-4">
                        <!-- Post Classic-->
                        <article class="post post-classic box-md">
                            <a class="post-classic-figure" href="<?php echo URL.'/'.$this->_Convert->vn2latin($row['title'], true).'-post-'.base64_encode($row['id']).'.html' ?>">
                                <img src="<?php echo URL_IMAGE.'/blogs/content/'.$width.'x'.$height.'/'.$img_src ?>" 
                                alt="<?php echo $row['title'] ?>" width="370" height="239" />
                            </a>
                            <div class="post-classic-content">
                                <div class="post-classic-time">
                                    <time datetime="<?php echo date("Y-m-d", strtotime($row['create_at'])) ?>">
                                        <?php echo date("F d, Y", strtotime($row['create_at'])) ?>
                                    </time>
                                </div>
                                <h5 class="post-classic-title">
                                    <a href="<?php echo URL.'/'.$this->_Convert->vn2latin($row['title'], true).'-post-'.base64_encode($row['id']).'.html' ?>">
                                        <?php echo $row['title'] ?>
                                    </a>
                                </h5>
                                <p class="post-classic-text">
                                    <?php echo $this->_Convert->cut($row['description'], 150) ?>
                                </p>
                            </div>
                        </article>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <?php
                if($jsonObj['total'] > $perpage){
                    $pagination = $this->_Convert->pagination($jsonObj['total'], $pages, $perpage);
                    $createlink = $this->_Convert->createLinks($jsonObj['total'], $perpage, $pagination['number'], 1);
                ?>
                <div class="pagination-wrap">
                    <!-- Bootstrap Pagination-->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <?php echo $createlink ?>
                        </ul>
                    </nav>
                </div>
                <?php
                }
                ?>
            </div>
        </section>