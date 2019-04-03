<?php

function printArr($arr){
    foreach($arr as $key => $value){
        echo "$key => $value<br>";
    }
}

function largest($arr){
    $largest = 0;
    foreach ($arr as $value){
        if($value > $largest){
            $largest = $value;
        }
    }

    return $largest;
}

function average($arr){
    $total = 0;
    $count = 0;
    foreach ($arr as $value){
        $total = $total + $value;
        $count += 1;
    }
    $result = $total / $count;

    return $result;
}

function removeDups($arr){
    return array_unique($arr);
}

function distribution($arr){
    $limited = array();
    foreach ($arr as $key => $value){
        if(isset($limited[$value])){
            $limited[$value] += 1;
        }
        else{
            $limited[$value] = 1;
        }
    }

    ksort($limited);
    return $limited;
}

?>
