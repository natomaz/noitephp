<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            Exercício 5<br>
        </h1>
        <form action="exer5.php" method="get">

            <div class="mb-3">
                <label for="nome">Digite uma palavra:</label>
                <input type="text" class="form-control" name="nome">
            </div>

            <div class="res">
                <button class="btn btn-outline-secondary" name="rep" type="submit">GERAR</button>
            </div>

            <div class="res">
                <?php
                if (isset($_GET['rep'])) {
                    $n = $_GET['nome'];
                    $len = iconv_strlen($n);
                    echo "<h1 style='color:indigo; font-size: 14pt; text-align:center'>Palavra: " .$n. "</h1>";
                    echo "<h1 style='color:indigo; font-size: 14pt; text-align:center'>Total: " .$len. "</h1>";       
                }
                $i=0;
                while (isset($n[$i])){
                    $i++;
                }
                echo "<h1 style='color:indigo; font-size: 14pt; text-align:center'>Todos os números: </h1>";
                for ($cont=1; $cont <= $i; $cont++){
                    echo "<h1 style='color:indigo; font-size: 14pt; text-align:center'>" .$cont. "</h1>";
                }
                ?>
            </div>
        </form>
    </div>
</body>

</html>