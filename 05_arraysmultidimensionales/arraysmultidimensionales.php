<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays multidimensionales </title>
</head>
<body>
    <?php
     $juegos = [
        ["Pacman","","24"]
        ["Super Mario","","73"]
        ["Grimsoul","","91"]
        ["Final fantasy","","56"]
        ["Assasins creed","","34"]
        ["Legend of zelda","","26"]
        
     ];

     $nuevo_juego= ["fruit ninja","móvil", 0]

     array_push($juegos,$nuevo_juego);

     unset($juegos[1]);


     $titulo = array_column($juegos, 0);
     $consola = array_column($juegos, 1);
     array_multisort($consola, SORT_ASC,$titulo, SORT_DESC, $juegos);


     ?>
     <table>
        <tr>
            <th>Titulo</th>
            <th>Consola</th>
            <th>Precio</th>   
     </tr>
     <?php 
         foreach ($juegos as $juego)  {
            list($titulo, $consola, $precio) = $juego
    ?>
            <tr>
            <td><?php echo $titulo ?></td>
            <td><?php echo $consola ?></td>
            <td><?php echo $precio ?></td>
            </tr>
            <?php
            }
            ?>


     </table>
    
</body>
</html>