<?php
function tes(){
    static $a = 0; #mendefisikan variable lokal

    echo "a: {$a} <br>";

    $a++; #increment variable lokal
}
tes();
tes();
tes();
?>