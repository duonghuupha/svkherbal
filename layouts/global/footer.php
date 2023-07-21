        <!-- Page Footer-->
        <footer class="section footer-classic">
            <div class="footer-classic-body section-lg">
                <div class="container">
                    <div class="row row-40 row-md-50 justify-content-xl-between">
                        <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInRight">
                            <div class="footer-classic-brand">
                                <a class="brand" href="../">
                                    <img class="brand-logo-dark" src="<?php echo URL.'/styles/' ?>images/Logo.png" alt="" width="140" height="46" />
                                </a>
                            </div>
                            <ul class="list-schedule">
                                <li>
                                    <span>Thời gian làm việc:</span>
                                    <span><?php echo $item[0]['time_work'] ?></span>
                                </li>
                            </ul>
                            <div class="footer-classic-social">
                                <div class="group-lg group-middle">
                                    <p>Tìm chúng tôi</p>
                                    <div>
                                        <ul class="list-inline list-social list-inline-sm">
                                            <li><a class="icon mdi mdi-facebook" href="<?php echo $item[0]['facebook'] ?>"></a></li>
                                            <li><a class="icon mdi mdi-twitter" href="<?php echo $item[0]['twiter'] ?>"></a></li>
                                            <li><a class="icon mdi mdi-instagram" href="<?php echo $item[0]['instagram'] ?>"></a></li>
                                            <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInRight" data-wow-delay=".1s">
                            <h4 class="footer-classic-title">Liên hệ</h4>
                            <ul class="contacts-creative">
                                <li>
                                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                                        <div class="unit-left">
                                            <span class="icon mdi mdi-map-marker"></span>
                                        </div>
                                        <div class="unit-body">
                                            <a href="#">
                                            <?php echo $item[0]['address'] ?>
                                            <br />
                                            <?php echo $item[0]['district'] ?>, <?php echo $item[0]['city'] ?>
                                        </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                                        <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                        <div class="unit-body"><a href="tel:#"><?php echo $item[0]['phone'] ?></a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                                        <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                                        <div class="unit-body"><a href="mailto:#"><?php echo $item[0]['email'] ?></a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                            <h4 class="footer-classic-title">Đăng ký bản tin</h4>
                            <p>
                                Đăng ký nhận bản tin của chúng tôi để nhận tin tức hàng tuần, cập nhật, ưu đãi đặc biệt
                            </p>
                            <!-- RD Mailform-->
                            <form class="rd-form rd-mailform rd-form-inline rd-form-inline-2"
                                data-form-output="form-output-global" data-form-type="subscribe" method="post"
                                action="bat/rd-mailform.php">
                                <div class="form-wrap">
                                    <input class="form-input" id="subscribe-form-2-email" type="email" name="email"
                                        data-constraints="@Email @Required" />
                                    <label class="form-label" for="subscribe-form-2-email">Enter your e-mail</label>
                                </div>
                                <div class="form-button">
                                    <button class="button button-icon-2 button-zakaria button-secondary"
                                        type="submit"><span class="fl-bigmug-line-paper122"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-classic-panel">
                <div class="container">
                    <div class="row row-10 align-items-center justify-content-sm-between">
                        <div class="col-md-auto">
                            <p class="rights">
                                <span>&copy;&nbsp;</span>
                                <span class="copyright-year"></span>
                                <span>&nbsp;</span>
                                <span>Svkherbal</span>
                                <span>.&nbsp; Allrights reserved.</span>
                            </p>
                        </div>
                        <div class="col-md-auto order-md-1">
                            <a href="terms-of-use.html">Privacy Policy</a>
                        </div>
                        <div class="col-md-auto">
                            <div class="group-sm group-middle">
                                <a href="<?php echo URL.'/change-lang-'.base64_encode('vi').'.html' ?>">
                                    <img src="<?php echo URL.'/styles/' ?>images/vietnam.png" alt="" width="45" height="45" />
                                </a>
                                <a href="<?php echo URL.'/change-lang-'.base64_encode('en').'.html' ?>">
                                    <img src="<?php echo URL.'/styles/' ?>images/usa.png" alt="" width="45" height="45" />
                                </a>
                            </div>
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