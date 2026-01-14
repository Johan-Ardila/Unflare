<?php 

require_once 'db.php';

    $id = $_GET['id'];
    $query = "DELETE FROM personal2 WHERE id = $id";
    mysqli_query($conexion, $query);

    header("Location: 1.php");
?>