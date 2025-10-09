<?php
$nome = readline("Digite o nome da peça: ");
$tamanho = strtoupper(readline("Digite o tamanho (P, M ou G): "));

switch ($tamanho) {
    case "P":
        $preco = 50;
        break;
    case "M":
        $preco = 60;
        break;
    case "G":
        $preco = 70;
        break;
    default:
        echo "Tamanho inválido!";
        exit;
}

if ($tamanho == "G") {
    $preco *= 1.10; 
}

echo "A peça '$nome' tamanho $tamanho custa R$ " . number_format($preco, 2, ',', '.') . "\n";
?>
