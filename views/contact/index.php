<?php
$item = $this->_Data->get_setting_global();
?>
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="<?php echo URL.'/styles/' ?>images/bg-contacts.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title"><?php echo $this->_Language->array_lang('btn_contact') ?></h2>
            </div>
        </div>
    </div>
</section>
<!-- Get in touch-->
<section class="section section-xl bg-default text-md-start">
    <div class="container">
        <div class="title-classic">
            <h3 class="title-classic-title"><?php echo $this->_Language->array_lang('title_contact_1') ?></h3>
            <p class="title-classic-subtitle">
                Có thể liên hệ với chúng tôi qua email hoặc điện thoại 24/7. Bạn cũng có thể sử dụng biểu mẫu
                liên hệ nhanh để đặt cau hỏi về các thắc mắc hay sản phẩm của chúng tôi
            </p>
        </div>
        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post">
            <div class="row row-20 row-md-30">
                <div class="col-lg-8">
                    <div class="row row-20 row-md-30">
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-first-name-2" type="text" name="first-name" data-constraints="@Required" />
                                <label class="form-label" for="contact-first-name-2"><?php echo $this->_Language->array_lang('title_input_firstname') ?></label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-last-name-2" type="text" name="last-name" data-constraints="@Required" />
                                <label class="form-label" for="contact-last-name-2"><?php echo $this->_Language->array_lang('title_input_lastname') ?></label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required" />
                                <label class="form-label" for="contact-email-2">E-mail</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric" />
                                <label class="form-label" for="contact-phone-2"><?php echo $this->_Language->array_lang('title_input_phone') ?></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-wrap">
                        <label class="form-label" for="contact-message-2"><?php echo $this->_Language->array_lang('title_input_msg') ?></label>
                        <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                    </div>
                </div>
            </div>
            <button class="button button-lg button-secondary button-zakaria" type="button"><?php echo $this->_Language->array_lang('title_btn_contact') ?></button>
        </form>
    </div>
</section>
<!-- Get in touch-->
<section class="section section-xl bg-gray-4">
    <div class="container">
        <div class="row row-30 justify-content-center">
            <div class="col-sm-6 col-md-4">
                <h4><?php echo $this->_Language->array_lang('title_input_phone') ?></h4>
                <ul class="contacts-classic">
                    <li>Office <a href="tel:#"><?php echo $item[0]['phone'] ?></a></li>
                    <li>Hotline <a href="tel:#"><?php echo $item[0]['hotline'] ?></a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-4">
                <h4><?php echo $this->_Language->array_lang('title_address') ?>v</h4>
                <div class="contacts-classic">
                    <a href="#">
                        <?php echo $item[0]['address'] ?>
                        <br/>
                        <?php echo $item[0]['district'] ?>, <?php echo $item[0]['city'] ?>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <h4>E-mail</h4>
                <ul class="contacts-classic">
                    <li><a href="mailTo:#"><?php echo $item[0]['email'] ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2771.2695716427675!2d106.64225375253515!3d10.798492563828995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175294e88620f99%3A0x74c9ef127245d145!2zMWQgQsOsbmggR2nDoywgUGjGsOG7nW5nIDEzLCBUw6JuIELDrG5oLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmggNzAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1689360206856!5m2!1svi!2s" 
        width="100%" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>