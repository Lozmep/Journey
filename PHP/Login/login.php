<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
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
    <title>Login</title>
    <script src="../../JS/navigate.js"></script>
</head>
<body>
    <?php include('validate_login.php'); ?>
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <!-- Brand -->
            <div class="page-brand">
                <a class="navbar-brand" href="../../index.php">A Long Journey</a>
            </div>          
        </nav>
    </header>
    <main class="main-container">
        <div class="center">
            <h1>Inicio de Sesión</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="form">
              <div class="txt_field">
                <input type="text" name="login_user" required>
                <span></span>
                <label>Usuario</label>
              </div>
              <div class="txt_field">
                <input type="password" name="login_pass" required>
                <span></span>
                <label>Contraseña</label>
              </div>
              <!--<div class="pass">Olvidaste tu contraseña?</div>-->
              <?php if(!empty($error)): ?>
              <div class="text-center">
                  <?php echo $error; ?>
              </div>
                  <?php endif; ?>
              <input type="submit" value="Login">
              <div class="signup_link">
                No tienes cuenta? <a href="../Register/register.php">Regístrate</a>
              </div>
            </form>
        </div>
    </main>
</body>
</html>