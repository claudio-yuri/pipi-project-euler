<?php
function getPrimeFactors($number){
    $primeFactors = array();
    $max = $number;
    for($i = 2; $i <= $max; $i++){
        if(($max % $i) == 0 && ($i % 2) != 0 && ($i % 3) != 0){
            $hasDiv = false;
            foreach($primeFactors as $pf){
                if(($i % $pf) == 0){
                    $hasDiv = true;
                    break;
                }
            }
            if (!$hasDiv){
                $primeFactors[]=$i;
                $max = $max / $i;
            }
        }
    }
    return $primeFactors;
}
?>