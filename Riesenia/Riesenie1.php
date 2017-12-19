<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
</head>
<body>
<form class="form" method="post" action="<?php print $_SERVER['PHP_SELF'] ?>">
    <?php if (!empty($_POST))
        if ($_POST['volbaRadio'] == 1){
        phpinfo();
        }
    ?>
    <label for=\"volba1\">1</label>
    <input type="radio" value="1" name="volbaRadio" id="volba1">
    <label for=\"volba2\">2</label>
    <input type="radio" value="2" name="volbaRadio" id="volba2">

        <input type="submit" value="Zobraz info">
</form>

</body>
</html>
