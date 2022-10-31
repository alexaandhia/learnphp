<?php
$barang = [
   ["produk"=>"Televisi",
    "diskon"=>15,
    "harga"=> 1600000],

    ["produk"=>"Kulkas",
    "diskon"=> 30,
    "harga"=> 3000000],

    ["produk"=>"Komputer",
    "diskon"=> 0,
    "harga"=> 2300000],
];

if(isset($_POST ['send'])){
    $produk = $_POST['barang'];
    $jmlbarang = $_POST['totalbarang'];

}

if(isset($_POST ['barang']) && isset($_POST['total'])) {
    $totalharga = 0;
    $index = array_search($_POST['barang'],array_column($barang, 'produk'));
    if ($index){
        $diskon = $barang[$index][$diskon];
        $harga = $barang[$index][$harga];
        $totalBarang = $_POST['total'];
    }
}

 if(isset($_POST['send'])){
     $produk[] = $_POST['produk'];
     $diskon[] = $_POST['diskon'];
     $harga[] = $_POST['harga'];

     foreach($data as $barang=>$value);
   
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Harga</title>
</head>
<body>
    <form action="" method="POST">
        <table align="center" border="1" cellspacing="2" cellpadding="2">
            <h2 align=center>Cek Total Barang</h2>
            <tr>
                <td>Barang</td>
                <td>
                    <select name="barang" id="">
                        <option hidden>Pilihan Barang</option>
                        <?php foreach($barang as $brg) :?>
                            <option value="<?= $brg['produk'] ;?>'><?= $brg['produk'] ;?></option>
                        <?php endforeach ;?> 
                    </select>
                </td>
            </tr>
            <tr>
                <td>Total</td>
                <td><input type="number" name="totalbarang"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="kirim">submit</button></td>
            </tr>
        </table>
        <hr>
    </form>

    <?php if(isset($_POST['kirim'])) ?>
    <h3>
        <?= $_POST['barang'] . " x " . $_POST['totalbarang'] . " = Rp. " . number_format($totalHarga,2,",",".") ;?><br>
        Setelah diskon = <?= $produkDiskon;?>%<br> harga <?= $_POST['barang'] ;?> menjadi Rp. <?= number_format($hasilDiskon,2,",",".");?>
    </h3>
</body>
</html>


<!-- if(isset($_POST['barang']))&& isset($_POST['total']){
    $totalHarga = 0;
    $index = array_search($_POST['barang']), array_column($barang, 'produk');
    if(index){
        $diskon = $barang[$index][$diskon]
        $harga = $barang[$index][$harga];
        $totalBarang = $_POST['total'];
    }
}

//$barang = ["Televisi", "Kulkas", "Komputer"];

//  if(isset($_POST['send'])){
//      $produk[] = $_POST['produk'];
//      $diskon[] = $_POST['diskon'];
//      $harga[] = $_POST['harga'];

//      foreach($data as $barang=>)
    
//  }


?> -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1 align="center">CEK HARGA</h1>
<form method="post" align="center">
<label> Barang
  <select class="Barang" name="Barang">
  <option value="Select"></option>
  <option value="tv">Televisi</option>
  <option value="kulkas">Kulkas</option>
  <option value="komputer">Komputer</option>
</label>
</select>

</form> -->





<?php



//if(isset($_POST ['diskon'])){
  //  $produk=['produk'];
    //$diskon=['diskon'];
    //$harga=['harga'];
//}


?>