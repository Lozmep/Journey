<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="market.css">
    <script src="../../JS/functions.js"></script>
    <script src="./script.js"></script>
    <!--Fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--Diseño Responsive-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Bazar</title>
</head>
<body>
    <?php 
        include('../../isLogin.php');
        $username = $_SESSION['usuario'];
    ?>  
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <!-- Brand -->
            <div class="page-brand">
                <a class="navbar-brand" href="../../index.php">A Long Journey</a>
            </div>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav" id="nav-options">
                    <li class="nav-item">
                        <a class="nav-link" href="../Profile/profile.php">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Inventory/inventory.php">Inventario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../logout.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div> 
        </nav>
    </header>
    <div id="market-container">          
        <?php 
            // incluimos la conexion con el servidor
            include('../../conexion.php');
            $pdo = connect();
            // Incluir para ver la totalidad de alumnos
            include('lista_market.php'); 
        ?>        
    </div>
    
</body>
</html>