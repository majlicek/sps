<?php
$a = 0;
include 'kontrolaPrihlas.php';
if (!empty($_POST) && empty($chyby)) {
    echo "Sravne zadane udaje";
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN">

<html>
<head>
    <title>Zadanie 2</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body style="width: 500px; margin: auto auto">
<form class="form" method="post" action="<?php print $_SERVER['PHP_SELF'] ?>" styles="width: 50%; margin: 40px auto;">
    <?php if (!empty($_POST)):
        foreach ($chyby as $chyba):?>
            <p style="color: red"><?php echo $chyba ?></p>
        <?php endforeach;
    else:
    endif;
    if ($a == 1): ?>  <p style="color: red">Nesprávne meno alebo heslo </p>
    <?php endif; ?>

        <label for="meno">Prihlasovacie meno:</label>
        <input style="width:50%" type="text" name="login" id="login" required/>

        <label for="meno">Email:</label>
        <input style="width:50%" type="text" name="email" id="email" required/>

        <label for="heslo1">Heslo používateľa:</label>
        <input style="width:50%" type="password" name="heslo1" id="heslo1" required/>

        <label for="heslo2">Heslo používateľa znova:</label>
        <input style="width:50%" type="password" name="heslo2" id="heslo2" required/>

        <input type="submit" value="Uložiť">
</form>

</body>
</html>