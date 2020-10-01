<?php


class Produk
{
    public $judul,
           $penulis,
           $penerbit,
           $harga;

           public function __construct($judul = "judul",$penulis="penulis",$penerbit="penerbit",$harga=0) {
               $this->judul = $judul;
               $this->penulis = $penulis;
               $this->penerbit = $penerbit;
               $this->harga = $harga;
           }
           public function getLabel() {
               return "$this->penulis, $this->penerbit";
           }
}

$produk1 = new Produk("Appare Ranman", "Masakazu Hashimoto", "Kadokawa Shoten",35000);

$produk2 = new Produk("No Man's Sky","Hello Games","Hello Games",125000);

$produk3 = new Produk("Hataraku Maou Sama")

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel(); 