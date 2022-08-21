<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <!--Fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--Diseño Responsive-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="https://images-platform.99static.com//C-QV27T94cfiB0ZJxTjL0MVJh6s=/140x145:860x865/fit-in/500x500/99designs-contests-attachments/127/127307/attachment_127307979" type="image/x-icon">
    <script src="../../JS/navigate.js"></script>
    <title>Mi perfil</title>
</head>
<body>
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
                        <a class="nav-link" href="../../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Market/market.php">Bazar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../logout.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div> 

        </nav>
    </header>
    <?php include('../../isLogin.php'); ?>
    <main class="profile-card">
        <?php 
                // incluimos la conexion con el servidor
                include('../../conexion.php');
                $pdo = connect();
                // Cargar datos
                $username = $_SESSION['usuario'];
                $sql="SELECT * FROM usuario WHERE Username=:user LIMIT 1";
                $query= $pdo->prepare($sql);
                $query->bindParam(':user', $username, PDO::PARAM_STR);
                $query->execute();
                $list= $query->fetchAll();
                foreach($list as $row){
        ?>    
        <article class="profile-img-container" style="background-image: url('<?php echo $row['Url_imagen']; ?>') ">
        </article>
        <article class="profile-info-container">
            <div class="container-fluid"><br>
                <h1 class="text-center"><?php echo $row['Username']; ?></h1>
                <div class="profile-form">
                    <form method='POST'>
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" value="<?php echo $row['Email']; ?>" name="update_email">
                        </div>
                        <!--
                        <div class="form-group">
                        <label for="pwd">Contraseña:</label>
                        <input type="password" class="form-control" value="<?php /* echo $row['Contraseña'];*/ ?>" name="update_pass">-->
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre Completo</label>
                            <input type="text" class="form-control" value="<?php echo $row['Nombre_Completo']; ?>" name="update_nombre">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="number" class="form-control" value="<?php echo $row['Telefono']; ?>" name="update_tel">
                        </div>
                        <div class="form-group">
                            <label for="url">Url Imagen Perfil</label>
                            <input type="text" class="form-control" value="<?php echo $row['Url_imagen']; ?>" name="update_url">
                        </div>
                        <div class="div-button text-center">
                            <button type="submit" class="btn btn-success" name="btn_update">Actualizar Perfil</button>
                            <button type="button" onclick="profile_to_inventory()" class="btn btn-primary">Mi inventario</button>
                            <?php
                            if($_SESSION['usuario']=='Rose')
                            {
                                echo '<button type="button" onclick="profile_to_dashboard()" class="btn btn-danger">DashBoard</button>';
                            }                            
                            ?>
                        </div>
                    </form>
                </div>            
            </div>
        </article>     
        <?php }
            if(isset($_POST['btn_update']))
            {        
                $reload=true;        
                $sql="UPDATE usuario SET Nombre_completo=:nombre, Email=:email, Telefono=:tel, Url_imagen=:url_img  WHERE Username=:username";
                $query= $pdo->prepare($sql);
                $query->bindParam(':nombre', $_POST['update_nombre'], PDO::PARAM_STR);
                $query->bindParam(':username', $username, PDO::PARAM_STR);
                $query->bindParam(':email', $_POST['update_email'], PDO::PARAM_STR);
                $query->bindParam(':tel', $_POST['update_tel'], PDO::PARAM_STR);
                $query->bindParam(':url_img', $_POST['update_url'], PDO::PARAM_STR);
                $query->execute();
                //Reload                
                $currentpage_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                echo '<script>window.location.href="'.$currentpage_url.'";</script>';                                        
            }
        ?>   
    </main>
</body>
</html>