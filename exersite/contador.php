<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylecont.css">
</head>
<body>
<?php 
    $fuso = new DateTimeZone('America/Sao_Paulo');
    $data = new DateTime();
    $data->setTimezone($fuso);
    $dia = $data->format('d');
    if ($dia % 2 == 0){
    require('menu.php');
    } else {
    require('menuimpar.php');
    }
    ?>
        <div class="container box">
            <h1 style='font-family: "Abril Fatface", cursive; color: indigo; font-size: 50pt; text-align:center'>
                Contador<br>
            </h1>
                <form action="contador.php" method="get">

                <div class="mb-3">
                    <label for="numb">Digite um número:</label>
                    <input type="number" class="form-control" name="numb">
                </div>

               <div class="res">
                    <button class="btn btn-outline-secondary" name="rep" type="submit">IMPRIMIR</button>
                </div>

                <div class="res">
                <?php
                if(isset($_GET['rep'])){
                $n=$_GET['numb'];

                for($cont = 1; $cont <= $n; $cont++){
            
                    if($cont % 2 == 0){
                        echo "<h1 style='color:blue; font-size: 14pt; text-align:center'>".$cont."</h1>"; 
                    }else {
                        echo "<h1 style='color:red; font-size: 14pt; text-align:center'>".$cont."</h1>"; 
                    }
                }
            }
                ?>
                </div>
                </form>  
        </div>
        <?php 
    $fuso = new DateTimeZone('America/Sao_Paulo');
    $data = new DateTime();
    $data->setTimezone($fuso);
    $dia = $data->format('d');
    if ($dia % 2 == 0){
    require('rodape.php');
    } else {
    require('rodapeimpar.php');
    }
    ?>
    </body>
</html>