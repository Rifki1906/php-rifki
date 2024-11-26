<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
        <form action="" method="POST">
           <h2>Nilai Ujian Sekolah</h2>
           <table>
            <tr>
                <td>Nama lengkap </td>
                <td>:</td>
                <td><input type="text" name="nama" value=""></td>
            </tr>
            <tr>
                <td>Kelas </td>
                <td>:</td>
                <td><input type="text" name="kelas" value=""></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><select name="jurusan" id="">
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                    <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                </select></td>              
                </tr>
                <tr>
                    <td>Nilai B.indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="nilaiindo" value=""</td>
                </tr>
                <tr>
                    <td>Nilai B.inggris</td>
                    <td>:</td>
                    <td><input type="number" name="nilaiinggris" value=""</td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="nilaimtk" value=""</td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="nilaipro" value=""</td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="proses" value="proses"></td>
            </tr>
           </table> 
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['proses'])) {
    $nama_lengkap = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $indo = $_POST['nilaiindo'];
    $inggris = $_POST['nilaiinggris'];
    $mtk = $_POST['nilaimtk'];
    $pro = $_POST['nilaipro'];

    $rata = ($indo + $inggris + $mtk + $pro) / 4;

    echo"
    <table align='center'>
    <tr>
       <td>Nama Lengkap</td>
       <td>:</td>
       <td>$nama_lengkap</td>
    </tr>
      <tr>
       <td>Kelas</td>
       <td>:</td>
       <td>$kelas</td>
    </tr>
      <tr>
       <td>Jurusan</td>
       <td>:</td>
       <td>$jurusan</td>
    </tr>
      <tr>
       <td>B.Indonesia</td>
       <td>:</td>
       <td>$indo</td>
    </tr>
    <tr>
       <td>B.Inggris</td>
       <td>:</td>
       <td>$inggris</td>
 </tr>
 <tr>
 <td>Matematika</td>
 <td>:</td>
 <td>$mtk</td>
</tr>   
<tr>
<td>Produktif</td>
<td>:</td>
<td>$pro</td>
</tr>
<tr>
<td>Rata-Rata Nilai</td>
<td>:</td>
<td>$rata</td>
</tr>
<tr>
<td><b>Keterangan</b></td>
<td>:</td>
<td>";

    if ($rata >=80) {
        echo"Selamat Anda Lulus";
    } elseif ($rata <= 80) {
        echo"Anda Tidak Lulus";
    }
    "</td>
</tr>
    </table>";
}
?>