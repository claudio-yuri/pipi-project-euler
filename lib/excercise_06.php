<?php

function excercise_06(){
    $max = 100;
    $sumOfSquares = 0;
    $sum = 0;
    for($i = 1; $i <= $max; $i++){
        $sumOfSquares += $i * $i;
        $sum += $i;
    }
    return ($sum * $sum) - $sumOfSquares;    
}

?>