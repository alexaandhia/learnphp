<?php
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
     "kamar",  "garasi", "dapur"];
 $rumah[] = "ruang tamu";
 
    echo "saya sedang berada di ".$rumah[1];
    echo "<br>";
    echo $rumah[0];
    unset($rumah [2]);
    var_dump($rumah);

    echo "<hr />";
 echo "<br>";

 $nilai = [80,78,72,84,92,88];
 $nilaii = implode(", ",$nilai);
 echo "nilai saya : ".$nilaii;
 echo "<br>";
 echo "nilai tertinggi: ".(max($nilai));
 echo "<br>";
 echo "nilai terendah: ".(min($nilai));
 echo "<br>";
 echo "banyak data: ".(count($nilai));
 echo "<br>";
 
 $nilaiSatu = [];
 for($i=0; $i < count($nilai); $i++){
    array_push($nilaiSatu, $nilai[$i]);
 }
 asort($nilaiSatu);
 echo "urutan terkecil: ".implode (", ", $nilaiSatu);
 echo "<br>";

 $nilaiDua = [];
 for($i=0; $i < count($nilai); $i++){
    array_push($nilaiDua, $nilai[$i]);
 }
 arsort($nilaiDua);
 echo "urutan terbesar: ".implode (", ", $nilaiDua);
 echo "<br>";

 echo "rata rata nilai jika dibulatkan: ".round(array_sum($nilai)/count($nilai));
 echo"<br>";

 array_splice($nilai,2,1,"75");
 //print_r($nilai);
 echo "jadi nilai saya sekarang: ".implode (", ", $nilai);

 echo "<br>";

 $nilaiTiga= [];
 for($i=0; $i < count($nilai); $i++){
    array_push($nilaiTiga, $nilai[$i]);
 }
 arsort($nilaiTiga);
 echo "urutan terbesar sekarang: ".implode(", ", $nilaiTiga);

//apabila dibulatkan pake arraysum () dibagi count terus biar hasilnya bulat pake round
// 

echo "<br> <hr> <br>"; ?>
<?php
$nama = array(
   1=>"a",
   5=>"i",
   7=>"u"
);

foreach ($nama as $kunci){
   echo "$kunci5";
}
?>


