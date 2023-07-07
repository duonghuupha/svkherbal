
        <section class="breadcrumbs-custom">
            <div class="parallax-container" data-parallax-img="<?php echo URL.'/styles/' ?>images/bg-blog.jpg">
                <div class="breadcrumbs-custom-body parallax-content context-dark">
                    <div class="container">
                        <h2 class="breadcrumbs-custom-title">Grid Blog</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Button Sizes-->
        <section class="section section-xl bg-default">
            <div class="container">
                <div class="row row-30">
                    <?php
                    for($i = 1; $i <= 6; $i++){
                    ?>
                    <div class="col-sm-6 col-lg-4">
                        <!-- Post Classic-->
                        <article class="post post-classic box-md">
                            <a class="post-classic-figure" href="blog-post.html">
                                <img src="<?php echo URL.'/styles/' ?>images/post-1-370x239.jpg" alt="" width="370" height="239" />
                            </a>
                            <div class="post-classic-content">
                                <div class="post-classic-time">
                                    <time datetime="2022-08-09">August 9, 2022</time>
                                </div>
                                <h5 class="post-classic-title">
                                    <a href="blog-post.html">Top 5 Easy and Cheap Organic Breakfast Recipes</a>
                                </h5>
                                <p class="post-classic-text">
                                    Est velox nuptia, cesaris. Est dexter turpis, cesaris. Cum
                                    nixus persuadere, omnes fluctuies promissio flavum
                                </p>
                            </div>
                        </article>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="pagination-wrap">
                    <!-- Bootstrap Pagination-->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item page-item-control disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span class="icon" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li class="page-item active"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item page-item-control">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span class="icon" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>