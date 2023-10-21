<!-- if statement -->

<!-- <?php
    $kkm = 75;
    $nilai = 70;

    if ($nilai > $kkm) {
        echo 'Lulus';
    } 
    // 
    else if ($nilai < 75) {
        echo 'C';
    }   else if ($nilai > 85 && $nilai < 95) {
        echo 'B';
    }   else if ($nilai > 95) {
        echo 'A';
    }
?> -->

<!-- switch -->

<!-- <?php
    $nilai = "hahaha";

    switch ($nilai) {
        case "A";
            echo "Anda Lulus!";
                break;
        case "B";
            echo "ada Tidak Lulus";
                break;
        default;
            echo "hhmmmm";
                break;
    }
?> -->

<?php
    for ($i = 0; $i < 7; $i++) {
        echo "halo ke-$i <br>" . PHP_EOL;
    }
   
    echo "Selesai";
?>
