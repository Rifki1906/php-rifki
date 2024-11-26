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
           <h2>Form Biodata Diri</h2>
           <table>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" name="nama" value=""></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempatlahir" value=""></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggallahir" value=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="kelamin" value="laki-laki">Laki-Laki
                <input type="radio" name="kelamin" value="perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" id="" cols="30" rows="8"></textarea></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><select name="agama" id="">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Islam KTP">Islam KTP</option>
                </select></td>              
                </tr>
                <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td><select name="pendidikanterakhir" id="">
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMK">SMK</option>
                </select></td>              
                </tr>
                <tr>
                <td>Status</td>
                <td>:</td>
                <td><select name="status" id="">
                    <option value="Sudahmenikah">Sudah Menikah</option>
                    <option value="Janda">Janda</option>
                    <option value="Duda">Duda</option>
                </select></td>              
                <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type="checkbox" name="hobi" value="membaca">Membaca
                <input type="checkbox" name="hobi" value="menulis">Menulis
                <input type="checkbox" name="hobi" value="ngepush">Ngepush  </td>
            </tr>
            <tr>
                <td>Cita-Cita</td>
                <td>:</td>
                <td>
                    <select name="cita-cita" id="">
                        <option value="programmer">programmer</option>
                        <option value="hacker">hacker</option>
                        <option value="admin slot">admin slot</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kata-kata Bijak</td>
                <td>:</td>
                <td><textarea name="kata-kata" id="" cols="30" rows="8"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="proses" value="simpan"></td>
            </tr>
           </table> 
        </form>
    </center>
</body>
</html>
</body>
</html>

<?php

if (isset($_POST['proses'])) {
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempatlahir'];
    $tanggal_lahir = $_POST['tanggallahir'];
    $jenis_kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan_terakhir = $_POST['pendidikanterakhir'];
    $status = $_POST['status'];
    $hobi1 = $_POST['hobi'];
    $cita_cita = $_POST['cita-cita'];
    $kata_bijak = $_POST['kata-kata'];

    echo"<center>";
    echo"<table border='1'>";
    echo"<tr><td> nama :</td><td> $nama <br></td></tr>";
    echo"<tr><td> tempat_lahir : </td><td> $tempat_lahir <br></td></tr>";
    echo"<tr><td> tanggal_lahir : </td><td> $tanggal_lahir <br></td></tr>";
    echo"<tr><td> jeniskelamin : </td><td> $jenis_kelamin <br></td></tr>";
    echo"<tr><td> alamat : </td><td> $alamat <br></td></tr>";
    echo"<tr><td> agama : </td><td> $agama <br></td></tr>";
    echo"<tr><td> pendidikan_terakhir : </td><td> $pendidikan_terakhir <br></td></tr>";
    echo"<tr><td>status : </td><td> $status <br></td></tr>";
    echo"<tr><td> hobi : </td><td> $hobi1 <br></td></tr>";
    echo"<tr><td> cita-cita : </td><td> $cita_cita <br></td></tr>";
    echo"<tr><td> kata-kata : </td><td> $kata_bijak <br></td></tr>";
    echo"</center>";
    echo"</table>";
}

?>