<?php
    $servername="localhost";
    $username="root";
    $password="root";
    $db="complaint";

    $conn = mysqli_connect($servername,$username,$password,$db);

    if (mysqli_connect_errno()) {
        echo "<h1 style='color: red;'>Failed to connect to MySQL: " . mysqli_connect_error() . "</h1>";
        exit();
    }
    //mysqli_select_db($conn,"complaint");
 ?>
