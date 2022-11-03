<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <div class="container box">
            <h1 style='font-family: "Abril Fatface", cursive; color: indigo; font-size: 50pt; text-align:center'>
                Exercício 8 <br>
            </h1>
                <form action="index.php" method="get">

                <div class="mb-3">
                    <label for="n1">Horas gasta em uma viagem:</label>
                    <input type="number" class="form-control" name="n1">
                </div>

                <div class="mb-3">
                    <label for="n2">Velocidade média do seu percurso:</label>
                    <input type="number" class="form-control" name="n2">
                </div>

                <div class="res">
                    <button class="btn btn-outline-secondary" name="rep" type="submit">CALCULE</button>

                </div>

                <div class="res">
                <?php
                $tempogasto=$_GET['n1'];
                $velocidademedia=$_GET['n2'];
                $autonomia = 12;
                
                $distancia = $velocidademedia * $tempogasto;
                $litrosusados = $distancia/$autonomia;
                

                echo "<h1 style='color:indigo; font-size: 14pt; text-align:center'>
                Velocidade média: ".$velocidademedia." km/h.<br>
                Tempo gasto: ".$tempogasto." horas.<br> 
                Distância percorrida: ".$distancia." km. <br>
                Quantidade de combustível utilizado: ".$litrosusados." litros.                
                </h1>";

                ?>
                </div>
                </form>  
        </div>
    </body>
</html>