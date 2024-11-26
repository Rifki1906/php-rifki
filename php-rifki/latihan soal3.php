<?php
echo"<h1>Toko Bady</h1>";
echo"<hr>";

$judul = "JAMAL";
$genre = "Thriller";
$harga = 35000;

switch ($genre) {
    case 'Romance':
        $cashback = 0.05 * $harga;
        break;
    case 'Thriller' :
        $cashback = 0.1 * $harga;
        break;
         case 'Comedy' :
        $cashback = 0.15 * $harga;
        break;
    default:
        $cashback = 0;
        break;
}

echo"Judul : $judul <br>";
echo "Genre : $genre <br>";

echo "Harga : Rp." . number_format($harga, 0, '.', '.' ) . "<br>";
echo "Cashback : Rp." . number_format($cashback, 0, '.', '.') . "<br>";

$hasil = $harga - $cashback;
echo "<b> Total Bayar : Rp." . number_format($harga, 0, '.', '.') . "</b><br>";


?>