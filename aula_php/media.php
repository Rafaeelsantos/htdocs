<?php

$prova1 = 5;
$prova2 = 9;
$prova3 = 3;

$media = ($prova1 + $prova2 + $prova3) / 3;
$valor = round($media, 2);

if ($media >= 7) {
    echo "Aluno aprovado média: $valor";
}

else if ($media > 5 && $media < 7) {
    echo "Aluno em recuperação média: $valor";
}

else {
    echo "Aluno reprovado média: $valor";
}

?>