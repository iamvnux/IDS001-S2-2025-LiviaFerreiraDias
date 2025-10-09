<?php

$alunos = [
    "João" => [7, 6, 5, 8],
    "Maria" => [9, 8, 7, 10],
    "Pedro" => [5, 4, 6, 5],
    "Ana" => [6, 7, 6, 6]
];

foreach ($alunos as $nome => $notas) {
    $media = array_sum($notas) / count($notas);
    
    echo "$nome - Média: " . number_format($media, 2, ',', '.');
    
    if ($media >= 6) {
        echo " → Aprovado\n";
    } else {
        echo " → Reprovado\n";
    }
}
?>
