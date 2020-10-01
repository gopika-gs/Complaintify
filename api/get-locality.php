<option disabled selected>Select a locality</option>
<?php
    require_once("../framework/env.php");
    require_once("../framework/init.php");
    
    $localities = $db->where("department", $_GET["department"])->get("localities");
    foreach($localities as $locality){
        echo "<option value='${locality['id']}'>${locality['name']}</option>";
    }
?>