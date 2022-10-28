<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
     <h1>Ejercicio 5</h1>


     <?php
     $estudiantes = [
        ["Luis", rand(0,10)]
        ["Alfredo", rand(0,10)]
        ["Elena", rand(0,10)]

     ];
     ?>



<table>
            <tr>
                <th>Nombre</th>
                <th>Nota</th>
                <th>Calificacion</th>
            </tr>
            <?php
            foreach ($estudiantes as $estudiantre){
                list($nombre, $nota) = $estudiante;
            ?>

<tr>
                <td>Nombre</td>
                <td>Nota</td>
                
            </tr>





            }


 </table>            
    
</body>
</html>