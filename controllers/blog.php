<?php
class Blog extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        require('layouts/global/header.php');
        $this->view->render('blog/index');
        require('layouts/global/footer.php');
    }

    function detail(){
        require('layouts/global/header.php');
        $this->view->render('blog/detail');
        require('layouts/global/footer.php');
    }
}
?>
