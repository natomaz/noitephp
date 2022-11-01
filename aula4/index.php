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
    <div class="container">
        <h1 style='font-family: "Abril Fatface", cursive; color: indigo; font-size: 50pt; text-align:center'>RIFA <br></h1>

        <form action="rifa.php" method="post">
                <div class="mb-3">
                    <label for="item">Item da Rifa</label>
                    <input type="text" class="form-control" id="item" name="item">
                </div>

                <div class="mb-3">
                    <label for="data">Data do Evento</label>
                    <input type="date" class="form-control" id="data" name="data">
                </div>        

                <div class="mb-3">   
                    <label for="quantidade">Quantidade de Números</label>     
                    <input type="number" class="form-control" id="quantidade" name="quantidade">
                </div>        

                <div class="mb-3"> 
                    <label for="valor">Valor</label>       
                    <input type="number" class="form-control" id="valor" name="valor">
                </div>        

                <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-dark btn-lg" type="submit">GERAR</button>
                </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>