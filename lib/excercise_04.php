<?php
function getLargestPalindrom(){
    $pals = array();
    for($i = 999; $i >= 100; $i--){
        for($j = 999; $j >= 100; $j--){
            $product = $i * $j;
            if($product == strrev($product))
            {
                $pals[]= $product;
            }
        }
    }
    return max($pals);
}
?>