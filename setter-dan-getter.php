<?php

// Aria Rupawansyah - 193040140

// Jualan Produk
// Komik
// Game

// class produk
class Produk{

    private $judul, 
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;

    // fungsi spesial php yaitu constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul( $judul ){
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis( $penulis ){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit( $penerbit ){
        $this->penerbit = $penerbit;
    }

    public function getpenerbit(){
        return $this->penerbit;
    }

    public function setDiskon( $diskon ){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }

    public function setHarga( $harga ){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // method untuk menampilkan penulis dan penerbit ke layar
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // function untuk menampilkan info lengkap produk
    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;

    }

}

// class Komik yang merupakan child dari class produk
class Komik extends Produk {
    public  $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
    $jmlHalaman = 0 ) {
        
        parent::__construct($judul , $penulis , $penerbit , $harga );
        $this->jmlHalaman = $jmlHalaman;

    }

    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

// class Game yang merupakan child dari class produk
class Game extends Produk {
    public $waktuMain;

     public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
    $waktuMain = 0 ) {
        
        parent::__construct($judul , $penulis , $penerbit , $harga );
        $this->waktuMain = $waktuMain;

    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
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


// instansiasi objek dan diisi dengan metode konstruktor
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

// instansiasi objek dan diisi dengan metode konstruktor
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// Output :
// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sonny Computer (Rp.250000) ~ 50 Jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setPenulis("Sandhika Galih");
echo $produk1->getPenulis();