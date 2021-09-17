<?php

// Aria Rupawansyah - 193040140

// Jualan Produk
// Komik
// Game

// class produk
class Produk{

    public $judul, 
           $penulis,
           $penerbit,
           $harga; 

    // fungsi spesial php yaitu constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method untuk menampilkan penulis dan penerbit ke layar
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}


// instansiasi objek dari class produk dan diisi dengan metode konstruktor
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

// instansiasi objek dari class produk dan diisi dengan metode konstruktor
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

// instansiasi objek dari class produk dan diisi dengan metode konstruktor
$produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);