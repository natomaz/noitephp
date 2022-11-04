<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <div class="container box">
            <h1 style='font-family: "Abril Fatface", cursive; color: indigo; font-size: 50pt; text-align:center'>
                Exercício 4 <br>
            </h1>
                <form action="index.php" method="get">

                <div class="mb-3">
                    <label for="n1">Digite o valor de A:</label>
                    <input type="number" class="form-control" name="n1">
                </div>

                <div class="mb-3">
                    <label for="n2">Digite o valor de B:</label>
                    <input type="number" class="form-control" name="n2">
                </div>

                <div class="mb-3">
                    <label for="n3">Digite o valor de C:</label>
                    <input type="number" class="form-control" name="n3">
                </div>


                <div class="res">
                    <button class="btn btn-outline-secondary" name="rep" type="submit">CALCULE</button>

                </div>


                <div class="res">
                <?php
                if(isset($_GET['rep'])){
                $a=$_GET['n1'];
                $b=$_GET['n2'];
                $c=$_GET['n3'];

                $d = ($b*$b)-((4*$a)*$c);

                $x1 = (-$b + sqrt ($d)) / (2 * $a);
                $x2 = (-$b - sqrt ($d)) / (2 * $a);

                echo "<h1 style='color:indigo; font-size: 14pt; text-align:center'>O valor de a é ".$a."</h1>";
                echo "<h1 style='color:indigo; font-size: 14pt; text-align:center'>O valor de b é ".$b."</h1>"; 
                echo "<h1 style='color:indigo; font-size: 14pt; text-align:center'>O valor de c é ".$c."</h1>"; 
                echo "<h1 style='color:indigo; font-size: 14pt; text-align:center'>O valor de delta é ".$d."</h1>"; 
                echo "<h1 style='color:indigo; font-size: 14pt; text-align:center'>O valor de x1 é ".$x1."</h1>"; 
                echo "<h1 style='color:indigo; font-size: 14pt; text-align:center'>O valor de x2 é ".$x2."</h1>"; 
                }
                ?>
                </div>
                </form>  
        </div>
    </body>
</html>