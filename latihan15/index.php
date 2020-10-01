<?php
// $produk1 = new Komik("Appare Ranman", "Masakazu Hashimoto", "Kadokawa Shoten",35000,120);

// $produk2 = new Game("No Man's Sky","Hello Games","Hello Games",125000,100);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
