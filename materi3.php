<?php

function salam()
{
    echo "assalamualaikum " ;
}

salam();


function tambah( $a, $b)
{
    $jumlah = $a + $b;
    echo $jumlah; 
}

function kali( $a, $b)
{
    $jumlah = $a * $b;
    echo $jumlah; 
}
function kurang( $a,  $b)
{
    $hasil = $a - $b;
    echo $hasil;
}
function bagi( $a, $b)
{
    $hasil = $a / $b;
    echo $hasil;
}
?>

<form method="POST">
    <input type="number" name="angka1">
    <input type="number" name="angka2">
    <button type="submit"name="kirim">kirim</button>
</form>

<?php

if (isset($_POST['kirim'])) {
    $angka1 = isset($_POST['angka1']) ? (int)$_POST['angka1'] : 0;
    $angka2 = isset($_POST['angka2']) ? (int)$_POST['angka2'] : 0;

    tambah($angka1, $angka2);
    echo "<br><br>";
    kali($angka1, $angka2);
    echo "<br><br>";
    kurang($angka1, $angka2);
    echo "<br><br>";
    bagi($angka1, $angka2);
}
?>