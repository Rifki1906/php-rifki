<?php

class manusia{
    var $nama;
    var $warna;

    function __construct(){
        echo"ini adalah isi method construct <br>";
    }
    function __destruct(){
        echo"ini adalah isi method destruct <br>";
    }
    function tampilkan_nama(){
        return "nama saya malasngoding <br>";
    }
}

$manusia = new manusia();

echo $manusia->tampilkan_nama();
?>