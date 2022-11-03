<?php

//function itu ada 2 ,ada yang mengembalikan nilai dan ada yang tidak
// array yang berisi 3 nilai
$a = ['merah','kuning','hijau'];
//fungsi dari is_null itu mengembalikan nilai bernilai true or false
$fungsi_is_null = is_null($a);
//fungsi dari is_array itu mengembalikan apakah array atau tidak
$fungsi_is_array = is_array($a);
//fungsi dari count 
$panjang = count ($a);

//fungsi mengenkripsi karakter MD5
$enkripsi = md5('sebenarnya aku masi sayang sama kam');

///fungsi var_damp untuk menampilkan hasil dari function 
var_dump($fungsi_is_null);
echo "<br>";
var_dump($fungsi_is_null);
echo "<br>";
var_dump($panjang);
var_dump($enkripsi);







?>