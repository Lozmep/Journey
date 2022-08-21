<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!--CSS-->
    <link rel="stylesheet" href="index.css">
    <title>A Long Journey</title>
    <script src="./JS/functions.js"></script>
    <script src="./JS/navigate.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <!-- Brand -->
            <div class="page-brand">
                <a class="navbar-brand" href="#">A Long Journey</a>
            </div>
            

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav" id="nav-options">
                    <li class="nav-item">
                        <a class="nav-link" href="#main-section">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#story-section">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#market-section">Bazar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./PHP/Login/login.php">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>            
        </nav>
    </header>  
    <main>
        <section id="main-section" class="container-fluid first-section">
            <article class="text-center">
                <div class="main-info">
                    <h1>Unete a la aventura!</h1>
                </div>
            </article>
            <article>
                <button class="btnRegistro" onclick="index_to_register()">Registro</button>
            </article>
        </section>

        <section id="story-section" class="second-section">
            <article class="left-container text-center">
                <div class="story-container">
                    <h1>El Viaje</h1><br><br>
                    <h3><strong>Rose</strong> viaja a través del mundo advirtiendo de 
                        la catastrofe que se avecina. Muchos se burlaban de ella
                        hasta que la realidad llegó a sus propios ojos. <br><br>
    
                        Durante este viaje reunirá aventureros que intenten
                        desafiar la barrera del destino y derrotar a aquellos
                        seres que intentan destruir el mundo. O... ¿Quizás no?
                    </h3>
                </div>
            </article>
            <article class="right-container">                
            </article>
        </section>
        <section id="market-section" class="third-section">
            <article class="left-container2">                
            </article>
            <article class="right-container2 text-center">
                <div class="bazar-container">
                    <h1>Bazar</h1><br><br>
                    <h3>En el <strong>Mar de Nubes</strong> existe una ciudad
                        donde los sueños de los aventureros se enlazan y les
                        permite intercambiar todo tipo de bienes. 
                        <br><br>
                        Algunos comerciantes dicen que los mejores tesoros
                        siempre se encuentran en las nubes, pero siempre
                        que tengas lo suficiente para adquirirlos. 
                    </h3>
                    <br>
                    <button class="btnMarket" onclick="index_to_market()">Conócelo</button>
                </div>
            </article>
        </section>
    </main>  
</body>
</html>