<?php
$years = date("Y");

// ternary
$kabisat = $years % 4 == 0 ? 'kabisat' : "bukan kabisat";

echo "$years itu tahun $kabisat";
