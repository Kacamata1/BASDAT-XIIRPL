<?php

// Penggunaan Array Menggunakan For Dan Foreach
// // For Perulangan Yang Akan Diulang Sesuai Set Yang Kita Atur

// // Variable Angka Memiliki Nilai Pertama = 0 dan Diakhiri Kurang Atau Sama Dengan 10, Dihitung Increment 
// for ($angka =0; $angka <= 10; $angka ++){
//     echo "angkanya adalah : $angka <br>";
// }


//Foreach
//Foreach Mengulang Sesuai Nilai Yang Mau Diambil
// $warna = array("merah","hijau","kuning","merah");
// foreach ($warna as $variasi ) {
//     echo "Berwarna : $variasi <br>";
// }

// Tugas Menerapkan For dan Foreach Menggunakan PHP
$days = ["Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu"];
?>


<html>
    <head>
        <title>Latihan Menggunakan For dan Foreach</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        for ($hari= 0; $hari < count($days); $hari++){ 
        ?>
        <div class="box">
            <?php echo $days[$hari];?>
        </div>
        <?php } ?>
        <div class="clear"></div>
        <?php foreach($days as $hari_hari) { ?>
            <div class="box2">
                <?php echo $hari_hari;?>
            </div>
            <?php } ?>
    </body>
</html>