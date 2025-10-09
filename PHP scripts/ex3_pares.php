<?php
$pares = [];
$i = 1;
$soma = 0;

while ($i <= 50) {
    if ($i % 2 == 0) {
        $pares[] = $i;
        $soma += $i;
    }
    $i++;
}

echo "Números pares entre 1 e 50:\n";
print_r($pares);

echo "Soma total dos pares: $soma\n";
?>
