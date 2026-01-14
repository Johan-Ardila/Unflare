<?php
include('db.php');

if (isset($_POST["save_task"])) {
    $nombre = $_POST['name'];
    $usuario = $_POST['email'];
    $password = $_POST['password']; 

    // Corrige el nombre de la columna de email a usuario
    $query = "INSERT INTO personal2 (name, usuario, password) VALUES ('$nombre', '$usuario', '$password')";
    // Ejecuta la consulta SQL
    $result = mysqli_query($conexion, $query);

    // Verifica si la consulta fue exitosa
    if (!$result) {
        // Si la consulta falla, muestra un mensaje de error y termina el script
        die("query failed: " . mysqli_error($conexion));
    } else {
        // Verifica si el formulario se envió desde el dashboard
        if (isset($_POST['dashboard']) && $_POST['dashboard'] == 'true') {
            // Si es desde el dashboard, no redirigir
            header("Location: 1.php"); 
        } else {
            // Si no es desde el dashboard, redirigir a index.php
            header("Location: index.php"); 
            exit;
        }
    }
}
?>
