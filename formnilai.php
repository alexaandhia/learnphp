<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Asap:wght@500&family=Work+Sans:wght@500&display=swap');

        h1{
            font-family: 'Asap', sans-serif;
            font-family: 'Work Sans', sans-serif;
            font-weight: 700;
        }

        </style>
</head>
<body>
    <h2>Cek Nilai</h2>
    <form action="" method="post">
        <input type="number" name="angka">
        <input type="submit" name ="cek">
    </form>
</body>
</html>

<?php
if (isset($_POST['cek'])) {
    $angka= $_POST['angka'];
if ($angka >= 86) {
    echo $angka . " = A";
} elseif ($angka >=75 && $angka <86) {
    echo $angka . " = B";
}else {
    echo $angka . " = C";
}
}

?>