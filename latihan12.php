<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h2>Data Diri Calon Pendaftar</h2>
        <form action="" method="post">
        <table>
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
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis kelamin </td>
                <td>:</td>
                <td><input type="radio" name="jk" value="Laki-laki">laki-laki
                <input type="radio" name="jk" value="Perempuan">perempuan</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>nomor hp siswa</td>
                <td>:</td>
                <td><input type="number" name="nomor"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email"></td>
            </tr>
            </table>
            <table> 
        <hr>
        <h2>Alamat Calon Pendaftar</h2>
            <tr>
                <td>provinsi</td>
                <td>:</td>
                <td><select name="provinsi" id="">
                    <option value="aceh">Aceh</option>
                    <option value="riau">Riau</option>
                    <option value="jambi">Jambi</option>
                    <option value="sumatra utara">Sumatra Utara</option>
                    <option value="sumatra barat">Sumatra Barat</option>
                </select></td>              
                </tr>

                <tr>
                <td>kota</td>
                <td>:</td>
                <td><select name="kota" id="">
                    <option value="bandung">Bandung</option>
                    <option value="bogor">Bogor</option>
                    <option value="tasik">Tasik</option>
                    <option value="sumedang">Sumedang</option>
                    <option value="garut">Garut</option>
                </select></td>                  
                </tr>

                <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td><select name="kecamatan" id="">
                    <option value="katapang">katapang</option>
                    <option value="margahayu">margahayu</option>
                    <option value="cibaduyut">Cibaduyut</option>
                    <option value="soreang">Soreang</option>
                    <option value="saroja">Saroja</option>
                </select></td>              
                </tr>
                <tr>
                <td>Desa</td>
                <td>:</td>
                <td><select name="desa" id="">
                    <option value="sangkanhurip">Sangkanhurip</option>
                    <option value="sukamukti">Sukamukti</option>
                    <option value="sompok">Sompok</option>
                    <option value="cibolerang">cibolerang</option>
                    <option value="saroja">Saroja</option>
                </select></td>              
                </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" id="" cols="15" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>kode pos</td>
                <td>:</td>
                <td><input type="text" name="kode_pos"></td>
            </tr>
            </table>
            <table>
        <hr>
        <h2>Data Asal Sekolah</h2>
        <tr>
                <td>Nama Asal sekolah</td>
                <td>:</td>
                <td><input type="text" name="asal_sekolah"></td>
            </tr>
            <tr>
                <td>Alamat Sekolah</td>
                <td>:</td>
                <td><input type="text" name="alamat_sekolah"></td>
            </tr>
            </table>
            <table>
        <h2>Data Orang Tua</h2>
        <hr>    
        <tr>
                <td>Nama Lengkap Ayah/Ibu/Wali</td>
                <td>:</td>
                <td><select name="ortu" id="">
                    <option value="ayah">Ayah</option>
                    <option value="ibu">Ibu</option>
                    <option value="wali">Wali</option>
                </select></td>              
                </tr>
        <tr>
            <td>Pekerjaan ortu</td>
            <td></td>
            <td><input type="text"name="pekerjaan_ortu"></td>
        </tr>
        <tr>
            <td>Nomor hp ortu</td>
            <td></td>
            <td><input type="number" name="no_hp_ortu"></td>
        </tr>
        <tr>
            <td>Alamat ortu</td>
            <td></td>
            <td><input type="text" name="alamat_ortu"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="kirim" id="" value="kirim"></td>
        </tr>
    </form>
</table>
</body>
</html>
<hr>

<?php
if (isset($_POST['kirim'])) {
    // deklarasi variabel
    $jurusan = $_POST['jurusan'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jk'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nmr = $_POST['nomor'];
    $email = $_POST['email'];
    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kota'];
    $kecamatan=$_POST['kecamatan'];
    $desa = $_POST['desa'];
    $alamat = $_POST['alamat'];
    $kode = $_POST['kode_pos'];
    $nama_sekolah = $_POST['asal_sekolah'];
    $alamat_sek= $_POST['alamat_ortu'];

    $nama_ortu = $_POST['ortu'];
    $pekerjaan = $_POST['pekerjaan_ortu'];
    $no_hp = $_POST['no_hp_ortu'];
    $alamat_ortu = $_POST['alamat_ortu']; 

    class ppdb{
        public $data;

        public function data_diri($jurusan,$nama,$jenis_kelamin,$tempat_lahir,$nmr,$email){

            echo"Jurusan: ".$jurusan."<br><br>";
            echo"Nama :".$nama."<br><br>";
            echo"Jenis kelamin :".$jenis_kelamin."<br>";
            echo"Temapat Lahir: ".$tempat_lahir."<br>";
            echo"Nomor:".$nmr."<br>";
            echo"Email :".$email."<br><hr>";

        }
        public function alamat_calon_pendaftar($provinsi,$kota,$kecamatan,$desa,$alamat,$kode){
            echo "Provinsi : ".$provinsi."<br>";
            echo"Kota: ".$kota."<br>";
            echo"Kecamatan :".$kecamatan."<br>";
            echo"Desa :".$desa."<br>";
            echo"Alamat: ".$alamat."<br>";
            echo"Kode Pos :".$kode."<br><hr>";
        }
        public function data_asal_sekolah($nama_sekolah,$alamat_sek){
            echo"Nama Asal Sekolah: ".$nama_sekolah."<br>";
            echo"Alamat Sekolah :".$alamat_sek."<br><hr>";
        }
        public function data_ortu($nama_ortu,$pekerjaan,$no_hp,$alamat_ortu){
            echo"Nama Lengkap Ayah/Ibu/Wali: ".$nama_ortu."<br>";
            echo"Pekerjaan Orang Tua :".$pekerjaan."<br>";
            echo"Nomor hp Orang Tua :".$no_hp."<br>";
            echo"Alamat orang tua: ".$alamat_ortu."<br>";
        }
    }
    $cetak = new ppdb();
    echo $cetak->data_diri($jurusan,$nama,$jenis_kelamin,$tempat_lahir,$nmr,$email);
    echo $cetak->alamat_calon_pendaftar($provinsi,$kota,$kecamatan,$desa,$alamat,$kode);
    echo $cetak->data_asal_sekolah($nama_sekolah,$alamat_sek);
    echo $cetak->data_ortu($nama_ortu,$pekerjaan,$no_hp,$alamat_ortu);


}

?>

