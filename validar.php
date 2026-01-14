<?php
include('db.php');

session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$consulta = "SELECT * FROM personal2 WHERE usuario = '$usuario' AND password = '$password'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    $row = mysqli_fetch_assoc($resultado);
    $_SESSION['name'] = $row['name'];
    $_SESSION['username'] = $row['usuario'];
    header("location:home.php");
} else {
    include("index.php");
    ?>
    <script>
        alert("EL CORREO O LA CONTRASEÑA NO SON CORRECTOS");
    </script>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
