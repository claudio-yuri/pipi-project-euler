<?php 

function excercise_02(){
    $num1 = 1;
    $num2 = 0;
    $accumulator = 0;
    do{
        $sum = $num1 + $num2;
        if(($sum % 2) != 0){
            $accumulator += $sum;
        }
        $num1 = $num2;
        $num2 = $sum;
    }
    while(($num1 + $num2) <= 4000000);

    return $accumulator;
}

?>