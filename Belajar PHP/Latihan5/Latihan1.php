<?php
 // Belajar Array
 // Array adalah variabel yang memiliki banyak nilai
 // Elemen pada array boleh memiliki tipe data yang berbeda
 // pasangan antara key dan value
 // key-nya adalah index, index di mulai dari 0


// Membuat Array cara lama
// $hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at");
// Membuat array cara baru
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"];
$hihiha = ["123", "mantap", "True"];
 

// // Menampilkan Array
// var_dump($hari);
// echo "<br>";
// print_r($hihiha);
// echo "<br>";

// //Menampilkan 1 elemen dengan echo
// echo $hihiha[0];

// // Menambahkan elemen baru pada Array
var_dump($hari);
$hari[] = "Sabtu";
$hari[] = "Minggu";
echo "<br>";
var_dump($hari);

?>