<?php
 
// inclui o arquivo de inicialização
require 'init.php';
 
// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

//verifica se as variáveis email e password não estão vazias
if (empty($email) || empty($password))
{
    echo  '<script>alert("Incorreto!");</script>';
    echo "javascript:window.location='index.php'</script>";
    //exit;
   
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
    echo  '<script>alert("Incorreto!");</script>';
    header('Location: index.php');
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
<html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>