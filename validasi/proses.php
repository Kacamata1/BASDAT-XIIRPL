<?php

require 'helper/fungsi-validasi.php';

// tambahkan rules masing masing jenis formnya

$rules = [
    'nama' => ['required'],
    'email' => ['required','email'],
    'username' => ['required','username'],
    'usia' => ['required','numeric']
];

$errors = validasi($rules);

// echo "<pre>";
// print_r($errors);
// echo "</pre>";

//Di sini kita bisa melakukan proses yang harus dilakukan 
// jika tidak terjadi erorr validasi apapun

if (count($erorrs) > 0) {
    $time = $_REQUEST;
    $queryString = http_build_query([
        'errors' => $errors,
        'time' => $time
    ]);

    header("location: form.php?{$queryString}");
    die();
}
?>