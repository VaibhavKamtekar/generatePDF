<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "programdetails";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        // echo "Connection ok";
    }
    else{
        echo "Connection fail";
    }

?>