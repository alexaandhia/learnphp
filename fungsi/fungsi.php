<?php

echo "Hai";

function fungsiSatu(){
    echo "hai";
}

//cara memanggil fungsi
fungsiSatu();

echo "<br>"; echo "<br>";

//buat fungsiDua dgn parameter
function fungsiDua($kata="halo"){
    echo $kata;
}

//panggil fungsiDua
fungsiDua();

echo "<br>"; echo "<br>";

//membuat fungsiTiga dengan 2 parameter
function fungsiTiga($NIS, $Nama="12108296"){
    echo "NIS : ".$NIS;
    echo "<br>Nama : ".$Nama;
}

//panggil fungsiTiga
fungsiTiga("Alexandria");


echo "<br>"; echo "<br>";

//bikin fngsi penjumlahan
$bil1=7;
$bil2=8;
$bil3=83;

//fungsi penjumlahan
function penjumlahan($bil1, $bil2="536"){
     $bil1 + $bil2;
    
}

echo penjumlahan(3);

?>