<?php 

abstract class Produk {
  protected $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  // abstract method 

  abstract public function getInfo();

  // setter dan getter

  public function setJudul($judul) {
    return $this->judul = $judul;
  }

  public function getJudul() {
    return $this->judul;
  }

  public function setPenulis($penulis) {
    return $this->penulis = $penulis;
  }

  public function getPenulis() {
    return $this->penulis;
  }

  public function setPenerbit($penerbit) {
    return $this->penerbit = $penerbit;
  }

  public function getPenerbit() {
    return $this->penerbit;
  }

  public function setDiskon($diskon) {
    return $this->diskon = $diskon;
  }

  public function getDiskon() {
    return $this->diskon;
  }

  public function setHarga($harga) {
    return $this->harga = $harga;
  }

  public function getHarga() {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }
}
