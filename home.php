 
 <?php 
 session_start();

//  if (!isset($_SESSION['username'])) {
//      header("location:registro.php");
//      exit;
//  }
 
 $nombre = $_SESSION['name'];
 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unflare Dashboard</title> 
    <link href="img/Unlare-logo.ico" rel="icon"> 
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
            <h1>Analytics</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Total Sales</h3>
                            <h1>$65,024</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+81%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Site Visit</h3>
                            <h1>24,981</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>-48%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Searches</h3>
                            <h1>14,147</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+21%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

            <!-- New Users Section -->
            <div class="new-users">
                <h2>New Users</h2>
                <div class="user-list">
                    <div class="user">
                        <img src="img/Dashboard/profile-2.jpeg">
                        <h2>Bra</h2>
                    </div>
                    <div class="user">
                        <img src="img/Dashboard/profile-3.jpg">
                        <h2>Jax</h2>
                    </div>
                    <div class="user">
                        <img src="img/Dashboard/profile-4.jpeg">
                        <h2>H-37</h2>
                    </div>
                    <div class="user">
                        <img src="img/Dashboard/plus.png">
                        <h2>More</h2>
                        <p>New User</p>
                    </div>
                </div>
            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course Number</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <a href="#">Show All</a>
            </div>
            <!-- End of Recent Orders -->

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
                <div class="logo">
                    <img src="img/Unlare-logo.ico">
                    <h2>Unflare</h2>
                    <p>Company</p>
                </div>
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