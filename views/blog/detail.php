<?php
$item = $this->json;
?>
        <section class="breadcrumbs-custom">
            <div class="parallax-container" data-parallax-img="<?php echo URL.'/styles/' ?>images/bg-blog.jpg">
                <div class="breadcrumbs-custom-body parallax-content context-dark">
                    <div class="container">
                        <h2 class="breadcrumbs-custom-title">Blog Post</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Shop-->
        <section class="section section-xl bg-default text-md-start">
            <div class="container">
                <div class="row row-50 row-md-60">
                    <div class="col-lg-12 col-xl-12">
                        <div class="inset-xl-right-100">
                            <div class="row row-50 row-md-60 row-lg-80">
                                <div class="col-12">
                                    <article class="post post-modern-1 box-xxl">
                                        <div class="post-modern-panel">
                                            <div>
                                                <a class="post-modern-tag" href="#">
                                                    <?php echo $item[0]['category'] ?>
                                                </a>
                                            </div>
                                            <div>
                                                <time class="post-modern-time" datetime="<?php echo date("Y-m-d", strtotime($item[0]['create_at'])) ?>">
                                                    <?php echo date("F d, Y", strtotime($item[0]['create_at'])) ?>
                                                </time>
                                            </div>
                                        </div>
                                        <h3 class="post-modern-title"><?php echo $item[0]['title'] ?></h3>
                                        <?php
                                        if($item[0]['display_img_detail']== 0){
                                        ?>
                                        <div class="post-modern-figure">
                                            <img src="<?php echo URL_IMAGE.'/blogs/content/'.$item[0]['image'] ?>" alt="" width="800" height="394" />
                                        </div>
                                        <?php
                                        }
                                        ?>
                                        <div><?php echo $item[0]['content'] ?></div>
                                    </article>
                                    <div class="single-post-bottom-panel">
                                        <div class="group-sm group-justify">
                                            <div>
                                                <div class="group-sm group-tags">
                                                    <a class="link-tag" href="#">svkherbl</a>
                                                    <a class="link-tag" href="#">lanui.vn</a>
                                                    <a class="link-tag" href="#">naturem.us</a>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="group-xs group-middle">
                                                    <span class="list-social-title">Share</span>
                                                    <div>
                                                        <ul class="list-inline list-social list-inline-sm">
                                                            <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                                            <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                                            <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                                            <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h6 class="single-post-title"><?php echo $this->_Language->array_lang('title_extra') ?></h6>
                                    <div class="row row-30">
                                        <?php
                                        foreach($this->json_extra as $row){
                                            $width = 370; $height = 239;
                                            $img_src = $this->_Convert->convert_img('blogs/content/', $row['image'], $width, $height);
                                        ?>
                                        <div class="col-sm-6">
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
                                                        <a href="<?php echo URL.'/'.$this->_Convert->vn2latin($row['title'], true).'-post-'.base64_encode($row['id']).'.html' ?>"><?php echo $row['title'] ?></a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>