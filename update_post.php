<?php

    include './db_connect.php';

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "UPDATE users SET name = '$name', email = '$email', password = '$password' WHERE id = $id";

        $conn->query($sql);

        header('Location: index.php');
    }


?>