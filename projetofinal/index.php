<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devide-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <header class="header">
        <a href="http://localhost/noitephp/projetofinal/index.php"><img src="./img/logo.jpg" width=100 height=100></a>
    </header>

    <body>
        <div class="container box mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4 style='font-family: "Montserrat", sans-serif; color: black; font-size: 35pt; text-align:center'>
                                Autenticação
                            </h4>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center text-center">
                            <form method="post">
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control center-block" id="floatingInput" placeholder="Email">
                                    <label for="floatingInput">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password">
                                    <label for="floatingInput">Senha</label>
                                </div>

                        </div>
                        <input style='font-family: "Montserrat", sans-serif; font-size: 15pt' class="btn btn-light float-end" type="submit" name="login" value="LOGIN">
                        </form>

                        <a style='font-family: "Montserrat", sans-serif; font-size: 15pt' class="btn btn-light float-end" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                            CADASTRE-SE
                        </a>

                    </div>
                </div>
            </div>
            <!-- modal login -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h1 style='font-family: "Montserrat", sans-serif; font-size: 20pt;' class="modal-title fs-5" id="exampleModalLabel">Cadastro</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="index.php" method="post">
                                <div class="mb-3">
                                    <input type="nome" name="nome" id="nome" class="form-control" placeholder="Nome">
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Senha">
                                </div>
                                <div class="mb-3">
                                    <input type="date" name="data" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-dark" name="cadastrar" value="CADASTRAR">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </body>

</html>

<!-- Login e Cadastro -->
<?php
//define('DB_HOST', 'localhost');
//define('DB_USER', 'root');
//define('DB_PASS', '');
//define('DB_NAME', 'projetofinal');

//ini_set('display_errors', true);
//error_reporting(E_ALL);
//try {
//    $conexao = new PDO("mysql:host=localhost; dbname=crudsimples", "root", "");
//    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $conexao->exec("set names utf8");
//} catch (PDOException $erro) {
//    echo "Erro na conexão:" . $erro->getMessage();
//}




if (isset($_POST['login'])) {

    require('conectar.php');
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
  

    //$query = "SELECT id,nome FROM `usuarios` WHERE email = $email and senha = $password";
    //var_dump($query);

    $result = "SELECT * FROM `usuarios` WHERE email = $email and senha = $password";
    var_dump($result);

    $r = mysqli_query($con, $result);

   
    $row = mysqli_num_rows($r);
    

    if ($row >= 1) {
        $_SESSION['email'] = $email;
        echo "teste";
        header ("location: panel.php");
        session_start();
        
        exit;
    } else {
        echo "<script>Swal.fire({
                    icon: 'warning',
                    text: 'Dados incorretos!'})</script>";
        exit;
    }


    if (empty($email) || empty($password)) {
        echo "<script>Swal.fire({
                    icon: 'warning',
                    text: 'Preencha os dados!'})</script>";
        exit(0);
    }
} else {


    if (isset($_POST['cadastrar'])) {
        $nome = mysqli_real_escape_string($con, $_POST['nome']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $senha = mysqli_real_escape_string($con, $_POST['password']);
        $data = mysqli_real_escape_string($con, $_POST['data']);
        $query = "INSERT INTO usuarios (nome,email,senha,datanasc) VALUES 
   ('$nome','$email','$senha','$data')";
        $query_run = mysqli_query($con, $query);
        if ($query_run) {
            echo "<script>Swal.fire({
            icon: 'success',
            timer: 1500,
            text: 'Usuário cadastrado!'})</script>";
            exit(0);
        } else {
            echo "<script>Swal.fire({
            icon: 'error',
            timer: 1500,
            text: 'Usuário não cadastrado!'})</script>";
            exit(0);
        }
    }
}
?>