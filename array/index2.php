<?php
$warnaterang = ['kuning','hijau','pink'];
$warngelap = ['hitam','abu-abu','cokelat'];

//gabungkan 2 array tersebut menjadi 1
$warna_warna = array_merge($warnaterang, $warnagelap);
//array_merge bisa ditambahkan lebih dari 2
$semua_warna = array_merge(
    $warnaterang,
    $warnagelap,
    ['Magenta','Cyan','Hijau Kelabu']
);

//unpacking untuk mengekstrak array menggunakan ...
$list_buah_lokal = ['mangga','rambutan'];
$list_buah = ['kurma','anggur',$list_buah_lokal,'kismis'];
//kurma,anggur,mangga,rambutan,kismis

//explode array berfungsi memecah-belah string lalu diubah kedalam array

//expload ada 2 parameter : delimeter(pemisah),string sasaran(sasaran yang akan kita pecah menjadi array)

$siswa = "andi budi mamat indro";
var_dump(explode(" ",$siswa));


//impload fungsi kebalikannya expload
//impload dia ada 2 parameter : glue(penggabung),array sasaran(sasaran yang akan itu gabung menjadi string)

$siswa_pintar = ['refa','agis','nocan'];
echo implode(' wkwk',$siswa_pintar);
?>