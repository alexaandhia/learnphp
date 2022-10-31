<?php
session_start();

if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
    $nis = $_SESSION['nis'];
    $rayon = $_SESSION['rayon'];
}else{
    $name = [];
    $nis = [];
    $rayon = [];
}


if(isset($_POST['name'])){
    $name[] = $_POST["name"];
    $nis[] = $_POST["nis"]; 
    $rayon[] = $_POST['rayon'];
}


$_SESSION["name"] = $name;
$_SESSION["nis"] = $nis;
$_SESSION["rayon"] = $rayon;
?>

<h1 align="center">Form Data Siswa</h1>
<form action="" method="post" class="form">
<table border=2 align=center>
    <tr>
        <td>Nama: </td>
        <td><input type="text" name="name" required></td>
    </tr>
    <tr>
        <td>Nis: </td>
        <td><input type="text" name="nis" required></td>
    </tr>
    <tr>
        <td>Rayon: </td>
        <td><input type="text" name="rayon" required></td>
    </tr>
    <tr colspan= 2>
        <td><input type="submit" value="Hasil" required><a href="destroy.php">RESET</a></td>
    </tr>
</table>
<hr>
</form>

    <?php
    $count = 0;
    foreach($name as $key=>$value){
        $count++;
        echo "<table border='1' table align='center'>
        <tr>
        <th>$count : Nama</th> 
        <th>NIS</th>
        <th>Rayon</th>
        </tr>
        <br>
        <tr>
        <td>$name[$key]</td>
        <td>$nis[$key]</td> 
        <td>$rayon[$key]</td>
        </tr>";
    }

    ?>

 </form>