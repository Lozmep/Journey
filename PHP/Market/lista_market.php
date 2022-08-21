<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../JS/functions.js"></script>
    <title>Lista Items</title>
</head>
<body>
    <main class="market-container">  
    <?php
        //Mostrar los items
        $sql="SELECT * FROM item WHERE OnSale=1 ORDER BY Id ASC";
        $query= $pdo->prepare($sql);
        $query->execute();
        $list= $query->fetchAll();
        foreach($list as $row)
        {
            $id = $row['Id'];
            ?>  
            <article class="card-container" style="height: 344px;">
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
                            <p style="margin-top: 10px;"><?php echo $row['Precio']; ?> <strong> ̶M̶</strong> </p> 
                            <button class="btn btn-success" onclick="updateOwner(<?php echo $id?>,'<?php echo $username?>')">Comprar</button>
                        </div>                    
                    </div>  
                </div>                    
            </article>
            <?php
        }
    ?>  
    </main>
</body>
</html>