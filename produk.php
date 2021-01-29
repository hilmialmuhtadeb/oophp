<?php

class Produk
{
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

// $produk1 = new Produk();
// $produk1->judul = "naruto season 1";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "uncharted";
// $produk2->ketawa = "HAHAHAhaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Rintik Sedu";
$produk4->penulis = "nTsana";
$produk4->penerbit = "Gagas Media";
$produk4->harga = 40000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Novel : " . $produk4->getLabel();
