<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Nosso singelo formulário </title>
        <meta charset="utf-8">
    </head>
    <body>

    <form action="destino.php" method="post">
            <p>
                Nome:  <input type="text" name="nome"  />
            </p>
            <p>
                Salario: <input type="number" name="sal" />
            </p>
               Descontos: <input type="number" name="desc" />
            <p>
                <input type="submit" value="Calcular" />
            </p>
        </form>

    </body>
</html>