<?php
class Blog_Model extends Model{
    function __construct(){
        parent::__construct();
    }

    function get_detail_blog($id){
        $query = $this->db->query("SELECT id, code, title, description, content, image, create_at,
                                    (SELECT tbl_category.title FROM tbl_category WHERE tbl_category.id = cate_id)
                                    AS category, display_img_detail FROM tbl_content WHERE id = $id");
        return $query->fetchAll();
    }

    function get_info_menu($id){
        $query = $this->db->query("SELECT id, code, title, link FROM tbl_menu WHERE id = $id");
        return $query->fetchAll();
    }

    function get_data_blog_pass_cate($array, $offset, $rows){
        $result = array();
        $query = $this->db->query("SELECT COUNT(*) AS Total FROM tbl_content WHERE status = 1 
                                    AND FIND_IN_SET(cate_id, '$array')");
        $row = $query->fetchAll();
        $query = $this->db->query("SELECT id, title, code, image, create_at, description FROM tbl_content
                                    WHERE status = 1 AND FIND_IN_SET(cate_id, '$array') ORDER BY id DESC
                                    LIMIT $offset, $rows");
        $result['total'] = $row[0]['Total'];
        $result['rows'] = $query->fetchAll();
        return $result;
    }
}
?>