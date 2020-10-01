<?php
    require_once("framework/env.php");
    require_once("framework/init.php"); 
    $_SESSION["user_id"] = null;
    reload_with(["signout" => "true"], "index.php");
?>