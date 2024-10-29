<?php
// Membuat kelas bernama Tiket
class Tiket {
    public $film;
    public $jumlah;
    private $harga;

    // Constructor untuk inisialisasi
    public function __construct($film, $jumlah, $harga) {
        $this->film = $film;
        $this->jumlah = $jumlah;
        $this->harga = $harga;
    }

    // Method untuk menghitung total harga
    public function totalHarga() {
        return $this->jumlah * $this->harga;
    }

    // Method untuk menampilkan informasi tiket
    public function infoTiket() {
        echo "Film: $this->film, Jumlah Tiket: $this->jumlah, Total Harga: Rp " . $this->totalHarga() . "<br>";
    }
}

// Membuat objek tiket
$tiket1 = new Tiket("Avengers", 2, 50000);
$tiket1->infoTiket();
?>
