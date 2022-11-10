<html>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
<?php
// inclui o arquivo de inicialização
require 'init.php';

 
// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

//verifica se as variáveis email e password não estão vazias
if (empty($email) || empty($password))
{
    echo '<div class="container box mt-4"><div class="alert alert-warning" role="alert">PREENCHA OS DADOS!</div></div>';
    header("Refresh: 3; URL=http://localhost/noitephp/sislogin/index.php");
    exit;
}
 
// cria o hash da senha
$passwordHash = make_hash($password);
 
//Conecta no banco de dados
$PDO = db_connect();
 
//Verifica se o email e a senha existem no banco de dados
$sql = "SELECT id, name FROM users WHERE email = :email AND password = :password";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $passwordHash);
 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 


if (count($users) <= 0)
{
    //echo "Email ou senha incorretos";
    echo '<div class="container box mt-4"><div class="alert alert-danger" role="alert">DADOS INCORRETOS!</div></div>';
    header("Refresh: 3; URL=http://localhost/noitephp/sislogin/index.php");
    exit;
}
 
// pega o primeiro usuário
$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['name'];
 
header('Location: index.php');

?>