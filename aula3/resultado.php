<?php
$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$aulas = $_POST['aulas'];
$faltas = $_POST['faltas'];

$media = ($nota1 + $nota2)/2;
$freq = ($aulas/$faltas)*100;

    if ($media >= 6 and $freq >=75){
        echo "$nome Aprovado! <br> Média: $media <br> Frequência $freq";
    }
    else {
        echo "$nome Reprovado! <br> Média: $media <br> Frequência $freq";
    }
?>