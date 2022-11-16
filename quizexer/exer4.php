<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container box">
        <h1 style='font-family: "Abril Fatface", cursive; color: indigo; font-size: 50pt; text-align:center'>
            Exercício 4<br>
        </h1>
        <form action="exer4.php" method="get">

            <div class="mb-3">
                <label for="numero1">Digite um número:</label>
                <input type="number" class="form-control" id="numero1" name="numero1">
            </div>

            <div class="mb-3">
                <label for="numero2">Digite um número:</label>
                <input type="number" class="form-control" id="numero2" name="numero2">
            </div>
            <div class="but">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="somar" id="somar">
                    <label class="form-check-label" for="somar">
                        +
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="menos" id="menos">
                    <label class="form-check-label" for="menos">
                        -
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="mult" id="mult">
                    <label class="form-check-label" for="mult">
                        *
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="divi" id="divi">
                    <label class="form-check-label" for="divi">
                        /
                    </label>
                </div>
                <div class="res">
                    <button class="btn btn-outline-secondary" name="rep" type="submit">GERAR</button>
                </div>
                <div class="res">
                    <?php
                    if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
                        $n1 = $_GET['numero1'];
                        $n2 = $_GET['numero2'];

                        if (isset($_GET['somar'])) {
                            $res = $n1 + $n2;
                            $op = "Soma:";
                            echo " Resultado da $op  $res";
                        } else  if (isset($_GET['menos'])) {
                            $res = $n1 - $n2;
                            $op = "Subtração:";
                            echo " Resultado da $op  $res";
                        } else if (isset($_GET['mult'])) {
                            $res = $n1 * $n2;
                            $op = "Multiplicação:";
                            echo " Resultado da $op  $res";
                        } else if (isset($_GET['divi'])) {
                            $res = $n1 / $n2;
                            $op = "Divisão:";
                            echo " Resultado da $op  $res";
                        }
                    }
                    ?>
                </div>
        </form>
    </div>
</body>

</html>