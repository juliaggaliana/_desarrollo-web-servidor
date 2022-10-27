<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $videojuegos = array(
            "juego1" => "Cyberpunk 2077",
            "juego2" => "Minecraft",
            "juego3" => "My Little Ponny"
        );
        print_r($videojuegos);

        echo "<br><br>";

        $consolas = [
            "consola1" => "PS4",
            "consola2" => "PS5",
            "consola3" => "Nintendo Switch"
        ];
        print_r($consolas);

        echo "<br><br>";

        $personas = [
            "23242627F" => "Albertiño",
            "95542627T" => "Armando",
            "87234455G" => "Pepe"
        ];

        $personas["12345678D"] = "Rodolfo";

        $personas["87234455G"] = "Ruperto";

        unset($personas["23242627F"]);
        $personas = array_values($personas);

        //echo $personas["23242627G"];

        echo "<br><br>";

        $series = [
            'El juego del calamar',
            'La casa de papel',
            'Alice in borderland',
            'The Witcher'
        ];    

        /* Insertar elementos 
        $series[10]
        array_push
        unset 
        */

        $series = array_values($personas);
        echo "Hay" .count($personas)  ." personas";


        foreach($series as $serie){
             echo $serie ."<br>";
        }



        /* MEDIANTE FOR EACH, MOSTRAR TODAS LAS PERSONAS 
        Y SUS DNI EN UNA TABLA
        */

        foreach($personas as $key => $persona){
            echo $persona ."con DNI". $key  ;
       }


/* ORDENAR LAS PERSONAS POR DNI, DE MENOR A MAYOR 
  ORDENAR LAS PERSONAS POR NOMBRE, EN ORDEN ALFABETICO 
  INVERSO
  */








?>

 <!-- Bucle for para las series -->


        <ul>
            <?php

        for ($i =0; $i < count($series); $i++){
            ?>
            <li><?php echo $series[$i] ?></li>
            <?php

        }
        ?>


         

        </ul>


        <!-- Bucle while para las series-->

        <ol>
            <?php
            $i = 0;
            while ($i <count ($series)){
            ?>
               <li><?php echo $series[$i] ?> </li>
            <?php
             $i++;

            }
            ?>
            </ol>
       
        <?php 
        
         //abrir y cerrar php sirve para que quede la lista mejor
    
        print_r($series);
        echo "<br><br>";
        echo $series[1];    //  Devuelve 'The Witcher'
    ?>  

  <?php
    $frutas_1 = ["Melocotón" => 0.5,"Sandía" => 1, "Kiwi" => 2];

    $frutas_2 = ["Sandía" => 1, "Melocotón" => 0,5, "Kiwi" => 2];




    if ($frutas_1 == $frutas_2) {
        echo "<p>las frutas son las mimas y estan igual ordenadas</p>"
    } else {
        echo "<p> las frutas no son las mismas o no estan igual ordenadas</p>"
    }
?>










</body>
</html>



<?php
//ejercicio array dni y persona (github ale)


?>