<?php
require_once "andmebaasigaYhendamine.php"; // loeme andmebaasi config sisse
// loome ühenduse
require_once "db_fnc.php";

$ikt = connection(HOSTNAME, USERNAME, USERPASS, DATABASE);
// katsetame sql

$slq = "SELECT * FROM killoliv_ab.koolid";
$result = getData($slq, $ikt);
print "<pre>";
print_r($result);