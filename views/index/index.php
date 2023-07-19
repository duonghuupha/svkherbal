<?php
$block = $this->_Data->get_all_block();
foreach($block as $row){
    include($row['url_file']);
}
?>