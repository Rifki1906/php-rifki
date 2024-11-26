<?php
echo "<h1>Yusuf</h1>";
echo "<hr>";

$tb_yusuf = 167;
$bb_yusuf = 69;
echo "Tinggi Badan Yusuf : $tb_yusuf (Tinggi Minimal 167) <br>";
echo "Berat Badan Yusuf : $bb_yusuf (Tidak Boleh Lebih Dari 75) <br>";

$lolos_seleksi = ($tb_yusuf >= 165 && $bb_yusuf <= 75) ? 'Yusuf Lolos Seleksi' : "Yusuf Tidak Lolos";
echo "<b> Hasil Seleksi Tahap 1 : <u><i>$lolos_seleksi</i></u></b> <br>";


?>