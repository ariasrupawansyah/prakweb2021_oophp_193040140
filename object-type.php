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

// class yang digunakan untuk mencetak isi dari produk ke layar
class CetakInfoProduk {
    // hanya bisa menerima type produk
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

        // mengembalikan nilai dari variable $str
        return $str;
    }
}


// instansiasi objek dari class produk dan diisi dengan metode konstruktor
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

// instansiasi objek dari class produk dan diisi dengan metode konstruktor
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

// instansiasi objek dari class CetakInfoProduk
$infoProduk1 = new CetakInfoProduk();

// menampilkan isi dari variable infoProduk1
echo $infoProduk1->cetak($produk1);