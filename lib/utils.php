<?php

function measureTime($func){
    $executionStartTime = microtime(true);
    $ret = $func();
    print $ret;
    $executionEndTime = microtime(true);
    print "\r\n".($executionEndTime - $executionStartTime) . "s";
}

?>