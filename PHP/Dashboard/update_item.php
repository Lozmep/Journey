<?php
    include('../../conexion.php');
    $pdo = connect();//creamos una variable que almacena la funcion de conectar
    //crear  la consulta-agregar los alumnos
    try//captura exepciones
    {
        $sql = "UPDATE item SET Nombre=:nombre, Tipo=:tipo, Ataque=:ataque, Defensa=:defensa, Vida=:vida, Precio=:precio, Username=:username, Url_item=:url_item WHERE Id=:id;";
        $query = $pdo->prepare($sql);//instanciar una setencia de SQL-crear consultas
        $query->bindParam(':nombre', $_POST['nombre'], PDO::PARAM_STR);
        $query->bindParam(':tipo', $_POST['tipo'], PDO::PARAM_STR);
        $query->bindParam(':ataque', $_POST['ataque'], PDO::PARAM_INT);
        $query->bindParam(':defensa', $_POST['defensa'], PDO::PARAM_INT);
        $query->bindParam(':vida', $_POST['vida'], PDO::PARAM_INT);
        $query->bindParam(':precio', $_POST['precio'], PDO::PARAM_INT);
        $query->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
        $query->bindParam(':url_item', $_POST['url_item'], PDO::PARAM_STR);    
        $query->bindParam(':id', $_POST['id'], PDO::PARAM_INT); 
        $query->execute();//pasa valores para ejecutar setencias

    } catch (PDOException $e)//representa un error  
    {
        echo 'PDOException : '.  $e->getMessage();
    }

    // Lista de items
    include('lista_items.php');
?>