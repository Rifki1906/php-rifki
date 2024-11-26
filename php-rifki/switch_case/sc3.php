<?php 

$tipeAkun = "admin";
$aksi = "hapus";

switch ($tipeAkun) {
    case 'admin':
        echo "tipe akun : $tipeAkun <br>";
        echo "aksi: ";
        switch ($aksi) {
            case 'edit':
                echo "Edit Akun Admin <br>";
                break;
            case "hapus":
                echo "Admin Menghapus akun User <br>";
                break;
        }
        break;
    case "User":
        echo "tioe akun : $tipeAkun <br>";
        echo "aksi";
        switch ($aksi) {
            case 'edit':
                echo "Edit Akun User <br>";
                break;
            case "hapus" :
                echo "User TIdak Bisa Menghapus Akun";
                break;
        }
        break;
    default:
        echo "Jenis akun tidak ditemukan, silahkan ulang kembali <br>";
}



?>