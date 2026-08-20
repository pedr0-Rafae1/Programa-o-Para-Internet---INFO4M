<?php

$numero = 15;

if($numero % 3 == 0 && $numero % 5 == 0) {
    echo "O número é divisível por 3 e 5";
} elseif ($numero % 3 == 0) {
    echo "O número é divisível por 3";
} elseif ($numero % 5 == 0) {
    echo "O número é divisível por 5";
} else {
    echo "O número não é divisível por 3 nem por 5";
}