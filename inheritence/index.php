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
        return "merk: $this->merk, prosesor: $this->prosesor, memory: $this->memory";
    }
}
?>