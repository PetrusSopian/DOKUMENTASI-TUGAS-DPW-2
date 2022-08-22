<?php
//membuat class

class hewan{
    var $nama;
    var $kaki;
    var $terbang_atau_tidak;
    var $suara;
}
$hewan = new hewan;
$hewan->nama="burung hantu";
$hewan->kaki=2;
$hewan->terbang_atau_tidak="bisa terbang";
$hewan->suara="ukkkhuuukkk";

echo "diggi adalah $hewan->nama<br>";
echo "punya kaki sebanyak : $hewan->kaki<br>";
echo "burung hantu adalah hewan yang $hewan->terbang_atau_tidak<br>";
echo "suaranya : $hewan->suara<br>";

echo "<hr>";

$hewan = new hewan;
$hewan->nama="ayam";
$hewan->kaki=2;
$hewan->terbang_atau_tidak="bisa terbang";
$hewan->suara="kukuruyuk";

echo "rembo adalah $hewan->nama<br>";
echo "punya kaki sebanyak : $hewan->kaki<br>";
echo "ayam adalah hewan yang $hewan->terbang_atau_tidak<br>";
echo "suaranya : $hewan->suara<br>";

echo "<hr>";

$hewan = new hewan;
$hewan->nama="sapi";
$hewan->kaki=4;
$hewan->terbang_atau_tidak="tidak bisa terbang";
$hewan->suara="moooooo";

echo "raju adalah $hewan->nama<br>";
echo "punya kaki sebanyak : $hewan->kaki<br>";
echo "sapi adalah hewan yang $hewan->terbang_atau_tidak<br>";
echo "suaranya : $hewan->suara<br>";

echo "<hr>";

$hewan = new hewan;
$hewan->nama="kancil";
$hewan->kaki=4;
$hewan->terbang_atau_tidak="tidak bisa terbang";
$hewan->suara="ekkk ekkkk";

echo "mogli adalah $hewan->nama<br>";
echo "punya kaki sebanyak : $hewan->kaki<br>";
echo "kancil adalah hewan yang  $hewan->terbang_atau_tidak<br>";
echo "suaranya : $hewan->suara<br>";
?>