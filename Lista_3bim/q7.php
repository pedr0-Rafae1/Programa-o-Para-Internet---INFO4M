<?php

$contador = 20;

while ($contador >= 0) {
    if ($contador % 5 == 0) {
        echo $contador . " - múltiplo de 5 \n";
    }else {
        echo $contador . "\n";
    }
    
    --$contador;
}

echo "Contagem encerrada!";