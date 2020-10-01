<?php


class Produk
{
    public $judul = "judul",
           $penulis = " penulis",
           $penerbit = "penerbit",
           $harga = 0;

           public function getLabel() {
               return "$this->penulis, $this->penerbit";
           }
}

$produk1 = new Produk();
$produk1->judul = "Appare Ranman";
$produk1->penulis = "Masakazu Hashimoto";
$produk1->penerbit = "Kadokawa Shoten";
$produk1->harga = 35000;

$produk2 = new Produk();
$produk2->judul = "No Man's Sky";
$produk2->penulis = "Hello Games";
$produk2->penerbit = "Hello Games";
$produk->harga = 125000;

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel(); ?>