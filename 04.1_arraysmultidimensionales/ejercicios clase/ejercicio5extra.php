<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Ejercicio 5</title>
</head>
<body>
    <div class="container">
     <h1>Ejercicio 5</h1>


     <?php
     $estudiantes = [
        ["Luis", rand(0,10)]
        ["Alfredo", rand(0,10)]
        ["Elena", rand(0,10)]

     ];
     ?>



<table class="table">
            <tr>
                <th>Nombre</th>
                <th>Nota</th>
                <th>Calificacion</th>
            </tr>
            <?php
            foreach ($estudiantes as $estudiante){
                list($nombre, $nota1, $nota2, $nota3) = $estudiante;

                //<div class="row"></div> en una sola linea 
                //<div class ="col-6"></div> 
            ?>

                <tr>
                    <td><?php echo $nombre ?></td>
                    <td><?php echo $nota1 ?></td>
                    <td><?php echo $nota2 ?></td>
                    <td><?php echo $nota3 ?></td>
            </tr>
            </table>
            </div>
            



           
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>    
        </body>
            </html>