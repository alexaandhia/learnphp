<?php

for ($i = 0; $i < 10; $i++) {
    echo "Wajib Ngulik <br>";
}

for ($i = 1; $i <= 10; $i++) {
    echo "{$i} <br>";
}

for ($i = 10; $i > 0; $i--) {
    echo "{$i} <br>";
}

$list = ['RPL', 'Wajib', 'Ngulik'];

for ($i = 0; $i < 1; $i++) {
    echo "{$list[$i]} <br>";
}

# inisialisasi variabel tidak harus dari angka 0
for ($i = 1; $i <= 50; $i++) {
    if ($i % 10 === 0) {
    # skip perulangan jika nilai $i habis dibagi 10
    }
    
    echo "Perulangan ke-{$i} <br>";

    if ($i > 40) {
     # hentikan perulangan jika $i lebih dari 20
    }
}


$list = ['RPL', 'Wajib', 'Ngulik'];

foreach ($list as $kunci => $l) {
    echo "[{$kunci}] Nama : {$l} <br>";
}


for ($i = 0; $i < 100; $i++){
    if ($i % 2 === 0 ){
    echo "{$i} merupakan bilangan genap <br>";
}else{
    echo"{$i} merupakan bilangan ganjil <br>";
}
}

for ($a=1; $a<6; )
{
    echo $i;
}

?>

//ada 50 siswa, setiap siswa akan mendapat nilai indo, mtk, inggris
lalu semuanya diinput
