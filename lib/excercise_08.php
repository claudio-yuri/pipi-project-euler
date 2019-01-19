<?php

function getProductOfAdjacentDigits($number, $numberOfDigits){
    $array = str_split($number);
    $length = count($array);
    
    $theNumber = 0;
    $theProduct = 0;
    
    for($i = 0; $i < ($length - ($numberOfDigits - 1)); $i++){
        $newProduct = 1;
        $newNumber = 0;
        for($j = 0; $j < $numberOfDigits; $j++){
            $num = intval($number[$i+$j]);
            $newProduct *= intval($num);
            $newNumber += ($num * pow(10,($numberOfDigits - 1 - $j)));
        }
        if($newProduct > $theProduct){
            $theProduct = $newProduct;
            $theNumber = $newNumber;
        }
    }
    return array("theNumber" => $theNumber, "theProduct" => $theProduct);
}
?>