<?php

//mencob membuat fungsi yang ada parameter
function barang($tisu, $jumlah, $harga){
    echo"<h2> Saat aku menggunakan {$tisu}</h2>";
    echo"<h2> aku gunakan {$jumlah} satu lembar</h2>";
    echo"<h2> {$jumlah} harganya {$harga}</h2>";

}
barang('tisu','satu lembar','2000');

$f = ['saat','aku','menggunakan','tisu'];
$a = ['aku','gunakan','satu','lembar','satu','lembar'];
$j = ['satu','lembar','harganya','2000'];

$panjang1 = count ($f);
$panjang2 = count ($a);
$panjang3 = count ($j);

var_dump($panjang1);
echo "<br>";
var_dump($panjang2);
echo "<br>";
var_dump($panjang3);
echo "<br>";
?>