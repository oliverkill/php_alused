<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ülesanne 9</title>
</head>
<body>
    <form>
        <label for="tekst">Sisesta vormistatav nimi</label>
        <input name="nimi" type="text">
        <hr>
        <label for="tekst">Sisesta vormistatav tekst</label>
        <input name="tekst" type="text">
        <hr>
        <label for="tekst">Sisesta eesnimi</label>
        <input name="enimi" type="text">
        <br>
        <label for="tekst">Sisesta perenimi</label>
        <input name="pnimi" type="text">
        <br>
        <input type="submit" value="Saada">
    </form>
</body>
</html>
<?php
$nimi = $_GET["nimi"];
print '<br>Harjutus 1: Tere, '.ucwords(strtolower($nimi));
print '<br>Harjutus 2: ';
for ($x = 0; $x < strlen($nimi); $x++) {
    print strtoupper($nimi[$x]).'.';
}
$tekst = $_GET["tekst"];
$otsitav = "noob";
$leia_tekstist = strpos($tekst, $otsitav, 0);
$asendatav_pikkus = 4;
$asendus = "****";
print "<br>Harjutus 3: ".substr_replace($tekst, $asendus, $leia_tekstist, $asendatav_pikkus);
$enimi = $_GET["enimi"];
$pnimi = $_GET["pnimi"];
$otsi = array("ä", "ö", "ü", "õ", "Ä", "Ö", "Ü", "Õ");
$asenda = array("a", "o", "y", "o", "a", "o", "y", "o");
print "<br>Harjutus 4: ".str_replace($otsi, $asenda, $enimi).'.'.str_replace($otsi, $asenda, $pnimi)."@khk.edu.ee";