<?php
$alert = false ;
$operator = "";
$text = "";
if (isset($_POST['kirim'])){
    if(!empty($_POST['a']) && !empty($_POST ['b'])){
    $alert = false ;

    $a = $_POST['a'];
    $b = $_POST['b'];

    if($a == $b){
        $operator =  " sama dengan " ;
        $text = $a . " sama dengan " . $b;
    }elseif($a > $b){
        $operator =  " lebih BESAR " ;
        $text = $a . " lebih BESAR dari " . $b; 
    }else{
        $operator =  " lebih kecil " ;
        $text = $a . " lebih kecil dari " . $b;
    }

    }else $alert = true;
}
?>

<!doctype html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Perbandingan Angka</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <style> 
@import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,600;1,400&display=swap');
   body { 
    background-color: #162447; 
   } 
   .container{ 
            min-height: 100vh; 
        } 
    h3{ 
            text-align: center; 
            color : whitesmoke; 
        } 
    p{ 
            text-align: center; 
            font-weight: bold; 
            color : whitesmoke; 
        } 
    i{ 
            text-align: center; 
            font-size: 30px; 
            color : whitesmoke; 
        } 
    .card{ 
            background: #5F6F94; 
        } 

    i.fa-exclamation-triangle {
        font-size: 25px;
        margin-right: 8px;
    }
   </style> 
</head> 
  <body> 
  <div class="container d-flex justify-content-center align-items-center"> 
        <form method="POST" action="" class="card p-5"> 
            <?php
            if ($alert == true){
            ?>
            <div class="alert alert-warning d-flex align-items-center" role="alert">
                <i class="fas fa-exclamation-triangle"></i>
  tidak bisa diisi nol
</div>
<?php
            }
            ?>

<?php
if ($operator == "" || $operator == "sama dengan"){
?>
<i class="fas fa-equals text-center text white"></i>
<?php
}elseif ($operator == "lebih dari"){
?>
<i class="fas fa-greater-than text-center text white"></i>
<?php
}else{
?>
<i class="fas fa-less-than text-center text white"></i>
<?php
}
?>

            <h3 class=" text-center mb-2">
            <!-- <i class="fa-solid fa-equals"></i>  -->
            <?php
            if ($text == "") {
                echo "PERBANDINGAN";
            }else{
                echo $text;
            }
            ?>
            </h3> 
            <p>cek perbandingan disini!</p> 
        <div class="row p-4"> 
    <div class="col"> 
     <input type="number" class="form-control" placeholder="Angka pertama" aria-label="Angka pertama" name="a"> 
  </div> 
    <div class="col"> 
      <input type="number" class="form-control" placeholder="Angka kedua " aria-label="Angka kedua" name="b"> 
    </div> 
    <button type="submit" class="btn btn-outline-dark mt-4" name="kirim">Hitung</button> 
    </form>
 </div> 
 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script> 
  </body> 
</html>
