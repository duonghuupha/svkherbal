<?php
$item = $this->_Data->get_setting_global();
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>SVKHERBAL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?php echo URL_IMAGE.'/other/'.$item[0]['image_logo'] ?>" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,600,700%7CLato%7CKalam:300,400,700">
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
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                    data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                    data-lg-stick-up-offset="100px" data-xl-stick-up-offset="100px" data-xxl-stick-up-offset="100px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <a class="brand" href="<?php echo URL ?>">
                                        <img class="brand-logo-dark" src="<?php echo URL_IMAGE.'/other/'.$item[0]['image_logo'] ?>" alt="" width="140" height="46" />
                                    </a>
                                </div>
                            </div>
                            <div class="rd-navbar-nav-wrap">
                                <ul class="rd-navbar-nav">
                                    <?php
                                    $json_menu_parent = $this->_Data->get_menu_parent_top();
                                    foreach($json_menu_parent as $row_parent){
                                        $json_menu_child = $this->_Data->get_menu_chidren_top($row_parent['id']);
                                        $link_parent = $this->_Convert->return_link_menu($row_parent['id'], $row_parent['title'], $row_parent['type_menu'], $row_parent['link']);
                                        echo '
                                        <li class="rd-nav-item">
                                            <a class="rd-nav-link" href="'.$link_parent.'">'.$row_parent['title'].'</a>
                                        ';
                                        if(count($json_menu_child) > 0){
                                            echo '
                                            <ul class="rd-menu rd-navbar-dropdown">
                                            ';
                                            foreach($json_menu_child as $row_child){
                                                $link_child = $this->_Convert->return_link_menu($row_child['id'], $row_child['title'], $row_child['type_menu'], $row_child['link']);
                                                echo '
                                                <li class="rd-dropdown-item">
                                                    <a class="rd-dropdown-link" href="'.$link_child.'">'.$row_child['title'].'</a>
                                                </li>
                                                ';
                                            }
                                            echo '
                                            </ul>
                                            ';
                                        }
                                        echo '
                                        </li>
                                        ';
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="rd-navbar-main-element">
                                <!-- RD Navbar Search-->
                                <div class="rd-navbar-search rd-navbar-search-2">
                                    <button class="rd-navbar-search-toggle rd-navbar-fixed-element-3" data-rd-navbar-toggle=".rd-navbar-search">
                                        <span></span>
                                    </button>
                                    <form class="rd-search" data-search-live="rd-search-results-live" method="POST">
                                        <div class="form-wrap">
                                            <input class="rd-navbar-search-form-input form-input"
                                                id="rd-navbar-search-form-input" 
                                                type="text" 
                                                name="s"
                                                autocomplete="off" />
                                            <label class="form-label" for="rd-navbar-search-form-input"><?php echo $this->_Language->array_lang('keyword') ?>...</label>
                                            <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                            <button class="rd-search-form-submit fl-bigmug-line-search74" type="button"></button>
                                        </div>
                                    </form>
                                </div>
                                <button
                                    class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1"
                                    type="button" 
                                    data-multitoggle=".rd-navbar-main"
                                    data-multitoggle-blur=".rd-navbar-wrap"
                                    data-multitoggle-isolate="data-multitoggle-isolate">
                                    <span class="project-hamburger">
                                        <span class="project-hamburger-line"></span>
                                        <span class="project-hamburger-line"></span>
                                        <span class="project-hamburger-line"></span>
                                        <span class="project-hamburger-line"></span>
                                    </span>
                                </button>
                            </div>
                            <div class="rd-navbar-project">
                                <div class="rd-navbar-project-header">
                                    <button class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close"
                                        type="button" 
                                        data-multitoggle=".rd-navbar-main"
                                        data-multitoggle-blur=".rd-navbar-wrap" 
                                        data-multitoggle-isolate>
                                        <span class="project-close">
                                            <span></span>
                                            <span></span>
                                        </span>
                                    </button>
                                    <h5 class="rd-navbar-project-title"><?php echo $this->_Language->array_lang('title_contact') ?></h5>
                                </div>
                                <div class="rd-navbar-project-content">
                                    <div>
                                        <div>
                                            <ul class="contacts-modern">
                                                <li>
                                                    <a href="#">
                                                        <?php echo $item[0]['address'] ?><br>
                                                        <?php echo $item[0]['district'] ?>, <?php echo $item[0]['city'] ?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="tel:#"><?php echo $item[0]['phone'] ?></a><br/>
                                                    <a href="tel:#"><?php echo $item[0]['hotline'] ?></a><br/>
                                                    <a href="mailto:<?php echo $item[0]['email'] ?>"><?php echo $item[0]['email'] ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="list-inline list-social list-inline-xl">
                                                <li>
                                                <?php
                                                if(isset($_SESSION['lang'])){
                                                ?>
                                                <a href="<?php echo URL.'/change-lang-'.base64_encode('vi').'.html' ?>">
                                                    <b>Language: Vietnamese</b>
                                                </a>
                                                <?php
                                                }else{
                                                ?>
                                                <a href="<?php echo URL.'/change-lang-'.base64_encode('en').'.html' ?>">
                                                    <b>Ngôn ngữ: English</b>
                                                </a>
                                                <?php
                                                }
                                                ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        