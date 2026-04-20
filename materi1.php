<?php
    echo "hello word! <br>PERKENALKAN SAYA";

    $nama = "REVINA FELISHA ARIYANTI";
    $umur = 20;
    $tinggi =  163;
    $kelas = "TEKNIK INFORMATIKA B SEMESTER 4";

echo "<br>nama  : $nama, <br>umur  : $umur, <br>tinggi : $tinggi, <br>kelas : $kelas";

echo "<br><br>=============================================================";

$nilai = 12;
$nilai2 = 12;
$nilai3 = 2;
 
$hasil = $nilai * $nilai2 - $nilai3;
echo "<br>hasil dari $nilai x $nilai2 - $nilai3 adalah $hasil";

if($hasil >= 100){
    echo " <br>nilai nada lebih dari 100";
} else if ($hasil <100){
    echo " <br>nilai anda kurang dari 100";
} else {
    echo " <br> nilai nada kosong";
}

echo "<br><br>=============================================================";
    
if($hasil % 2 == 0){
        echo "<br>$hasil adalah bilangan GENAP";
    } else {
        echo "<br>$hasil adalah bilangan GANJIL";
    }

?>
