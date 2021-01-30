<?php

class Produk
{
  public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "undefined")
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoLengkap()
  {
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

    if ($this->jmlHalaman === 0) {
      $str .= " ~ {$this->waktuMain} Jam.";
    } else {
      $str .= " - {$this->jmlHalaman} Halaman.";
    }

    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
    return $str;
  }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Buku");
$produk2 = new Produk("GTA V", "David Jones", "Rockstar Games", 500000, 0, 600, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
