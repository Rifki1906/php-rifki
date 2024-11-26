<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Belajar PHP & MySQL untuk Pemula",
        "penulis" => "petanikode",
        "tahunRilis" => "2001"
    ],
    [
        "judul" => "Tutorial PHP dari Nol hingga Mahir",
        "penulis" => "petanikode",
        "tahunRilis" => "2002"
    ],
    [
        "judul" => "Membuat Aplikasi Web dengan PHP",
        "penulis" => "petanikode",
        "tahunRilis" => "2000"
    ]
];

// menampilkan array
foreach($artikel as $post){
    echo "<h2>".$post["judul"]."</h2>";
    echo "<p>".$post["penulis"]."<p>";
    echo "<p>".$post["tahunRilis"]."<p>";
    echo "<hr>";
}