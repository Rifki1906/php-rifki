<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "No Urut" =>"1",
        "judul" => "Mangkujiwo",
        "Genre" =>"Horo",
        "penulis" => "petanikode",
        "Aktor" => "Sujiwo Tejo",
        "tahunRilis" => "2023"
    ],
    [
        "No Urut" =>"2",
        "judul" => "Hello Ghost",
        "Genre" =>"Horor",
        "penulis" => "petanikode",
        "Aktor" => "Onadeo Leonardo",
        "tahunRilis" => "2001"
    ],
    [
        "No Urut" =>"3",
        "judul" => "Psikopat",
        "Genre" =>"Horor",
        "penulis" => "Robert Bloch",
        "Aktor" => "Janet",
        "tahunRilis" => "1960"
    ],
    [
        "No Urut" =>"4",
        "judul" => "Yang Bersinar",
        "Genre" =>"Horor",
        "penulis" => "Stephen King",
        "Aktor" => "Jack Nicho",
        "tahunRilis" => "1980"
    ],
    [
        "No Urut" =>"5",
        "judul" => "Nope",
        "Genre" =>"Horor",
        "penulis" => "Jordan Peele",
        "Aktor" => "Daniel Kaluuya",
        "tahunRilis" => "2017"
    ],
    [
        "No Urut" =>"6",
        "judul" => "Turun Temurun",
        "Genre" =>"Horor",
        "penulis" => "Ari Ast",
        "Aktor" => "Alex Wolff",
        "tahunRilis" => "2018"
    ],
    [
        "No Urut" =>"7",
        "judul" => "Mimpi Buruk Di Jalan Elm",
        "Genre" =>"Horor",
        "penulis" => "Wes Craven",
        "Aktor" => "Robert Englund",
        "tahunRilis" => "1980"
    ],
    [
        "No Urut" =>"8",
        "judul" => "Pengusir Setan",
        "Genre" =>"Horor",
        "penulis" => "Wiliam Peter",
        "Aktor" => "Ellen Burstyn",
        "tahunRilis" => "1973"
    ],
    [
        "No Urut" =>"9",
        "judul" => "Sang Babadook",
        "Genre" =>"Horor",
        "penulis" => "Jennifer Kent",
        "Aktor" => "Essie Davis",
        "tahunRilis" => "2014"
    ],
    [
        "No Urut" =>"10",
        "judul" => "Tengah Musim Panas",
        "Genre" =>"Horor",
        "penulis" => "Ari Aster",
        "Aktor" => "Jack Reynor",
        "tahunRilis" => "2019"
    ],
    [
        "No Urut" =>"11",
        "judul" => "Buku Catatan",
        "Genre" =>"Romance",
        "penulis" => "Nicholas Sparks",
        "Aktor" => "Ryan Gosling",
        "tahunRilis" => "2004"
    ],
    [
        "No Urut" =>"12",
        "judul" => "Kebanggan dan Prasangka",
        "Genre" =>"Romance",
        "penulis" => "Jane aus",
        "Aktor" => "Keira",
        "tahunRilis" => "2005"
    ],
    [
        "No Urut" =>"13",
        "judul" => "Penebus Shawshank",
        "Genre" =>"Drama",
        "penulis" => "Stephen king",
        "Aktor" => "Morgan",
        "tahunRilis" => "1994"
    ],
    [
        "No Urut" =>"14",
        "judul" => "Awal Mula",
        "Genre" =>"Sci-Fi",
        "penulis" => "Chirstopher Nolan",
        "Aktor" => "Leonardo",
        "tahunRilis" => "2010"
    ],
    [
        "No Urut" =>"15",
        "judul" => "Ayah baptis",
        "Genre" =>"Kriminal",
        "penulis" => "Mario Puzo",
        "Aktor" => "Marlon brando",
        "tahunRilis" => "1972"
    ],
    [
        "No Urut" =>"16",
        "judul" => "Titanic",
        "Genre" =>"Drama",
        "penulis" => "James Cameron",
        "Aktor" => "Leonardo",
        "tahunRilis" => "1997"
    ],
    [
        "No Urut" =>"17",
        "judul" => "Macan Kumbang Hitam",
        "Genre" =>"Aksi",
        "penulis" => "Ryan Coogler",
        "Aktor" => "Michael",
        "tahunRilis" => "2018"
    ],
    [
        "No Urut" =>"18",
        "judul" => "Matriks",
        "Genre" =>"Sci-Fi",
        "penulis" => "Lili wac",
        "Aktor" => "Keanu Re",
        "tahunRilis" => "1999"
    ],
    [
        "No Urut" =>"19",
        "judul" => "Jalan-jalan yang tak terlupakan",
        "Genre" =>"Drama",
        "penulis" => "Ni",
        "Aktor" => "Mandy",
        "tahunRilis" => "2000"
    ],
    [
        "No Urut" =>"20",
        "judul" => "Hutan Gump",
        "Genre" =>"Drama",
        "penulis" => "Winst",
        "Aktor" => "Tom Hanks",
        "tahunRilis" => "1994"
    ],
];

// menampilkan array
foreach($artikel as $post){
    echo "<p>"."No Urut : ".$post["No Urut"]."<p>";
    echo "<p>" ."Judul : ".$post["judul"]."<p>";
    echo "<p>" ."Genre : ".$post["Genre"]."<p>";
    echo "<p>" ."Penulis : ".$post["penulis"]."<p>";
    echo "<p>" ."Aktor : ".$post["Aktor"]."<p>";
    echo "<p>" ."Tahun Rilis :  ".$post["tahunRilis"]."<p>";
    echo "<hr>";
}