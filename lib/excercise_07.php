<?php

function excercise_07(){
    $primeCount = 2;
    $number = 3;
    $primeNumbers = array();
    while($primeCount < 10001){
        $number++;
        if(($number % 2) != 0 && ($number % 3) != 0){
            $hasDiv = false;
            foreach($primeNumbers as $pn){
                if(($number % $pn) == 0){
                    $hasDiv = true;
                    break;
                }
            }
            if(!$hasDiv){
                $primeNumbers[] = $number;
                $primeCount++;
            }
        }
    }
    return $number;
}

?>