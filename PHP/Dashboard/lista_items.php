<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Items</title>
</head>
<body>
    <table class="table-dark table-striped table-responsive table-bordered">
        <tr>
            <th class="th-info">Nombre</th>
            <th class="th-info">Tipo</th>
            <th class="th-info">Ataque</th>
            <th class="th-info">Defensa</th>
            <th class="th-info">Vida</th>
            <th class="th-info">Precio</th>
            <th class="th-info">Propietario</th>
            <th class="th-button">Actualizar</th>
            <th class="th-button">Borrar</th>
        </tr>
        <?php
            //Mostrar la tabla alumnos
            $sql="SELECT * FROM item ORDER BY Id ASC";
            $query= $pdo->prepare($sql);
            $query->execute();
            $list= $query->fetchAll();
            foreach($list as $row)
            {
                ?>  
                <tr>                
                    <td class="td-element"><?php echo $row['Nombre']; ?></td>
                    <td class="td-element"><?php echo $row['Tipo']; ?></td>
                    <td class="td-element"><?php echo $row['Ataque']; ?></td>
                    <td class="td-element"><?php echo $row['Defensa']; ?></td>
                    <td class="td-element"><?php echo $row['Vida']; ?></td>
                    <td class="td-element">$ <?php echo $row['Precio']; ?></td>
                    <td class="td-element"><?php echo $row['Username']; ?></td>
                    <td class="td-element">
                        <a href="#" onclick="showUpdateModal(<?php echo $row['Id']; ?>,'<?php echo $row['Nombre']; ?>','<?php echo $row['Tipo']; ?>',<?php echo $row['Ataque']; ?>,<?php echo $row['Defensa']; ?>,<?php echo $row['Vida']; ?>,<?php echo $row['Precio']; ?>,'<?php echo $row['Username']; ?>','<?php echo $row['Url_item']; ?>')">Actualizar</a>
                    </td>
                    <td class="td-element">
                        <a href="#" onclick="delete_item(<?php echo $row['Id']; ?>)">Borrar</a>
                    </td>
                </tr>  
                <?php
            }
        ?>  
    </table>
</body>
</html>