<?php
class Index extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        require('layouts/home/header.php');
        $this->view->render('index/index');
        require('layouts/home/footer.php');
    }

    function change_lang(){
        $lang = base64_decode($_REQUEST['lang']);
        if($lang == 'vi'){
            unset($_SESSION['lang']);
            header('Location: /');
        }else{
            $_SESSION['lang'] = 'en';
            header('Location: /');
        }
        $this->view->render('index/index');
    }
}
?>
