<?php
$chyby = array();

if (!isset($_POST['meno']) || $_POST['meno'] === '') {
    $chyby[] = "Nevyplnili ste login!";
}


if (!isset($_POST['heslo']) || $_POST['heslo'] === '') {
    $chyby[] = "Nezadali ste heslo!";
}
?>