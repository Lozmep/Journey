<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
</head>
<body>
<?php
    $username = $_SESSION['usuario'];
        //Mostrar la tabla alumnos
        $sql="SELECT * FROM item WHERE Username=:user ORDER BY Id ASC";
        $query= $pdo->prepare($sql);
        $query->bindParam(':user', $username, PDO::PARAM_STR);
        $query->execute();  
        $list= $query->fetchAll();
        foreach($list as $row)
        {
            ?>  
            <article class="card-container">
                <div class="card">
                    <div class="card-header text-center"><?php echo $row['Nombre']; ?></div>
                    <div class="card-body">
                        <img src="<?php echo $row['Url_item']; ?>" alt="item">
                    </div>
                    <div class="card-footer">
                        <div class="item-values">
                            <span>
                                <img src="https://img.icons8.com/dotty/452/sword--v2.png" alt="Attack Value"> 
                                <?php echo $row['Ataque']; ?>
                            </span>
                            <span>
                                <img src="https://img.icons8.com/dotty/452/shield.png" alt="Defense Value"> 
                                <?php echo $row['Defensa']; ?>
                            </span>
                            <span>
                                <img src="https://img.icons8.com/dotty/344/like.png" alt="Life Value"> 
                                <?php echo $row['Vida']; ?>
                            </span>
                        </div>
                        <hr>
                        <div class="item-info">
                            <input type="number"style="border: 1px solid black" class="form-control">
                            <button class="btn btn-success">Vender</a></button>
                        </div>                    
                    </div>  
                </div>                    
            </article>
            <?php
        }
    ?>      
</body>
</html>