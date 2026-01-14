<?php
require_once 'db.php'; 

$id = $_GET['id'];
$query = "SELECT * FROM personal2 WHERE id = $id";
$resultado = mysqli_query($conexion, $query); 
$usuario = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="form2" name="unflare" action="update_usuario.php" method="post"> 
    <h1>Editar usuario</h1>  
    <div class="input-box"> 
        <input type="text" name="name" id="name" value="<?php echo $usuario['name'];?>" required>  
    </div> 
    <div class="input-box"> 
        <input type="email" name="email" id="Email" value="<?php echo $usuario['usuario'];?>" required>  
    </div> 
    <div class="input-box"> 
        <input type="password" name="password" id="password" value="<?php echo $usuario['password'];?>" required> 
    </div> 
    <button type="submit" name="update_usuario" value="enviar" class="btn">Actualizar</button> 
    <input type="hidden" name="id" value="<?php echo $id;?>">
</form>
</body>
</html>

