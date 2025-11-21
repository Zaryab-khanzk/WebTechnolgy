<?php
    $_servername = "localhost";
    $_username = "root";
    $_password = "";
    $db_name = "talhaafridi";
    $conn = mysqli_connect($_servername, $_username, $_password, $db_name);
    if(!$conn->connect_error){
        die("Connection failed: ". mysqli_connect_error());
    }
    echo "";
    >