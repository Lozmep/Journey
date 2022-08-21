<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $user = $_POST['reg_user'];
        $email = $_POST['reg_email'];
        $name = $_POST['reg_name'];
        $tel = $_POST['reg_tel'];
        $tipo = 'Player';
        $url_img = 'https://cdna.artstation.com/p/assets/images/images/030/961/130/large/matteo-vattani-85127553-10222105169600159-6519585107777421312-o.jpg?1602166993';
        $pass1 = $_POST['reg_pass1'];
        $pass2 = $_POST['reg_pass2'];
        
        $pass1 = hash('sha512', $pass1);
        $pass2 = hash('sha512', $pass2);
        
        $error = '';
        
        
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=journey', 'root', '');
        }catch(PDOException $prueba_error){
            echo "Error: " . $prueba_error->getMessage();
        }
        
        $statement = $conexion->prepare('SELECT * FROM usuario WHERE Username = :usuario LIMIT 1');
        $statement->bindParam(':usuario', $user, PDO::PARAM_STR);
        $statement->execute();
        $resultado = $statement->fetch();
        
                    
        if ($resultado != false){
            $error .= '<i>Este usuario ya existe</i>';
        }
        
        if ($pass1 != $pass2){
            $error .= '<i> Las contraseñas no coinciden</i>';
        }
        
        if ($error == ''){
            $statement = $conexion->prepare('INSERT INTO usuario (Username, Email, Tipo_Usuario,Nombre_Completo,Contraseña,Telefono,Url_Imagen) VALUES (:username, :email, :tipo, :nombre, :pass, :tel, :url_img)');
            $statement->bindParam(':username', $user, PDO::PARAM_STR);
            $statement->bindParam(':email', $email, PDO::PARAM_STR);
            $statement->bindParam(':tipo', $tipo, PDO::PARAM_STR);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':pass', $pass1, PDO::PARAM_STR);
            $statement->bindParam(':tel', $tel, PDO::PARAM_STR);
            $statement->bindParam(':url_img', $url_img, PDO::PARAM_STR);
            $statement->execute();   
            
            $error .= '<i style="color: green;">Usuario registrado exitosamente</i>';
        }
    }

?>