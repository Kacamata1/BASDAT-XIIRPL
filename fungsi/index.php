<?php

//cara membuat function
function ngoding(){
    
}

class Vscode
{
    public function coding_php(){

    }
}

//mencoba buat fungsi sapa teman
function sapa_teman()
{
     echo "<h1>hai ges<h1>";
     echo "<h3>ketemu lagi besti<h3>";
}

//mencob membuat fungsi yang ada parameter
function temen($temen_gue, $umur){
    echo"<h2> hey diaini bestie {$temen_gue}<h2>";
    echo"<h2> hey diaini umur segini {$umur}<h2>";
}

//cara panggil fungsi
//tuliskan nama function bersama()
sapa_teman();
//jika fungsi menggunakan paramter harus ditulis saat pemanggilnya
temen("rizki",18);

//mengcoba buat fungsi gunakan percabangan
function kasir($nama, $jumlah){
    echo"<h3>hai {$nama},terima kasih berkunjung<h3>";
    echo"<h3>dan janagn lupa kembali <h3>";
    //membuat perulangan menggunakan if (jika jumlah lebih maka akan dapat hadiah)
    if ($jumlah > 10) {
        echo"<h3>gokilkamu dapat mobil {$jumlah},terima kasih berkunjung<h3>";

    }
}
//panggil fungsinya
echo kasir("akbar",11);
?>