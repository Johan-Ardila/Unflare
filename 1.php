 
 <?php 
  


session_start();   
 

// if(!isset($_SESSION['id'])) {  
//   header("location: index.php");
// } 

$nombre = $_SESSION['name'];
// $tipo_usuario = $_SESSION['tipo_usuario'];
 
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature-future</title> 
    <link href="../vista/assets/The Nature Future.png" rel="icon"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://kit.fontawesome.com/205de0e472.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dashboard/styles-dashboard.css">
</head>
<body class="dark-mode-variables">
    <div class="container"> 
        <!-- sidebar section --> 
        <aside> 
            <div class="toggle-dashboard"> 
                <div class="logo-dashboard"> 
                     <img src="img/Unlare-logo.ico">
                     <h2 class="tilt-neon">Unflare Company</h2>
                </div> 
                <div class="close-dashboard" id="close-btn">  
                </div> 
            </div> 
             
             <div class="sidebar"> 
                <a href="home.php#"> 
                    <span class="material-symbols-outlined">
                        dashboard
                        </span> 
                        <h3>Dashboard</h3> 
                        
                </a>  
                <a href="1.php"> 
                    <span class="material-symbols-outlined">
                        person
                        </span> 
                        <h3>Users</h3> 
                        
                </a> 
                <a href="2.php"> 
                    <span class="material-symbols-outlined">
                        receipt_long
                        </span> 
                        <h3>History</h3> 
                        
                </a> 
                <a href="3.php"> 
                    <span class="material-symbols-outlined">
                        insights
                        </span> 
                        <h3>Analytics</h3> 
                        
                </a> 
                <a href="4.php"> 
                    <span class="material-symbols-outlined">
                        mail_outline
                        </span> 
                        <h3>Tickets</h3> 
                        <span class="message-count"> 27</span>
                </a> 
                <a href="5.php"> 
                    <span class="material-symbols-outlined">
                        inventory
                        </span>
                        <h3>Sale List</h3> 
                        
                </a> 
                <a href="#"> 
                    <span class="material-symbols-outlined">
                        report
                        </span>
                        <h3>Report</h3> 
                        
                </a> 
                <a href="#"> 
                    <span class="material-symbols-outlined">
                        settings
                        </span>
                        <h3>Ajustes</h3> 
                        
                </a> 
                <a href="index2.php"> 
                    <span class="material-symbols-outlined">
                        add
                        </span>
                        <h3>Nuevo login</h3> 
                        
                </a> 
                <a href="index.php"> 
                    <span class="material-symbols-outlined">
                        logout
                        </span>
                        <h3>Salir</h3> 
                        
                </a>
             </div>

        </aside> 
           <!-- fin de la sidebar --> 

           
        <!-- Main Content -->
        <main>
         <!-- New Users Section -->
<div class="new-users">
    <h2>Personas</h2>
    <div class="user-list">
        <div style="max-height: 650px; overflow-y: auto;">
            <table class="dark-mode" style="gap:10px; width: 100%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th> 
                        <th>Contraseña</th>
                        <th>Acciones</th>
                    </tr>
                </thead>   

                <tbody> 
                    <?php
                        $query = "SELECT * FROM personal2";
                        $resultado = mysqli_query($enlace, $query);

                        while ($row = $resultado->fetch_assoc()) {
                          ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['usuario'];?></td> 
                                <td><?php echo $row['password'];?></td>
                                <td>
                                    <a href="editar_usuario.php?id=<?php echo $row['id'];?>" title="Editar">Editar</a> |
                                    <a href="eliminar_usuario.php?id=<?php echo $row['id'];?>" title="Eliminar">Eliminar</a>
                                </td>
                            </tr>
                            <?php
                        }
                   ?> 
                </tbody>

            </table> 
        </div>
    </div>
</div>
        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                <span class="material-symbols-outlined">
                    menu
                </span>
                </button>

                <div class="profile">
                    <div class="info">
                    <h2><?php echo $nombre; ?></h2>
                        <small class="text-muted">Bienvenido</small>
                    </div>
                    <div class="profile-photo">
                        <img src="img/Dashboard/profile-1.png">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
            <div class="wrapper"> 
        <form class="form2" name="Nature-future" action="save_task.php" method="post"> 
            <h1>Agregar</h1>  
            <div class="input-box"> 
                <input type="text" name="name" id="name" placeholder="Nombre" required>  
            </div> 
            <div class="input-box"> 
                <input type="email" name="email" id="Email" placeholder="Correo" required>  
            </div> 
            <div class="input-box"> 
                <input type="password" name="password" id="password" placeholder="Contraseña" required> 
            </div> 
            <button type="submit" name="save_task" value="enviar" class="btn">Agregar</button> 
            <input type="hidden" name="dashboard" value="true">
        </form>  
    </div> 
   
    

<style>  
.wrapper { 
    width: 420px; 
    background: grey;  
    border: 2px solid rgba(255, 255, 255, .2); 
    backdrop-filter: blur(20px); 
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: #fff;   
    border-radius: 10px; 
    padding: 30px 40px;
}

.wrapper h1 {  
    width: 100%; 
    height: 50px;
    font-size: 36px; 
    text-align: center; 
    margin: 30px 0;
}

.wrapper .input-box { 
    width: calc(100% - 0.5px); 
    height: 50px; 
    background: transparent;
    margin-bottom: 20px; 
    position: relative;  
    border-radius: 10px;
}

.input-box input { 
    width: calc(100% - 0.5px); 
    height: 100%; 
    background: transparent; 
    border: none; 
    outline: none; 
    border: 2px solid rgba(255, 255, 255, .2);  
    border-radius: 10px;
    padding-left: 20px; 
    padding-right: 50px; 
}

.input-box input::placeholder { 
    color: #fff;
} 

.input-box { 
    position: relative; 
}

.input-box .material-symbols-outlined {
    position: absolute;
    top: 50%;
    right: 15px; 
    transform: translateY(-50%);
    color: #fff;
    font-size: 20px; 
}

.wrapper .remember-forgot{ 
display: flex; 
justify-content: space-between; 
font-size: 10px; 
margin: -15px 0 15px;
} 

.wrapper .btn { 
    width: 100%; 
    height: 45px; 
    background: #fff; 
    border: none; 
    outline: none; 
    border-radius: 10px; 
    box-shadow: 0 0 10px rgba(0, 0, 0, .1); 
    cursor: pointer; 
    font-size: 16px; 
    color: #333; 
    font-weight: 600;
} 

.wrapper .register-link{ 
font-size: 14.5px; 
text-align: center; 
margin-top: 20px;  
margin: 20px 0 15px; 
} 

.register-link{ 
    color: #fff; 
    text-decoration: none; 
    font-weight: 600; 
} 

.register-link p a:hover{ 
    text-decoration: underline;
}

</style>
</div>
 
<div class="reminders">
                <div class="header">
                    <h2>Recordatorios</h2>
                    <span class="material-symbols-outlined">
                        notifications_off
                          </span>
                </div>

                <div class="notification">
                    <div class="icon">
                    <span class="material-symbols-outlined">
                            volume_up
                           </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Poner al sol</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-symbols-outlined">
                             more_vert
                             </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                    <span class="material-symbols-outlined">
                                edit
                                  </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Regar planta</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-symbols-outlined">
                              more_vert
                             </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                    <span class="material-symbols-outlined">
                             add
                          </span>
                        <h2>Agregar recordatorio</h2>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script src="dashboard/orders.js"></script>
    <script src="dashboard/index.js"></script>
</body>
</html>