<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form>
    <label for="aeg">Sõidu alguse aeg</label>
    <input name="aeg" type="time">
    <label for="aeg2">Sõidu lõpu aeg</label>
    <input name="aeg2" type="time">
    <input type="submit" value="Saada">
</form>
</body>
</html>
<?php
$aeg1 = $_GET["aeg"];
$aeg2 = $_GET["aeg2"];
print "Sõitu alustati: ".$aeg1."<br>";
print "Sõit lõpetati: ".$aeg2."<br>";

$a = new DateTime($aeg1);
$b = new DateTime($aeg2);
$interval = $a->diff($b);

print "Sõit võttis aega: ".$interval->format("%H").":".$interval->format("%i");