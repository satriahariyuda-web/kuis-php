<?php
class buku {
    public $judul;
    public $penulis;
    public $isbn;

    public function __construct($judul, $penulis, $isbn) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->isbn = $isbn;
    }
    public function getjudul() {
        return $this->judul;
    }
    public function tampilkaninfobuku() {
        echo "judul: " . $this->judul . "<br>";
        echo "penulis: " . $this->penulis . "<br>";
        echo "isbn: " . $this->isbn . "<br>";
    }
}

class anggota {
    private $idanggota;
    private $nama;

    public function __construct($idanggota, $nama) {
        $this->idanggota = $idanggota;
        $this->nama = $nama;
    }

    public function getnama() {
        return $this->nama;
    }

    public function tampilkaninfoanggota() {
        echo "idanggota: " . $this->idanggota . "<br>";
        echo "nama: " . $this->nama . "<br>";
    }
}

class peminjaman {
    private $buku;
    private $anggota;
    private $tanggalpinjam;

    public function __construct($buku, $anggota, $tanggalpinjam) {
        $this->buku = $buku;
        $this->anggota = $anggota;
        $this->tanggalpinjam = $tanggalpinjam;
    }

    public function tampilkaninfopeminjaman() {
        echo "informasi peminjaman:<br>";
        $this->buku->tampilkaninfobuku();
        $this->anggota->tampilkaninfoanggota();
        echo "tanggal pinjam: " . $this->tanggalpinjam . "<br>";
    }
}

$buku1 = new buku("cara menembak perempuan tidak mungkin ditolak", "lionel messi", "978-0134685991");
$anggota1 = new anggota("A666", "cristiano ronaldo");
$peminjaman1 = new peminjaman($buku1, $anggota1, "2023-11-09");
$peminjaman1->tampilkaninfopeminjaman();
?>