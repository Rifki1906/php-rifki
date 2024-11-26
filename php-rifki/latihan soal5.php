<?php
echo "<h1>Perusahaan</h1>";
echo "<hr>";

$jabatan = "Programer Manajer";
$absensi = "True";
$nilai_performa =90 ;

$gaji_dasar = 0;
$tunjangan_kehadiran = 200000;
$bonus = 0;
$pajak_penghasilan = 0.05;


switch ($jabatan) {
    case 'Programer Junior':
        $gaji_dasar = 6000000;
        break;
    case 'Programer Senior':
        $gaji_dasar = 10000000;
        break;
    case 'Programer Manajer':
        $gaji_dasar = 15000000;
        break;
    default:
        echo"Jabatan Tidak Jelas";
        break;
}
$tunjangan_kehadiran = ($absensi) ? 200000 : 0;

if ($nilai_performa > 90) {
    $bonus = 0.10 * $gaji_dasar;
} elseif ($nilai_performa >= 75 && $nilai_performa <= 90) {
    $bonus = 0.05 * $gaji_dasar;
} else {
    $bonus = 0;
}
$gaji_sebelum_pajak = $gaji_dasar + $tunjangan_kehadiran + $bonus;
$pajak = $gaji_sebelum_pajak * $pajak_penghasilan;
$gaji_bersih = $gaji_sebelum_pajak = $pajak;

echo "Jabatan : $jabatan <br>";
echo "Gaji Dasar : Rp. " .number_format($gaji_dasar, 0, ',',',', )."<br>";
echo "Tunjangan Kehadiran : Rp. " . number_format($tunjangan_kehadiran, 0, ',', ',', )."<br>";
echo "Bonus Kinerja : Rp." . number_format($bonus, 0, '.', '.') . "<br>";
echo "Total Gaji Sebelum Pajak : Rp." . number_format($gaji_sebelum_pajak, 0, '.', '.') . "<br>";
echo "Pajak Penghasilan (5%) : Rp. " . number_format($pajak, 0, ',', ',', )."<br>";
echo"<hr>";
echo "<b> Total Gaji Bersih : Rp." . number_format($gaji_bersih, 0, '.', '.') . "</b><br>";
echo"<hr>";