<?php
$array = ['semangka', 'apel', 'nanas'];
$buah = "Apel";
?>

<html>
    <head><title>Ternaryy</title></head>
    <body>
        <h2 class="<?php echo in_array($buah, $array) ? 'text-primary' : 'text-dark' ?>"></h2>
        <?= $buah; ?></h2>
    </body>
</html>