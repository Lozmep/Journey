<?php 
    session_start();

    if(isset($_SESSION['usuario']))
    {
        header('location: ../Profile/profile.php');
    }
    $error="";
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $user=$_POST['login_user'];
        $pass=$_POST['login_pass'];
        $pass=hash('sha512',$pass);
    
        try
        {
            $pdo= new PDO('mysql:host=localhost;dbname=journey','root','');
        }
        catch(PDOException $prueba_error)
        {
            echo "Error ".$prueba_error->getMessage();
        }
        $sql='SELECT * FROM usuario WHERE Username=:user AND Contraseña=:pass';
        $query= $pdo->prepare($sql);
        $query->bindParam(':user', $user, PDO::PARAM_STR);
        $query->bindParam(':pass', $pass, PDO::PARAM_STR);
        $query->execute();
        $resultado=$query->fetch();
        if($resultado != false)
        {
            $_SESSION['usuario']=$user;
            header('location: ../Profile/profile.php');
        }
        else
        {
            $error .='<i style="color: red;font-size:1rem;">Este usuario no existe</i>';
        }
    }
?>