<?php 

$emprestimo = $_POST["emprestimo"];
$parcelas = $_POST["parcelas"];
$salario = $_POST["salario"];


$valorParcela = $emprestimo/$parcelas;

if(($valorParcela/$salario) * 100 > 30) {
    echo "Empréstimo Aprovado";
} 