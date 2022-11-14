<?php
$a = 5;
$b = 3;

function luas (){
    $_globals['b'] = $_globals['a'] + $_globals['b'];
}

luas();
echo "a = {$a} <br>";
echo "b = {$b} <br>";
?>