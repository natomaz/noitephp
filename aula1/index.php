<?php
    $nome = "Xiru";
    $anoNasc = 1969;
    $idade = 2022 - $anoNasc;
    $altura = 1.50;
    $peso = 80;
    $imc = $peso / pow($altura,2);

    if ($imc <= 18.5){
        echo "<h1 style='color:purple; font-size: 12pt; text-align:center'>DIAGNÓSTICO <br>
        NOME: ".$nome." <br> IMC: ".$imc." <br> RESULTADO: PENA </h1>";
    } else if ($imc >=18.6 and $imc <=24.9){
        echo "<h1 style='color:blue; font-size: 14pt; text-align:center'>DIAGNÓSTICO <br>
        NOME: ".$nome." <br> IMC: ".$imc." <br> RESULTADO: MAGRO </h1>";
    } else if ($imc >=25 and $imc <=29.9){
        echo "<h1 style='color:orange; font-size: 16pt; text-align:center'>DIAGNÓSTICO <br>
        NOME: ".$nome." <br> IMC: ".$imc." <br> RESULTADO: LEVEMENTE ACIMA DO PESO </h1>";
    } else if ($imc >=30 and $imc <=34.9){
        echo "<h1 style='color:red; font-size: 18pt; text-align:center'>DIAGNÓSTICO <br>
        NOME: ".$nome." <br> IMC: ".$imc." <br> RESULTADO: ACIMA DO PESO I </h1>";
    } else if ($imc >=35 and $imc <=39.9){
        echo "<h1 style='color:brown; font-size: 20pt; text-align:center'>DIAGNÓSTICO <br>
        NOME: ".$nome." <br> IMC: ".$imc." <br> RESULTADO: ACIMA DO PESO II </h1>";
    } else if ($imc >=40){
        echo "<h1 style='color:black; font-size: 30pt; text-align:center'>DIAGNÓSTICO <br>
        NOME: ".$nome." <br> IMC: ".$imc." <br> RESULTADO: OBESO </h1>";
    } else {
        echo "<h1 style='color:yellow; font-size: 40pt; text-align:center'> IMC NÃO ENCONTRADO. </h1>";
    }

    $a=2;
    $b=4;
    $c=6;
    $x = --$c + $b;
    $y = $b++ + $a;
    $z = $a - $b--;
    echo $x."<br>";
    echo $y."<br>";
    echo $z."<br>";
    
    //echo "<h2 style='color:brown; font-size: 40pt; padding:30px; text-align:center'>IMC $imc </h2>";

    //echo "<h1 style='color:brown; font-size: 40pt; padding:30px; text-align:center'>Meu nome é " 
    //.$nome." <br> Tenho ".$idade." anos </h1>";
?>
