<?php
    include('../../conexion.php');
    $pdo = connect();//creamos una variable que almacena la funcion de conectar
    //crear  la consulta-agregar los alumnos

    $user = $_POST['user'];
    $email = $_POST['email'];
    $name = $_POST['nombre'];
    $tel = $_POST['tel'];
    $pass = hash('sha512',$_POST['pass']);
    $tipo = $_POST['tipo'];
    $url_img = 'https://cdna.artstation.com/p/assets/images/images/030/961/130/large/matteo-vattani-85127553-10222105169600159-6519585107777421312-o.jpg?1602166993';

    try//captura exepciones
    {
        $sql = "INSERT INTO usuario (Username, Email, Contraseña, Tipo_Usuario, Nombre_Completo, Telefono, Url_imagen) VALUES (:user, :email, :pass, :tipo, :nombre, :telefono, :url_img)";
        $query = $pdo->prepare($sql);//instanciar una setencia de SQL-crear consultas
        $query->bindParam(':user', $user, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':pass', $pass, PDO::PARAM_STR);
        $query->bindParam(':tipo', $tipo, PDO::PARAM_STR);
        $query->bindParam(':nombre', $name, PDO::PARAM_STR);
        $query->bindParam(':telefono', $tel, PDO::PARAM_STR);
        $query->bindParam(':url_img', $url_img, PDO::PARAM_STR);
        $query->execute();//pasa valores para ejecutar setencias

    } catch (PDOException $e)//representa un error  
    {
        echo 'PDOException : '.  $e->getMessage();
    }
    include('register-window.php');
?>