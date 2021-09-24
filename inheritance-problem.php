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
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe; 

    // fungsi spesial php yaitu constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
    $jmlHalaman = 0, $waktuMain = 0, $tipe ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    // method untuk menampilkan penulis dan penerbit ke layar
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if( $this->tipe == "Komik" ){
            $str .= " - {$this->jmlHalaman} Halaman.";
        }else{
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;

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
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");

// instansiasi objek dari class produk dan diisi dengan metode konstruktor
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

// Output :
// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sonny Computer (Rp.250000) ~ 50 Jam.

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();