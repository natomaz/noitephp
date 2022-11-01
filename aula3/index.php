<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
</head>
<body>
<form action="resultado.php" method="post">
            <p>
                Nome:  <input type="text" name="nome"  />
            </p>
            <p>
                Nota 1: <input type="number" name="nota1" />
            </p>
            <p>
               Nota 2: <input type="number" name="nota2" />
            </p>
            <p>
            Quantidade de Aulas: <input type="number" name="aulas" />
            </p>
            <p>
            Quantidade de Faltas: <input type="number" name="faltas" />
            </p>
            <p>
                <input type="submit" value="Calcular" />
            </p>
        </form>
</body>
</html>