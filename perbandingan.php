<?php
//$text="";
//$alert=false;
//$opr = "";

//if(isset($_POST['tekan'])){
  //  if(!empty($_POST[$a])&& !empty($_POST[$b])){
    //$a = $_REQUEST['bilSatu'];
    //$b = $_REQUEST['bilDua'];


//    if ($a == $b ) {
  //      echo $a ." sama dengan ". $b;
    //}elseif ($a > $b) {
      //  echo $a ." lebih besar dari ". $b;
   // }else{
     //   echo $a ." lebih kecil dari ". $b;
    //}
    //}else{
      //  $alert=true;
    //}
    
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Studi Kasus </title>
</head>
<body>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->


    <h2 align="center">Perbandingan Dua Bilangan</h2>
	<form name='form1'action=''method='POST' align="center">

    <?php

    ?>
    <div class="data">
		<label> Bilangan 1 <label>
		<input type='number' name='bilSatu' required placeholder="Masukkan bilangan bulat"><br>
		<label> Bilangan 2<label>
		<input type='number' name='bilDua' required placeholder="Masukkan bilangan bulat"><br>
		<input type='submit' name='tekan' value='Input'>
        <br> <hr>
        </div>


<?php

 if (isset($_POST['tekan'])) {
     //if(!empty($_POST[$a])&& !empty($_POST[$b]))
     $a = $_REQUEST['bilSatu'];
     $b = $_REQUEST['bilDua'];


 if ($a == $b ) {
     echo $a ." sama dengan ". $b;
 }elseif ($a > $b) {
     echo $a ." lebih besar dari ". $b;
 }else{
     echo $a ." lebih kecil dari ". $b;
 }
 }


?>
<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perbandingan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Signika+Negative:wght@500&display=swap');
        body{
            background: #C0B236;
            font-family: 'Signika Negative', sans-serif;
        }
        .container{
            min-height: 100vh;
        }
        h1{
            text-align: center;
        }
        p{
            text-align: center;
            font-weight: bold;
        }
        i{
            text-align: center;
            font-size: 30px;
        }
        .card{
            background: #FFF38C;
        }
    </style>

  </head>

  <body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card p-5">
            <i class="fa-solid fa-equals"></i>
            <h3>Perbandingan</h3>
            <p>Cek perbandingan angka</p>
        <div class="row p-4">
    <div class="col">
     <input type="number" class="form-control" placeholder="Angka pertama" aria-label="Angka pertama">
  </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="Angka ke dua " aria-label="Angka kedua">
    </div>
    <button type="button" class="btn btn-secondary mt-4">Secondary</button>
 </div>



 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  
 

  -->


    
    
  </body>
</html>

</body>
</html>