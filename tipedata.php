<?php
	//tipe data string menggunakan metode single quoted
  $string1 = 'Ini adalah contoh string sederhana';
  $string2 = 'Variabel juga tidak otomatis ditampilkan : $string1';
 
	echo $string1; echo "<br>"; //br berfungsi untuk membuat baris baru
	echo $string2; 

    echo "<br>";echo "<br>";
	
	//tipe data string menggunakan metode double quoted
  $stringa = "Ini adalah contoh string sederhana 2";
  $stringb = "Variabel akan otomatis ditampilkan : $stringa";
 
	echo $stringa; echo "<br>"; //br berfungsi untuk membuat baris baru
	echo $stringb; 

    echo "<br>";echo "<br>";

    $nama = "Alexandria";
    $umur = 15;
  
    echo "Nama saya adalah  $nama  dan saya berumur $umur"; echo "<br>";
    echo "Nama saya adalah ".$nama." dan saya berumur ".$umur; echo "<br>";

    echo "<br>";echo "<br>";

$a = "7";
$b = "5";
echo $a * $b;

?>


<?php 
echo "<br>";echo "<br>";

$a = "7";
$b = 5;
echo $a * $b;

echo "<br>";
$e = "10 rumah"; /* $e bertipe data string ("10 rumah") */
$e = (int) $e; /* $e sekarang adalah integer (10) */
$e = (bool) $e; /* $e sekarang adalah boolean (true) */

$f = 100; /* $f bertipe data integer (100) */
$f = (string) $f; /* $f sekarang adalah string ("100") */

echo "e = $e"; echo "<br>";
echo "f = $f"; echo "<br>";

/* kalau single quoted semua teks yang ada di dalam quote akan terlihat semua tanpa diproses
dan double quoted akan memproses dulu jika ada variabel tertera */

$a = 6;
$b = 2;

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
