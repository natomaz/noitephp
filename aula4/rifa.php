<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rifa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container text-center mt-5">
        <div class="row justify-content-md-center">
        <?php
            $item = $_POST['item'];
            $data = $_POST['data'];
            $quantidade = $_POST['quantidade'];
            $valor = $_POST['valor'];

            echo "
                <div class='col col-lg-2 border text-sm-start p-4'>
                <strong>NOME</strong><br><br><br><br><br>
                <strong>ENDEREÇO</strong><br><br><br><br><br>
                </div>
                <div class='col border p-4'>
                <strong>AÇÃO ENTRE AMIGOS</strong><br><br>
                <p>Prêmio: $item</p>
                <p>Data: $data</p>
                <p>Valor: $valor</p>
                <p>Nº: $quantidade </p>
                </div>"
        ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>