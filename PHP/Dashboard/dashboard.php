<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashBoard.css">
    <script src="../../JS/functions.js"></script>
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
    <title>Admin DashBoard</title>
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
                        <a class="nav-link" href="../Profile/profile.php">Perfil</a>
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
    <main>
        <?php 
            include('../../isLogin.php');
            if ($_SESSION['usuario']!='Rose')
            {
                header('location: ../Profile/profile.php');
            } 
        ?>
        <!-- Modal - Add Items details -->
        <div class="modal fade" id="add_items_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="myModalLabel">Agregar Items</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <h3>Nombre: </h3>
                            <input type="text" style="font-size: 1.5rem;" id="add_nombre" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <h3>Tipo: </h3>
                            <select class="form-control" style="font-size: 1.5rem;" id="add_tipo">
                                <option value="Anillo">Anillo</option>
                                <option value="Botas">Botas</option>
                                <option value="Collar">Collar</option>
                                <option value="Escudo">Escudo</option>
                                <option value="Espada">Espada</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h3>Ataque: </h3>
                            <input type="Number" style="font-size: 1.5rem;" id="add_ataque" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <h3>Defensa: </h3>
                            <input type="Number" style="font-size: 1.5rem;" id="add_defensa" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <h3>Vida: </h3>
                            <input type="Number" style="font-size: 1.5rem;" id="add_vida" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <h3>Precio: </h3>
                            <input type="Number" style="font-size: 1.5rem;" id="add_precio" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <h3>Propietario: </h3>
                            <input type="text" style="font-size: 1.5rem;" id="add_username" value="Bazar" class="form-control" disabled/>
                        </div>
                        <div class="form-group">
                            <h3>Url Imagen: </h3>
                            <input type="text" style="font-size: 1.5rem;" id="add_url" class="form-control"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" style="font-size: 1.8rem;" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" style="font-size: 1.8rem;" class="btn btn-primary" onclick="addItem()" >Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal - Update Items details -->
        <div class="modal fade" id="update_items_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="myModalLabel">Actualizar Items</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <h3>Id: </h3>
                            <input type="text" style="font-size: 1.5rem;" id="update_id" class="form-control" disabled/>
                        </div>
                        <div class="form-group">
                            <h3>Nombre: </h3>
                            <input type="text" style="font-size: 1.5rem;" id="update_nombre" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <h3>Tipo: </h3>
                            <select class="form-control" style="font-size: 1.5rem;" id="update_tipo">
                                <option value="Anillo">Anillo</option>
                                <option value="Botas">Botas</option>
                                <option value="Collar">Collar</option>
                                <option value="Escudo">Escudo</option>
                                <option value="Espada">Espada</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h3>Ataque: </h3>
                            <input type="Number" style="font-size: 1.5rem;" id="update_ataque" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <h3>Defensa: </h3>
                            <input type="Number" style="font-size: 1.5rem;" id="update_defensa" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <h3>Vida: </h3>
                            <input type="Number" style="font-size: 1.5rem;" id="update_vida" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <h3>Precio: </h3>
                            <input type="Number" style="font-size: 1.5rem;" id="update_precio" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <h3>Propietario: </h3>
                            <input type="text" style="font-size: 1.5rem;" id="update_username" value="Bazar" class="form-control" disabled/>
                        </div>
                        <div class="form-group">
                            <h3>Url Imagen: </h3>
                            <input type="text" style="font-size: 1.5rem;" id="update_url" class="form-control"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" style="font-size: 1.8rem;" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" style="font-size: 1.8rem;" class="btn btn-primary" onclick="update_item()" >Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
        <article class="card crud-container" style="overflow-y: scroll;">
            <div class="card-body">
                <h1>Agregar Items</h1>
                <button type="button" class="btn btn-success" onclick="showAddModal()"><span>Agregar</span></button>
                <hr>
                <h1>Lista de Items</h1>
                <div id="list_container">
                    <?php 
                        // incluimos la conexion con el servidor
                        include('../../conexion.php');
                        $pdo = connect();
                        // Incluir para ver la totalidad de alumnos
                        include('lista_items.php'); 
                    ?>
                </div>              
            </div>
        </article>
    </main>   
</body>
</html>