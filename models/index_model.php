<?php
class Index_Model extends Model{
    function __construct(){
        parent::__construct();
    }

    function get_all_block(){
        $query = $this->db->query("SELECT * FROM tbl_block WHERE status = 1 
                                    ORDER BY order_block ASC");
        return $query->fetchAll();
    }
}
?>