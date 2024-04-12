<?php 

$salario = $_POST["salario"];
$tempo = $_POST["tempo"];

if($tempo >= 5) {
    $bonus = $salario * 0.20;
} else {
    $bonus = $salario * 0.10;
}

$salarioFinal = $salario + $bonus;

echo $salarioFinal;