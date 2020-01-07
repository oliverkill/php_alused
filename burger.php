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
<!--<form action="/burger.php" method="get">
    <select name="burgeriValik">
        <option value="Klassikaline">Klassikaline</option>
        <option value="BigMac">Big Mac</option>
        <option value="Kanaburger">Kanaburger</option>
        <option value="Juustuburger">Juustuburger</option>
        <option value="TervislikBurger">Tervislik Burger</option>
    </select>
    <input type="submit"> -->
</form>
</body>
</html>
<?php
class Burger {
    private $kukkel;
    private $nimi;
    private $liha;
    public $hind = 4.00;
    private $lisand1;
    private $lisand2;
    private $lisand3;
    private $lisand4;

    public function __construct($nimi, $kukkel, $liha)
    {
        $this -> nimi = $nimi;
        $this -> kukkel = $kukkel;
        $this -> liha = $liha;
    }
    public function lisaLisand1($lisand1) {
        $this -> lisand1 = $lisand1;
        $this -> hind += 0.25;
    }
    public function lisaLisand2($lisand2) {
        $this -> lisand2 = $lisand2;
        $this -> hind += 0.3;
    }
    public function lisaLisand3($lisand3) {
        $this -> lisand3 = $lisand3;
        $this -> hind += 0.35;
    }
    public function lisaLisand4($lisand4) {
        $this -> lisand4 = $lisand4;
        $this -> hind += 0.4;
    }

    public function tellimus() {
        return "Tellitud burger: <br>Burgeri nimi: ".$this->nimi."<br>Burgeri kukkel on ".$this->kukkel.", burger on ".$this->liha."ga<br>Valisid lisand(id): ".$this->lisand1." ".$this->lisand2." ".$this->lisand3." ".$this->lisand4."<br>Burger maksab: ".$this->hind."€<hr>";
    }
};

class TervislikBurger {
    public $nimi = "Tervislik Burger";
    private $liha;
    public $hind = 5.00;
    private $lisand1;
    private $lisand2;
    private $lisand3;
    private $lisand4;
    private $tervislikLisand1;
    private $tervislikLisand2;

    public function __construct($liha)
    {
        $this -> liha = $liha;
    }
    public function lisaLisand1($lisand1) {
        $this -> lisand1 = $lisand1;
        $this -> hind += 0.25;
    }
    public function lisaLisand2($lisand2) {
        $this -> lisand2 = $lisand2;
        $this -> hind += 0.3;
    }
    public function lisaLisand3($lisand3) {
        $this -> lisand3 = $lisand3;
        $this -> hind += 0.35;
    }
    public function lisaLisand4($lisand4) {
        $this -> lisand4 = $lisand4;
        $this -> hind += 0.4;
    }
    public function lisaTervislikLisand1($tervislikLisand1) {
        $this -> tervislikLisand1 = $tervislikLisand1;
        $this -> hind += 0.5;
    }
    public function lisaTervislikLisand2($tervislikLisand2) {
        $this -> tervislikLisand2 = $tervislikLisand2;
        $this -> hind += 0.55;
    }
    public function tervislikTellimus() {
        return "Tellitud burger: <br>Burgeri nimi: ".$this->nimi."<br>Burgeri kukkel on must teraleib, burger on ".$this->liha."ga<br>Valisid lisand(id): ".$this->lisand1." ".$this->lisand2." ".$this->lisand3." ".$this->lisand4." ".$this->tervislikLisand1." ".$this->tervislikLisand2."<br>Burger maksab: ".$this->hind."€<hr>";
    }
}

class LuxBurger
{
    private $kukkel;
    public $nimi = "Lux Burger";
    private $liha;
    private $jook;
    public $hind = 7.50;
    public function __construct($kukkel, $liha, $jook)
    {
        $this -> kukkel = $kukkel;
        $this -> liha = $liha;
        $this -> jook = $jook;
    }
    public function luxTellimus () {
        return "Tellitud burger: <br>Burgeri nimi: ".$this->nimi."<br>Burgeri kukkel on ".$this->kukkel.", burger on ".$this->liha."ga<br>Burgerile on lisaks friikartulid ja joogiks on ".$this->jook."<br>Eine maksab: ".$this->hind."€<hr>";
    }
}
/*
$type = $_GET['burgeriValik'];

function valik() {
    if ($type = 'Klassikaline') {
        $burger  = new Burger($type, "Perenaise sai", "veiselihaga");
        print $burger -> tellimus();
    }
    elseif ($type = 'Kanaburger') {
        $burger  = new Burger($type, "Seesami seemnetega sai", "kanalihaga");
        print $burger -> tellimus();
    }
    elseif ($type = 'Juustuburger') {
        $burger  = new Burger($type, "Juustuga sai", "veiselihaga");
        print $burger -> tellimus();
    }
    elseif ($type = 'BigMac') {
        $burger  = new Burger($type, "Seesami seemnetega sai", "veiselihaga");
        print $burger -> tellimus();
    }
    elseif ($type = 'TervislikBurger') {
        $burger  = new TervislikBurger($type,"veiselihaga");
        print $burger -> tervislikTellimus();
    }
}
if($type) {
    valik();
}
*/
$bigmac1 = new Burger("Big Mac", "seesamisai", "veiseliha");
$tervislikburger1 = new TervislikBurger ("veiseliha");
$tervislikburger1 -> lisaTervislikLisand1("salat");
$luxburger1 = new LuxBurger("perenaise sai","kanaliha", "fanta");
print $luxburger1 ->luxTellimus();
print $tervislikburger1 ->tervislikTellimus();
print $bigmac1 ->tellimus();
