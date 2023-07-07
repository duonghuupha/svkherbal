<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>404 Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLato%7CKalam:300,400,700">
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>css/fonts.css">
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>css/style.css">
</head>

<body>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-bell">
                <div class="cssload-circle">
                    <div class="cssload-inner"></div>
                </div>
                <div class="cssload-circle">
                    <div class="cssload-inner"></div>
                </div>
                <div class="cssload-circle">
                    <div class="cssload-inner"></div>
                </div>
                <div class="cssload-circle">
                    <div class="cssload-inner"></div>
                </div>
                <div class="cssload-circle">
                    <div class="cssload-inner"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="page">
        <section class="section section-single context-dark bg-image" style="background-image: url(<?php echo URL.'/styles/' ?>images/bg-404.jpg);">
            <div class="section-single-inner">
                <header class="section-single-header page-header">
                    <div class="page-head-inner">
                        <!--Brand-->
                        <a class="brand" href="../">
                            <img class="brand-logo-dark" src="<?php echo URL.'/styles/' ?>images/logo-default-280x92.png" alt="" width="140" height="46" />
                            <img class="brand-logo-light" src="<?php echo URL.'/styles/' ?>images/logo-inverse-280x92.png" alt="" width="140" height="46" />
                        </a>
                    </div>
                </header>
                <div class="section-single-main">
                    <div class="container">
                        <div class="title-modern">404</div>
                        <h3 class="fw-light text-spacing-100">Page Not Found</h3>
                        <a class="button button-lg button-secondary button-zakaria" href="/">
                            Go to home page
                        </a>
                    </div>
                </div>
                <div class="section-single-footer">
                    <div class="container text-center">
                        <p class="rights">
                            <span>&copy;&nbsp; </span>
                            <span class="copyright-year"></span>
                            <span>&nbsp;</span><span>Farm</span>
                            <span>.&nbsp; All rights reserved.</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="<?php echo URL.'/styles/' ?>js/core.min.js"></script>
    <script src="<?php echo URL.'/styles/' ?>js/script.js"></script>
</body>

</html>