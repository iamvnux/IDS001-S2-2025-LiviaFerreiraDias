<?php

$salarios = [1800, 2200, 1500, 2500, 1900];

echo "Salários atualizados:\n";

foreach ($salarios as $salario) {
    if ($salario < 2000) {
        $salario *= 1.10;
    }
    echo "R$ " . number_format($salario, 2, ',', '.') . "\n";
}
?>
