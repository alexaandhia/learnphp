<?php 
// menangkap data nama dengan method post
$nama = $_GET['nama'];
// menangkap data usia dengan method post
$umur = $_GET['umur'];
$nis = $_GET['nis'];
$rombel = $_GET['rombel'];
$hobi = $_GET['hobi'];


 
// menampilkan data nama
echo "Nama anda adalah " . $nama;
echo "<br/>";
// menampilkan data usia
echo "Umur anda adalah " . $umur;
echo "<br>";
echo "Nomor NIS anda adalah " . $nis;
echo "<br>";
echo "Anda berada di rombel " . $rombel;
echo "<br/>";
echo "Hobi anda adalah " . $hobi;
echo "<br/>";
echo "Nama saya adalah " . $nama;
?>