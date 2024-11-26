<?php

echo"<h2>Menghitung Luas Persegi Panjang</h2>";

function persegipanjang($panjang,$lebar){
    echo"panjang : $panjang <br><br>";
    echo"Lebar : $lebar<br><br>";
    $hasil = $panjang * $lebar;
    echo"Hasil : $hasil<br><br>";
}
persegipanjang(10,5);
echo"<hr>";
echo"<h2>Menghitung Luas Persegi</h2>";

function persegi($sisi){

echo"Sisi : $sisi<br><br>";
echo"Rumus : S x S <br><br>";
$hasil = $sisi * $sisi;
echo"Hasil : $hasil<br><br>";
}
persegi(5);
echo"<hr>";
function segitiga($alas,$tinggi){
    echo"Alas : $alas<br><br>";
    echo"Tinggi : $tinggi<br><br>";
    echo"Rumus : 1/2 x (a x b)<br><br>";
    $hasil=$alas * $tinggi;
    echo"Hasil $hasil<br><br>";
}
segitiga(10,10);
echo"<hr>";
function lingkaran($ruas){
    echo"Ruas : $ruas<br><br>";
    echo"Rumus : phi x r x r<br><br>";
    $hasil = $ruas * $ruas ;
    echo"Hasil : $hasil<br><br>";
}
lingkaran(6);
?>