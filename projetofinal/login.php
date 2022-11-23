<html>
<link rel="stylesheet" href="css/style.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php
// inclui o arquivo de inicialização
require 'init.php';


// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

//verifica se as variáveis email e password não estão vazias
if (empty($email) || empty($password)) {
    echo "<script>Swal.fire({
        icon: 'warning',
        text: 'Preencha os dados!'})</script>";
    header("Refresh: 1; URL=http://localhost/noitephp/projetofinal/index.php");
    exit;
}

//Conecta no banco de dados
$PDO = db_connect();

//Verifica se o email e a senha existem no banco de dados
$sql = "SELECT id, nome FROM usuarios WHERE email = :email AND senha = :senha";
$stmt = $PDO->prepare($sql);
var_dump($stmt);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $password);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);



if (count($users) <= 0) {
    //echo "Email ou senha incorretos";
    echo "<script>Swal.fire({
        icon: 'warning',
        text: 'Dados incorretos!'})</script>";
    header("Refresh: 1; URL=http://localhost/noitephp/projetofinal/index.php");
    exit;
}

// pega o primeiro usuário
$user = $users[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['name'];

header('Location: panel.php');

?>