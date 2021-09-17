<?php

// Aria Rupawansyah - 193040140

// Jualan Produk
// Komik
// Game

// class produk
class Produk{

    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0; 


    // method untuk menampilkan penulis dan penerbit ke layar
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}


// instansiasi objek dari class produk
$produk3 = new Produk();
// properties
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;


// instansiasi objek dari class produk
$produk4 = new Produk();
// properties
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

// menampilkan objek ke layar
echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

?>