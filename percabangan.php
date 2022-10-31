<?php

$baju = true;

if($baju){
	echo "Variable baju bernilai true"; 
}

/* jika variabel if salah, maka perintahnya tidak akan jalan */

echo "<br>";

$nilai = 89.5;
echo "Variable tersebut bernilai : {$nilai} <br>";

if($nilai <= 100 && $nilai >= 90){
   echo "A";
}elseif($nilai < 90 && $nilai >= 80){
   echo "B";
}elseif($nilai < 80 && $nilai >= 70){
   echo "C";
}else{
   echo "jeleg";
}

// $nilai <= 100
// $nilai <= 90
// $nilai > 80

echo "<br>";

$nilai = 20;
echo "Variable tersebut bernilai : {$nilai} <br>";

if ($nilai >= 50){
  echo "GOOD JOB !";
}elseif($nilai <= 50){
  echo "Jangan Menyerah !";
}else{
  echo "Coba Lagi !";
}

// <br>
// <hr>

// $a =80;
// $b = 62;

// $hasil = round(($a + $b)/2);

// <!doctype html>
// <head></head>
// <body>
// <h2 class="<? $hasil >= 75? 'text-success' : 'text-danger'?>"><?php $hasil ?>  </h2>
// </body>
// </html>
 
?>