<?php 
 
 require_once 'db.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE personal2 SET name = '$name', usuario = '$email', password = '$password' WHERE id = $id";
    mysqli_query($conexion, $query);

    header("Location: 1.php");
?>