<!DOCTYPE html>
<html >
<head>
    <title>Input Form</title>
</head>
<body>
    <form action="another.php" method="post">
        <label >Nama Siswa </label>
        <input type="text" name="nama"> <br> <br />
        <label for="">NIS</label>
        <input type="text" name="nis"> <br> <br />
        <label for="">Rayon</label>
        <input type="rayon" name="rayon"> <br> <br />
        <input type="submit" value="Submit">
        <input type="submit" value="Reset Data">
    </form>
    <br>
</body>
</html>

<?php

session_start();
$_SESSION["nama"] = "nama";
$_SESSION["nis"] = "nis";
$_SESSION["rayon"] = "nis";

    $nama = @$_POST['nama'];
    $nis = @$_POST['nis'];
    $rayon = @$_POST ['rayon'];

    if($nama){
        echo "Nama : $nama";
        echo "<br>";
    }
    if($nis){
        echo "NIS : $nis";
        echo "<br>";
    }
    if($rayon){
        echo "Rayon : $rayon";
        echo "<br>";
    }


$array = [];
if (isset($_GET['nama']) && isset ($_GET['nis']) && isset($_GET['rayon'])) {
    $data = array(
        "nama" => $_GET ['nama'],
        "nis" => $_GET ['nis'],
        "rayon" => $_GET ['rayon'],
    );

array_push($array, $data);
print_r($data);
    }

    $count = 1;
    foreach($nama as $key=>$value){
        $count++;
        echo "</br>$count : Nama: $nama[$key],</br> Nis: $nis[$key],</br> Rayon : $rayon[$key]</br>";
    }
?>