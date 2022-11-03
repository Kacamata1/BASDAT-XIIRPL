<?php

//Pewarisan atau Intheritance

//clas induk

class komputer {
    public $merk;
    public $prosesor;
    public $memory;

    //fungsi/operasi membuat beli komputer
    public function beli_komputer(){
        return "Beli komputer baru";

    }
}

//kelas turunan/eztands dari class komputer ke class laptop

class laptop extends komputer{
    public function lihat_spek(){
        //Ambil Property Class Komputer
        return "merk: $this->merk, prosesor: $this->prosesor, memory: $this->memory";
    }
}
//Instansiasikan
//Membuat Objek baru dari class (kelas turunan)
$laptop_baru = new laptop();

//isi property
$laptop_baru->merk = "Asus";
$laptop_baru->prosesor = "AMD RAYZEN";
$laptop_baru->memory = "1 Petabayte";

//panggil function

echo $laptop_baru->beli_komputer();
echo "<br/>";
echo $laptop_baru->lihat_spek();

?>