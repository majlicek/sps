<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN">
<html>
<head>
    <title>Zadanie 3</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script>
        function showHint(str) {
            if (str.length == 0) {
                document.getElementById("txtNavrh").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtNavrh").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "navrh.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body style="width: 500px; margin: auto auto">
<form class="form" method="post" action="" styles="width: 50%; margin: 40px auto;">

    <fieldset>
        <legend>Prihlásenie do systému</legend>
        <label for="meno">Prihlasovacie meno:</label>
        <input style="width:50%" type="text" name="meno" id="meno" onkeyup="showHint(this.value)"/>

        <label for="heslo">Heslo:</label>
        <input style="width:50%" type="password" name="heslo" id="heslo"/>
        <p>Návrhy na mená: <span id="txtNavrh"></span></p>
        <input type="submit" value="Prihlásiť" style="float: right">
    </fieldset>
</form>
</body>
</html>