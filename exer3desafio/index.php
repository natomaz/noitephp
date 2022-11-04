<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <div class="container box">
            <h1 style='font-family: "Abril Fatface", cursive; color: indigo; font-size: 50pt; text-align:center'>
                Exercício 3<br>
            </h1>
                <form action="index.php" method="post">

                <div class="mb-3">
                    <label for="data">Insira a data:</label>
                    <input type="date" class="form-control" name="data">
                </div>

                <div class="res">
                    <button class="btn btn-outline-secondary" name="rep" type="submit">GERAR</button>

                </div>

                <div class="res">
                <?php
                if(isset($_POST['rep'])){
                $data = $_POST['data']; 

                $databr = implode('/', array_reverse(explode('-', $data)));

                $ano = substr($data,0,4);
                $mes = substr($data,5,2);
                $dia = substr($data,8,2);

                echo "<h1 style='color:indigo; font-size: 14pt; text-align:center'>
                Data: ".$databr."<br>
                Dia: ".$dia."<br>
                Mês: ".$mes."<br>
                Data: ".$ano."                
                </h1>";
                }
                ?>
                </div>
                </form>  
        </div>
    </body>
</html>