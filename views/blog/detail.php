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
                    <div class="col-lg-8 col-xl-9">
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
                                    <h6 class="single-post-title">Bài viết liên quan</h6>
                                    <div class="row row-30">
                                        <div class="col-sm-6">
                                            <!-- Post Classic-->
                                            <article class="post post-classic box-md">
                                                <a class="post-classic-figure" href="blog-post.html">
                                                    <img src="<?php echo URL.'/styles/' ?>images/post-1-370x239.jpg" alt="" width="370" height="239" />
                                                </a>
                                                <div class="post-classic-content">
                                                    <div class="post-classic-time">
                                                        <time datetime="2022-09-08">August 9, 2022</time>
                                                    </div>
                                                    <h5 class="post-classic-title">
                                                        <a href="blog-post.html">Top 5 Easy and Cheap Organic Breakfast Recipes</a>
                                                    </h5>
                                                    <p class="post-classic-text">Est velox nuptia, cesaris. Est dexter
                                                        turpis, cesaris. Cum nixus persuadere, omnes fluctuies promissio
                                                        flavum</p>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Post Classic-->
                                            <article class="post post-classic box-md">
                                                <a class="post-classic-figure" href="blog-post.html">
                                                    <img src="<?php echo URL.'/styles/' ?>images/post-2-370x239.jpg" alt="" width="370" height="239" />
                                                </a>
                                                <div class="post-classic-content">
                                                    <div class="post-classic-time">
                                                        <time datetime="2022-09-08">August 9, 2022</time>
                                                    </div>
                                                    <h5 class="post-classic-title">
                                                        <a href="blog-post.html">Everyday Dinner Choices for a Healthier, Happier You</a>
                                                    </h5>
                                                    <p class="post-classic-text">Sensorems peregrinatione in rugensis
                                                        civitas! Ubi est bi-color byssus? Velox, teres ollas recte
                                                        aperto de castus</p>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="aside row row-30 row-md-50 justify-content-md-between">
                            <div class="aside-item col-sm-6 col-lg-12">
                                <h6 class="aside-title">Bài viết mới</h6>
                                <div class="row row-20 row-lg-30 gutters-10">
                                    <?php
                                    for($i=  1; $i <= 4; $i++){
                                    ?>
                                    <div class="col-6 col-lg-12">
                                        <!-- Post Minimal-->
                                        <article class="post post-minimal">
                                            <div class="unit unit-spacing-sm flex-column flex-lg-row align-items-lg-center">
                                                <div class="unit-left">
                                                    <a class="post-minimal-figure" href="blog-post.html">
                                                        <img src="<?php echo URL.'/styles/' ?>images/post-mini-1-106x104.jpg" alt="" width="106" height="104" />
                                                    </a>
                                                </div>
                                                <div class="unit-body">
                                                    <p class="post-minimal-title">
                                                        <a href="blog-post.html">Why Organic Food is Full of Benefits</a>
                                                    </p>
                                                    <div class="post-minimal-time">
                                                        <time datetime="2022-03-15">March 15, 2022</time>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="aside-item col-sm-6 col-md-5 col-lg-12">
                                <h6 class="aside-title">Popular tags</h6>
                                <div class="group-sm group-tags">
                                    <a class="link-tag" href="#">Fruits</a>
                                    <a  class="link-tag" href="#">Vegetables</a>
                                    <a class="link-tag" href="#">Drinks</a>
                                    <a class="link-tag" href="#">Organic</a>
                                    <a class="link-tag" href="#">Food</a>
                                    <a class="link-tag" href="#">Smoothies</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>