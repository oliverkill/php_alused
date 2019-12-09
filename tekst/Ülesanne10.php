<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<menu>
    <a href="Ülesanne10.php">Esileht</a>
    <a href="Ülesanne10.php?Ülesanne10=Lehekylg2">Lehekülg 2</a>
    <a href="Ülesanne10.php?Ülesanne10=Lehekylg3">Lehekülg 3</a>
    <a href="Ülesanne10.php?Ülesanne10=Lehekylg4">Lehekülg 4</a>
</menu>
</body>
</html>
<?php
if(!empty($_GET['Ülesanne10'])){
    $leht = htmlspecialchars($_GET['Ülesanne10']);
    $lubatud = array('Lehekylg2','Lehekylg3','Lehekylg4');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    } else {
        echo 'Valitud lehte ei eksisteeri!';
    }
} else {
    print "Algus/esileht";
}
?>