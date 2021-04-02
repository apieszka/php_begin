<?php

function reverseWords($str){
    $arr = array();
    $arr = explode(" ",$str);

    $arr1 = array();
    for($l=0; $l<count($arr); $l++){
        array_push($arr1, strrev($arr[$l]));
    }
    $reversed_String = implode(" ", $arr1);

    return $reversed_String;
}

echo reverseWords("This is an example!");
?>
