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
    <script src="../../JS/navigate.js"></script>
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
    <main class="container">
        <div class="title">Registro</div>
        <article class="content">
          <form action="validateRegister.php" method="POST" class="form">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Nombre de Usuario</span>
                <input type="text" name='reg_user' placeholder="Ingrese su Nombre de Usuario" required>
              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="email" name='reg_email' placeholder="Ingrese su email" required>
              </div>
              <div class="input-box">
                <span class="details">Nombre Completo</span>
                <input type="text" name='reg_name' placeholder="Ingrese su nombre" required>
              </div>
              <div class="input-box">
                <span class="details">Teléfono</span>
                <input type="number" name='reg_tel' placeholder="Ingrese su teléfono" required>
              </div>
              <div class="input-box">
                <span class="details">Contraseña</span>
                <input type="password" name='reg_pass1' placeholder="Ingrese su contraseña" required>
              </div>
              <div class="input-box">
                <span class="details">Confirmar Contraseña</span>
                <input type="password" name='reg_pass2' placeholder="Confirma tu contraseña" required>
              </div>
            </div>
            <?php if(!empty($error)): ?>
            <div>
                <p><?php echo $error; ?></p>
            </div>
            <?php endif; ?>
            <div class="button">
              <input type="submit" value="Completar Registro">
            </div>
          </form>
        </article>
    </main>
</body>
</html>