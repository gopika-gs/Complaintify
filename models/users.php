<?php
    function get_user_model(){
        global $db;
        return $db->where("id", $_SESSION["user_id"])->getOne('users');
    }

    function is_authority(){
        return get_user_model()['authority_status']==2?true:false;
    }

    function is_admin(){
        return get_user_model()['is_admin']==1?true:false;
    }

    function get_user_from_id($id){
        global $db;
        return $db->where("id", $id)->getOne('users');
    }
?>