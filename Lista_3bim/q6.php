<?php
$numero1 = 13;
$numero2 = 12;
$numero3 = 14;

if($numero1 > $numero2 && $numero1 > $numero3){
    echo "O maior número é o " . $numero1;
} elseif ($numero2 > $numero1 && $numero2 > $numero3) {
    echo "O maior número é o " . $numero2;
} else {
    echo "O maior número é o " . $numero3;
}