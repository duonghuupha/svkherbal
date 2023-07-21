<?php
$item = $this->_Data->get_setting_global();
?>
        <!-- Page Footer-->
        <footer class="section footer-corporate footer-corporate-2 context-dark">
            <div class="footer-corporate-body section-lg">
                <div class="container">
                    <div class="row row-40 row-md-50 justify-content-xl-between">
                        <div class="col-sm-6 col-lg-4 wow fadeInRight">
                            <h5 class="footer-corporate-title"><?php echo $this->_Language->array_lang('title_contact') ?></h5>
                            <div class="footer-corporate-decor"></div>
                            <ul class="footer-corporate-info">
                                <li>
                                    <div class="unit flex-column flex-sm-row align-items-center">
                                        <div class="unit-left">
                                            <span class="icon mdi mdi-map-marker"></span>
                                        </div>
                                        <div class="unit-body">
                                            <a href="#">
                                                <?php echo $item[0]['address'] ?><br />
                                                <?php echo $item[0]['district'] ?>, <?php echo $item[0]['city'] ?>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit flex-column flex-sm-row align-items-center">
                                        <div class="unit-left">
                                            <span class="icon mdi mdi-phone"></span>
                                        </div>
                                        <div class="unit-body">
                                            <ul class="list-schedule">
                                                <li><span><?php echo $this->_Language->array_lang('title_input_phone') ?>:</span><span><?php echo $item[0]['phone'] ?></span></li>
                                                <li><span>Hotline:</span><span><?php echo $item[0]['hotline'] ?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit flex-column flex-sm-row align-items-center">
                                        <div class="unit-left">
                                            <span class="icon mdi mdi-email-outline"></span>
                                        </div>
                                        <div class="unit-body">
                                            <ul class="list-schedule">
                                                <li><span>Email:</span><span><?php echo $item[0]['email'] ?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
                            <h5 class="footer-corporate-title"><?php echo $this->_Language->array_lang('quick_link') ?></h5>
                            <div class="footer-corporate-decor"></div>
                            <ul class="footer-corporate-list d-sm-inline-block d-md-block">
                                <?php
                                $json_menu_bottom = $this->_Data->get_menu_bottom();
                                foreach($json_menu_bottom as $row_bottom){
                                    $link_bottom = $this->_Convert->return_link_menu($row_bottom['id'], $row_bottom['title'], $row_bottom['type_menu'], $row_bottom['link']);
                                    echo '
                                    <li>
                                        <a href="'.$link_bottom.'">'.$row_bottom['title'].'</a>
                                    </li>
                                    ';
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                            <h5 class="footer-corporate-title"><?php echo $this->_Language->array_lang('title_contact_1') ?></h5>
                            <div class="footer-corporate-decor"></div>
                            <p class="footer-corporate-text">
                                Chúng tôi luôn sẵn sàng giải đáp mọi thắc mắc của bạn hoặc giúp bạn lựa chọn
                                những sản phẩm phù hợp với bạn có xuất sứ 100% từ thiên nhiên.
                            </p>
                            <div class="group-sm group-middle">
                                <a class="button button-shadow-2 button-gray-14 button-zakaria" href="https://lanui.vn" target="_blank">
                                    <?php echo $this->_Language->array_lang('btn_product') ?>
                                </a>
                                <a class="button button-shadow-2 button-primary-2 button-zakaria" href="<?php echo URL.'/contact.html' ?>">
                                <?php echo $this->_Language->array_lang('btn_contact') ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-corporate-panel">
                <div class="container">
                    <div class="row row-10 row-sm-30 align-items-center justify-content-sm-between">
                        <div class="col-sm-auto col-lg-4 text-lg-start">
                            <div class="group-xs group-middle">
                                <a href="<?php echo URL.'/change-lang-'.base64_encode('vi').'.html' ?>">
                                    <img src="<?php echo URL.'/styles/' ?>images/vietnam.png" alt="" width="45" height="45" />
                                </a>
                                <a href="<?php echo URL.'/change-lang-'.base64_encode('en').'.html' ?>">
                                    <img src="<?php echo URL.'/styles/' ?>images/usa.png" alt="" width="45" height="45" />
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-auto col-lg-4">
                            <ul class="list-inline list-social-4 list-inline-xs">
                                <li><a class="icon mdi mdi-facebook icon-xxs" href="#"></a></li>
                                <li><a class="icon mdi mdi-twitter icon-xxs" href="#"></a></li>
                                <li><a class="icon mdi mdi-instagram icon-xxs" href="#"></a></li>
                                <li><a class="icon mdi mdi-google-plus icon-xxs" href="#"></a></li>
                                <li><a class="icon mdi mdi-skype icon-xxs" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <p class="rights">
                                <span>&copy;&nbsp; </span>
                                <span class="copyright-year"></span>
                                <span>&nbsp;</span><span>Svkherbal</span>
                                <span>.&nbsp; All rights reserved.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="<?php echo URL.'/styles/' ?>js/core.min.js"></script>
    <script src="<?php echo URL.'/styles/' ?>js/script.js"></script>
</body>

</html>