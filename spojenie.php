<?php

$pripojenie = mysqli_connect('localhost', 'root', '', 'sps');

/* change character set to utf8 */
$pripojenie->set_charset("utf8");


if ($pripojenie === FALSE) {
    die(mysqli_error());
}
if (!$pripojenie) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}