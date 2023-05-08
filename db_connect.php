<?php 

    $server = 'localhost';
    $name = 'root';
    $password = '';
    $db_name = 'crud';


    $conn = new mysqli($server, $name, $password, $db_name);

    if($conn->connect_error){
        echo 'could not connect to the database';
    }
?>