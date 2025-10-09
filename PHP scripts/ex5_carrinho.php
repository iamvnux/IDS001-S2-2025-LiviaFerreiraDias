<?php

$carrinho = [
    "Camiseta" => 50.00,
    "Calça" => 100.00,
    "Tênis" => 250.00,
    "Boné" => 40.00
];


$total = array_sum($carrinho);

echo "=== RECIBO DE COMPRA ===\n";
foreach ($carrinho as $produto => $preco) {
    echo "$produto - R$ " . number_format($preco, 2, ',', '.') . "\n";
}
echo "--------------------------\n";
echo "Total: R$ " . number_format($total, 2, ',', '.') . "\n";
?>
