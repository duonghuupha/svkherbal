<?php
class Blog extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        require('layouts/global/header.php');

        $id = base64_decode($_REQUEST['id']);
        $info_menu = $this->model->get_info_menu($id);
        $this->view->info_menu = $info_menu;
        /////////////////////////////////////////////////////////////////////
        $rows = isset($_REQUEST['rows']) ? $_REQUEST['rows'] : 6;
        $get_pages = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
        $offset = ($get_pages-1)*$rows;
        $jsonObj= $this->model->get_data_blog_pass_cate($info_menu[0]['link'], $offset, $rows);
        $this->view->jsonObj= $jsonObj; $this->view->perpage = $rows; $this->view->page = $get_pages;

        $this->view->render('blog/index');
        require('layouts/global/footer.php');
    }

    function detail(){
        require('layouts/global/header.php');

        $id = base64_decode($_REQUEST['id']);
        $json = $this->model->get_detail_blog($id);
        $this->view->json = $json;

        $json_extra = $this->model->get_data_block_extra($id, $json[0]['cate_id']);
        $this->view->json_extra = $json_extra;

        $this->view->render('blog/detail');
        require('layouts/global/footer.php');
    }
}
?>
