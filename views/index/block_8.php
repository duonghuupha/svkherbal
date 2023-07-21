<!-- Subscribe to Our Newsletter-->
<section class="parallax-container" data-parallax-img="<?php echo URL.'/styles/' ?>images/parallax-1.jpg">
    <div class="parallax-content section-xxl context-dark text-md-start">
        <div class="container">
            <div class="row row-30 justify-content-center align-items-center align-items-md-end">
                <div class="col-lg-3">
                    <h3 class="wow fadeInLeft" data-wow-delay=".1s"><?php echo $this->_Language->array_lang('title_sub_home') ?></h3>
                </div>
                <div class="col-lg-8 col-xl-9 inset-lg-bottom-10">
                    <!-- RD Mailform-->
                    <form class="rd-form rd-mailform rd-form-inline form-lg rd-form-text-center"
                        data-form-output="form-output-global" data-form-type="subscribe" method="post"
                        action="bat/rd-mailform.php">
                        <div class="form-wrap wow fadeInUp">
                            <input class="form-input" id="subscribe-form-0-email" type="email" name="email"
                                data-constraints="@Email @Required" />
                            <label class="form-label" for="subscribe-form-0-email">Email</label>
                        </div>
                        <div class="form-button wow fadeInRight">
                            <button class="button button-shadow-2 button-zakaria button-lg button-primary"
                                type="button"><?php echo $this->_Language->array_lang('register') ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>