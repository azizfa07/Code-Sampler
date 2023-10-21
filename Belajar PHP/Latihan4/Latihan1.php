<?php 
    // Date
    // Untuk menampilkan tanggal dengan format tertenu
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp /EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // echo date("l, d-M-Y", time()-60*60*24*100);

    // mktime
    // membuat sendiri detik
    // mktime(0, 0, 0, 0, 0, 0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l",mktime(0,0,0,7,11,2007));

    // shrtotime
    // echo date("l", strtotime("11 Jul 2007"));

    function salam($waktu, $nama) {
        return "Selamat $waktu, $nama !";
    // function salam($waktu = "datang", $nama = "Admin") {
    //     return "Selamat $waktu, $nama !";    ``
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <h1><?php echo salam("siang", "Fatih"); ?></h1>
</body>
</html>

