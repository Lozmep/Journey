<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
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
    <title>Registro de Usuarios</title>
    <script src="../../JS/functions.js"></script>
    <script src="./validate.js"></script>
</head>
<body>
    <?php 
        session_start();

        if(!empty($_SESSION))
        {
            header('location: ../Profile/profile.php');
        }
    ?>  
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <!-- Brand -->
            <div class="page-brand">
                <a class="navbar-brand" href="../../index.php">A Long Journey</a>
            </div>          
        </nav>
    </header>
    <main class="container" id="register-container">
        <?php 
            // incluimos la conexion con el servidor
            include('../../conexion.php');
            $pdo = connect();
            // Incluir para ver la totalidad de alumnos
            include('register-window.php'); 
            /*echo "<script>if (confirm('Usuario registrado'))
            {
                window.location.href=('../Login/login.php');
            }else
            {
                window.location.href=('../Login/login.php');
            }</script>";*/
        ?> 
    </main>    
</body>
</html>