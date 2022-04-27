<?php
    
    $array = ['test1', 'test2', 'test3'];
    var_dump(($array));

    $newIndex = array_key_last($array)+1;
    $array[$newIndex]= 'test4';
    var_dump($array);
?>