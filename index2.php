 
 <?php 
 
 include("db.php");

$servidor  = "localhost";
$usuario = "root";
$clave = "";
$basededatos = "unflare";

$enlace = mysqli_connect($servidor, $usuario, $clave, $basededatos);

if (isset($_POST['registro'])) {
    $nombre = $_POST['name'];
    $usuario = $_POST['email'];
    $password = $_POST['password'];

    $insertardatos = "INSERT INTO personal2 VALUES ('$nombre', '$usuario', '$password', '')";

    // Ejecutar la consulta
    if (mysqli_query($enlace, $insertardatos)) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar los datos: " . mysqli_error($enlace);
    }
}
?>
 
 
 
 
 
 
 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unflare</title> 
    <link href="img/Unlare-logo.ico" rel="icon"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/205de0e472.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles-Unflare.css"> 
    <script defer src="scripts-Unflare.js"></script>
</head>
<body>
<header> 
    <nav class="navbar"><div class="nav">  
        <a href="Unflare.html#" class="logo nav-link text-nav align-items-center d-flex"><img class="icon" src="img/Unlare-logo.ico" width="60" height="60">Unflare</a>  
        <div class="nav-toggle"> 
            <i class="fa-solid fa-bars"></i>
        </div> 
        <ul class="nav-menu ">  
            <li class="nav-menu-item "><a href="Unflare.html #why-us" class="nav-menu-link nav-link"><p>Nosotros</p></a> 
            </li>
            <li class="nav-menu-item "><a href="Unflare.html#services" class="nav-menu-link nav-link"><p>Servicios</p></a> 
            </li>
            <li class="nav-menu-item "><a href="#" class="nav-menu-link nav-link"><p>Proyectos</p></a> 
            </li> 
            <li class="nav-menu-item "><a href="Unflare.html#team" class="nav-menu-link nav-link"><p>Autor</p></a> 
            </li>
            <li class="nav-menu-item "><a href="Unflare.html#contact" class="nav-menu-link nav-link"><P>Contactanos</P></a>  
            </li>   
            <a href="index.php" class="login-btn nav-menu-item nav-menu-link nav-link"><p>Iniciar sesión</p></a>  
        </ul>      
    </div></nav> 
</header><br>  

<div class="Iniciar-sesion">  
 
    <div class="wrapper"> 
        <form class="form2" name="unflare" action="save_task.php" method="post"> 
            <h1>Crear cuenta</h1>  
            <div class="input-box"> 
                <input type="text" name="name" id="name" placeholder="Nombre" required>  
                <span class="material-symbols-outlined">person</span>
            </div> 
            <div class="input-box"> 
                <input type="email" name="email" id="Email" placeholder="Correo" required>  
                <span class="material-symbols-outlined">mail</span>
            </div> 
            <div class="input-box"> 
                <input type="password" name="password" id="password" placeholder="Contraseña" required> 
                <span class="material-symbols-outlined">lock</span>
            </div> 
            <div class="remember-forgot"> 
                <label><input   type="checkbox" name="remember"><p>Recuérdame</p></label><a class="montserrat " href="#">¿Contraseña perdida?</a>
            </div> 
            <button type="submit" name="save_task" value="enviar" class="btn">Iniciar</button>
            <div class="register-link"> 
                <p>¿ya tienes una cuenta? <a href="index.php">Iniciar sesión</a></p>
            </div>
        </form>
    </div>

</div>

<footer class="footer" id="footer">
          <div class="contaimer"> 
              <div class="footer-row"> 
                 
                 <div class="footer-links"> 
                    <h4>Unflare</h4> 
                    <ul> 
                        <li><a href="#why-us">Nosotros</a></li> 
                        <li><a href="#services">Servicios</a></li> 
                        <li><a href="#">Política de privacidad</a></li> 
                        <li><a href="index.php">Iniciar sesión</a></li>
                    </ul>
                 </div>  
                 <div class="footer-links"> 
                    <h4>Proyectos</h4> 
                    <ul> 
                        <li><a href="#">Everware</a></li> 
                        <li><a href="#">Nature future</a></li> 
                        <li><a href="#">mas proyectos</a></li> 
                        <li><a href="index2.php">Crear cuenta</a></li>
              </div>   
                 <div class="footer-links"> 
                    <h4>Ayuda</h4> 
                    <ul> 
                        <li><a href="https://wa.me/3053852768">+57 320 5697294</a></li> 
                        <li><a href="#coffee">Fortalezas</a></li> 
                        <li><a href="#contact">Contactanos</a></li> 
                        <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWrRpdCztBmJFZrssjmPGLrCFtLfmMqBkFJkRdVmHtJBwlcXGDlTLwcTssKPndvLBLzLvfFhq">unflarecompany@gmail.com</a></li> 
                    </ul>
              </div>
          <div class="footer-links"> 
            <h4>Siguenos</h4>  
            <div class="social-link"> 
                <a href="https://wa.me/3053852768"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                  </svg></a> 
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a> 
                <a href="https://twitter.com/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                  </svg></a> 
                <a href="https://github.com/"><i class="fab fa-github"></i></a>
            </div>
      </div>  
</div> 
  </footer>
  <center class="copyright"><h3> &copy; Unflare Company</h3></center>

</body> 



</html>