<?php
if (isset($_POST['tekan'])) {
    $bil1 = $_REQUEST['bilangan1'];
    $bil2 = $_REQUEST['bilangan2'];
    $bil3 = $_REQUEST['bilangan3'];

    if ($bil1 > $bil2) {
        if ($bil1 > $bil3) {
            echo $bil1;
        }else {echo $bil3;}
    } elseif ($bil2 > $bil1) {
        if ($bil2 > $bil3) {
            echo $bil2;
        }else {echo $bil3;}
    } elseif ($bil3 > $bil1) {
        if ($bil3 > $bil2) {
            echo $bil3;
        }else {echo $bil2;}
    }
}
?>