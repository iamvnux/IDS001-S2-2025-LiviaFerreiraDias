<?php
$valor = (int)readline("Digite o valor para saque (20, 50 ou 100): ");

switch ($valor) {
    case 20:
        $nota = 20;
        break;
    case 50:
        $nota = 50;
        break;
    case 100:
        $nota = 100;
        break;
    default:
        echo "Valor inválido!\n";
        exit;
}

$qtd = 0;
$total = $valor;

while ($total >= $nota) {
    $total -= $nota;
    $qtd++;
}

echo "Você sacou R$ $valor em $qtd nota(s) de R$ $nota.\n";
?>
