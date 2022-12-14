<?php

// Verificar se foi enviado dados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = (isset($_POST["id"]) && $_POST["id"] != null) ? $_POST["id"] : "";
    $nome = (isset($_POST["nome"]) && $_POST["nome"] != null) ? $_POST["nome"] : "";
    $email = (isset($_POST["email"]) && $_POST["email"] != null) ? $_POST["email"] : "";
    $datanasc = (isset($_POST["datanasc"]) && $_POST["datanasc"] != null) ? $_POST["datanasc"] : "";
    $ativo = (isset($_POST["ativo"]) && $_POST["ativo"] != null) ? $_POST["ativo"] : "";
} else if (!isset($id)) {
    // Se não se não foi setado nenhum valor para variável $id
    $id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
    $nome = NULL;
    $email = NULL;
    $datanasc = NULL;
    $ativo = NULL;
}
//conecta no banco de dados
try {
    $conexao = new PDO("mysql:host=localhost; dbname=projetofinal", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}
//salva e atualiza
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $nome != "") {
    try {
        if ($id != ""){
        $stmt = $conexao->prepare("UPDATE usuarios SET nome=?, email=?, datanasc=?, ativo=? WHERE id = ?");
        $stmt->bindParam(5, $id);
        
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Dados atualizados com sucesso!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
        
        } else {
        $stmt = $conexao->prepare("INSERT INTO contatos (nome, email, datanasc, ativo) VALUES (?, ?, ?, ?)");
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Dados cadastrados com sucesso!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
    }
        
        
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $datanasc);
        $stmt->bindParam(4, $ativo);
         
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    
                    $id = null;
                    $nome = null;
                    $email = null;
                    $datanasc = null;
                    $ativo = NULL;
                } else {
                    echo "Erro ao tentar efetivar cadastro";
                }
            } else {
                throw new PDOException("Erro: Não foi possível executar a declaração sql");
            }
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
    }
}
//recupera os dados
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "upd" && $id != "") {
    try {
        $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            $rs = $stmt->fetch(PDO::FETCH_OBJ);
            $id = $rs->id;
            $nome = $rs->nome;
            $email = $rs->email;
            $datanasc = $rs->datanasc;
            $ativo = $rs->ativo;
        } else {
            throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: ".$erro->getMessage();
    }
}
//deleta
if( isset ($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id != ""){
    try {
        $stmt = $conexao->prepare ("DELETE FROM usuarios WHERE id = ?");
        $stmt->bindParam(1,$id,PDO::PARAM_INT);
        
        if($stmt->execute()){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Dados deletados com sucesso!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            $id = null;
        } else {
            throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: ".$erro->getMessage();
    }
}

?>