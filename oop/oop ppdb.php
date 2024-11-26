<?php

class ppdb{

function pendaftaran($jurusan,$nama,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$nomor_hp,$email){
    echo "Jurusan : $jurusan <br><br>";
    echo "nama : $nama <br><br>";
    echo "Jenis Kelamin : $jenis_kelamin <br><br>";
    echo "Tempat lahir : $tempat_lahir <br><br>";
    echo "Tanggal lahir : $tanggal_lahir <br><br>";
    echo "nomor hp siswa : $nomor_hp <br><br>";
    echo "Email : $email <br><br>";
}


function alamat($provinsi,$kab_kota,$kecamatan,$desa,$alamat){
    echo "Provinsi : $provinsi <br><br>";
    echo "kab/kota : $kab_kota <br><br>";
    echo "kecamatan : $kecamatan <br><br>";
    echo "desa : $desa <br><br>";
    echo "ALamat : $alamat <br><br>";

    
}
function dataAsalSekolah($nama_asal_sekolah,$alamat_sekolah){
    echo "Nama Asal Sekolah : $nama_asal_sekolah <br><br>";
    echo "Alamat Sekolah : $alamat_sekolah <br><br>";
}


function dataOrtu($nama,$Pekerjaan,$nomor_hp,$alamat){
    echo "Nama lengkap : $nama <br><br>";
    echo "Pekerjaan : $Pekerjaan <br><br>";
    echo "Nomor HP : $nomor_hp <br><br>";
    echo "Alamat : $alamat <br><br>";
}
}
$cetak = new ppdb();

echo $cetak->pendaftaran("RPL","Jamal","Laki-Laki","Bandung",2010_06_19,"08571933","Jamal123@gmail.com");
echo"<hr>";
echo $cetak->alamat("Cisangkuy","Bandung","katampung","sangkanhurip","Sompok");
echo"<hr>";
echo $cetak->dataAsalSekolah("SMP karya bhakti","Sukamukti",);
echo"<hr>";
echo $cetak->dataOrtu("Ncum","Cowonyalse",8893,"Sumedang");


?>