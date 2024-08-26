<?php 

$idade = 13;


if ($idade <= 12) {
    echo "Criança";
}

else if ($idade >= 18 && $idade <= 65 ) {
    echo "Maior de idade";
}

else if ($idade >= 65) {
    echo "Idoso";
}

else {
    echo "Idade inválida";
}

?>