<?php
$nome = $_POST['nome'];
$salario = $_POST['sal'];
$desconto = $_POST['desc'];
$sal = $salario - $desconto;
echo "Meu nome é $nome <br> Salário bruto é R$ $salario <br> Salário líquido R$ $sal";