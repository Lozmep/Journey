<?php
    include('../../conexion.php');
    $pdo = connect();
    $id = $_POST['id'];
    $user = $_POST['user'];
    
    $sql3 = "UPDATE item SET Username=:user, Onsale=0 WHERE Id=:id";
    $query3 = $pdo->prepare($sql3);//instanciar una setencia de SQL-crear consultas
    $query3->bindParam(':user', $user, PDO::PARAM_STR);
    $query3->bindParam(':id', $id, PDO::PARAM_STR);

    include("lista_market.php");
?>