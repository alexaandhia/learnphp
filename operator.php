<?php

    //menghitung luas segitiga
    $a = 10;
    $t = 8;

    //masukan rumus segitiga
    $luassegitiga = ($a * $t)/2;

    //tampilkan
    echo "Luas segitiga yang memiliki alas $a cm dan tinggi $t cm adalah $luassegitiga cm";

    echo "<br>";echo "<br>";

    //menghitung luas persegi
    $s = 4;

    //masukan rumus segitiga
    $luaspersegi = ($s ^ 2);

    //tampilkan
    echo "Luas persegi yang memiliki sisi $s cm adalah $luaspersegi cm";

    echo "<br>";echo "<br>";

    //menghitung luas lingkaran
    $r = 8;

    //masukan rumus lingkaran
    $luaslingkaran = (3.14 * $r ^ 2);

    //tampilkan
    echo "Luas ligkaran dengan jari jari $r cm adalah $luaslingkaran cm";

    $a = 19;
    $b = 20;

    //menggunakan operator relasi lebih besar
    $c = $a > $b;
    echo "$a > $b: $c";
    echo "<hr>";

    //menggunakan operator relasi lebih kecil
    $c = $a < $b;
    echo "$a < $b: $c";
    echo "<hr>";

    //menggunakan operator relasi lebih sama dengan
    $c = $a == $b;
    echo "$a == $b: $c";
    echo "<hr>";

    //menggunakan operator relasi lebih tidak sama dengan
    $c = $a != $b;
    echo "$a != $b: $c";
    echo "<hr>";

    //menggunakan operator relasi lebih besar sama dengan
    $c = $a >= $b;
    echo "$a >= $b: $c";
    echo "<hr>";

    //menggunakan operator relasi lebih kecil sama dengan
    $c = $a <= $b;
    echo "$a <= $b: $c";
    echo "<hr>";

?>

