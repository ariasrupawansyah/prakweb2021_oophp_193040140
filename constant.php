<?php

// aria rupawansyah - 193040140

// tidak bisa dimasukan ke kelas
// define('NAMA', "Aria Rupawansyah");
// echo NAMA;

// echo "<br>";

// bisa dimasukan dikelas
// const UMUR = 19;
// echo UMUR;

// class Coba {
//     const NAMA = 'Aria';
// }

// echo Coba::NAMA;

// echo __FILE__;

// function coba(){
//     return __FUNCTION__;
// }

// echo coba();

class Coba{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;