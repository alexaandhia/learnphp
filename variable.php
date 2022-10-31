<?php
   $nama = 'Alexandria Andhia Putri'; 
   $umur = 15; 
   $NIS = 12108296;
   $rombel = 'PPLG X-1';
   $hobi = 'menonton ';

   echo "Nama : $nama";
   echo "<br>";
   echo "Umur : $umur"; 
   echo "<br>";
   echo "NIS : $NIS";
   echo "<br>";
   echo "Rombel : $rombel";
   echo "<br>";
   echo "Hobi : $hobi";
   //komentar
   /*komentar */
  
   // membuat array kosong
echo "<br>";

// membuat array kosong
$buah = array();
$hobi = [];

// membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", ];

// membuat array dengan mengisi indeks tertentu
$anggota = ["Dian", "Muhar", "sera"];


foreach($anggota as $anggotaku);{
   echo "$anggotaku.";
}
print_r($minuman); echo "     print_r";
echo "<br>";
var_dump($makanan); echo "    Var_dump";
echo "<hr />";
echo "<br>";
$rumah = [
   "A" => "kamar", 
   "B" => "garasi", 
   "C" => "dapur"
];

   echo "saya sedang berada di ".$rumah["A"];
   $matrik = [ //bungkus besar
      [2,3,4], //bungkus kecil
      [7,5,0],
      [4,3,8],
  ];
  
  // cara mengakses isinya
  echo $matrik[1][0];
  echo "<br>";
  print_r($matrik[1][0]);
  echo "<br>";
  $nilai = [2,4,6,32,7,9,3,27,59,78];
  asort($nilai);
 echo (min($nilai));
echo (sort($nilai));
 echo (count($nilai));
 $arrlength = count($nilai);
 for ($i = 0; $i < $arrlength; $i++)
 {
  echo $nilai[$i];
   echo "<br>";
 }
 echo "<hr />";
 echo "<br>";
$nilai 		= [90, 70, 85, 65];
arsort($nilai);
