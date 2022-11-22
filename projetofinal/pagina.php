<?php
if (isset($_POST['login'])) {
    $con = mysqli_connect("localhost", "root", "", "projetofinal");
    
if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
} 

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
  

    //$query = "SELECT id,nome FROM `usuarios` WHERE email = $email and senha = $password";
    //var_dump($query);

    $result = "SELECT * FROM `usuarios` WHERE email = $email and senha = $password";
   

    $r = mysqli_query($con, $result);
    var_dump($result);

    
    $row = mysqli_num_rows($r);
    

    if ($row >= 1) {
        $_SESSION['email'] = $email;
        echo "teste";
        header('Location: panel.php');
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
}