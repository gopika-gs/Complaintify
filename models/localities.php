<?php
    function get_locality_from_id($id){
        global $db;
        return $db->where("id", $id)->getOne('localities');
    }
?>