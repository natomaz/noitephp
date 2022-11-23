<?php
session_start();
require 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container box mt-4">
        <div class="row">
            <div class="col-md-12">

                <div class="card border border-secondary">
                    <div class="card-body">

                        <form class="row g-2" action="?act=save" method="POST" name="form1">
                            <h1 style='font-family: "Abril Fatface", cursive; font-size: 50pt; text-align:center'>Painel do Administrador</h1>
                            <input type="hidden" name="id" <?php
                                                            // Preenche o id no campo id com um valor "value"
                                                            if (isset($id) && $id != null || $id != "") {
                                                                echo "value=\"{$id}\"";
                                                            }
                                                            ?> />
                            <div class="col-auto">
                                Nome:
                                <input class="form-control" type="text" name="nome" <?php
                                                                                    // Preenche o nome no campo nome com um valor "value"
                                                                                    if (isset($nome) && $nome != null || $nome != "") {
                                                                                        echo "value=\"{$nome}\"";
                                                                                    }
                                                                                    ?> />
                            </div>
                            <div class="col-auto">
                                E-mail:
                                <input class="form-control" type="text" name="email" <?php
                                                                                        // Preenche o email no campo email com um valor "value"
                                                                                        if (isset($email) && $email != null || $email != "") {
                                                                                            echo "value=\"{$email}\"";
                                                                                        }
                                                                                        ?> />
                            </div>
                            <div class="col-auto">
                                Data de Nascimento:
                                <input class="form-control" type="date" name="datanasc" <?php
                                                                                        // Preenche o celular no campo celular com um valor "value"
                                                                                        if (isset($datanasc) && $datanasc != null || $datanasc != "") {
                                                                                            echo "value=\"{$datanasc}\"";
                                                                                        }
                                                                                        ?> />
                            </div>
                            <div class="col-auto">
                                Ativo:
                                <input class="form-control" type="number" name="ativo" <?php
                                                                                        // Preenche o celular no campo celular com um valor "value"
                                                                                        if (isset($ativo) && $ativo != null || $ativo != "") {
                                                                                            echo "value=\"{$ativo}\"";
                                                                                        }
                                                                                        ?> />
                            </div>
                            <br>
                            <div class="col-auto"  style="padding-top:23px">
                                
                                    <input class="btn btn-outline-dark" type="submit" value="SALVAR" />
                                    <input class="btn btn-outline-dark" type="reset" value="NOVO" />
                               
                            </div>

                        </form>
                        <br>
                        <table class="table table-bordered">
                            <tr>
                                <th><center>Nome</center></th>
                                <th><center>E-mail</center></th>
                                <th><center>Data de Nascimento</center></th>
                                <th><center>Ativo</center></th>
                                <th></th>
                            </tr>
                            <?php
                            try {
                                $stmt = $conexao->prepare("SELECT * FROM usuarios");

                                if ($stmt->execute()) {
                                    while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                                        $data = $rs->datanasc;
                                        $databr = implode('/', array_reverse(explode('-', $data)));
                                        echo "<tr>";
                                        echo "<td><center>" . $rs->nome . "</center></td><td><center>" . $rs->email . "</center></td><td><center>" . $databr . "</center></td><td><center>" . $rs->ativo . "</center></td>
                                        <td><center><a name='alterar' class='btn btn-outline-dark' href=\"?act=upd&id=" . $rs->id . "\">ALTERAR</a>"
                                            . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                                            . "<a class='btn btn-outline-dark' href=\"?act=del&id=" . $rs->id . "\">EXCLUIR</a></center></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "Erro: Não foi possível recuperar os dados do banco de dados";
                                }
                            } catch (PDOException $erro) {
                                echo "Erro: " . $erro->getMessage();
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>