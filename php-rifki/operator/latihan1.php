<?php
echo"<h2>Menghitung luas kubus</h2> <br>";
$r = 5;
$hasil = $r * $r * $r;

echo"rumus = s x s x s <br>";
echo"sisi 5 <br>";
echo"volume = $hasil <br>";
echo"<hr>";


echo" Menghitung volume balok <br>";
$p = 6;
$l = 9;
$t = 10;

$hasil = $p * $l * $t;
echo"rumus = p x l x t <br>";
echo "panjang $p <br>";
echo "lebar $l <br>";
echo "tinggi $t <br>";
echo"hasil volume balok <br> $hasil";
echo"<hr>";

echo"mengitung volume prisma <br>";
$p = 6 ;
$l = 9;
$t = 10;
$hasil =0.5 * $p * $l * $t;

echo"rumus 0.5 x p x l x t <br>";
echo "panjang $p <br>";
echo "lebar $l <br>";
echo "tinggi $t <br>";
echo"hasil volume $hasil";
echo"<hr>";

echo"Menghitung volume tabung <br>";
$r = 5;
$t = 25;
$hasil = 3.14 * $r * 2 * $t;
echo"rumus = phi x r2 x t <br>";
echo"hasil volume tabung $hasil <br>";
?>