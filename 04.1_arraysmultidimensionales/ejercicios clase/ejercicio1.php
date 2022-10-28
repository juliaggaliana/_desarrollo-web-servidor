<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
   $numerospares = [];

     for($i=2; $i<=50; $i= $i += 2);{
        $numerospares [] = $i;
     }
      shuffle($numerospares);
      rsort($numerospares);


     ?>
    <ul>
        <?php
         for ($i = 0; $i < count ($numeros); $i++){
        ?>
            <li><?php echo $numeros[$i] ?></li>
        <?php 
         }
         ?>

     
    
   



    

</body>
</html>