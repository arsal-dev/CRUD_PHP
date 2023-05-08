<?php 
    include './db_connect.php';

    $sql = "SELECT * FROM users";

    $result = $conn->query($sql);
?>