<?php
date_default_timezone_set('Europe/Tallinn');
print 'Ül. 1: '.date('d.m.Y G:i');
$eesti_paevad = array(1=>'esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede', 'laupäev', 'pühapäev');
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
$paev = $eesti_paevad[date('w')];
$kuu = $eesti_kuud[date('n')];
print '<br>Ül. 2: '.$paev;
print '<br>Ül. 3: '.date('d').'.';
print ($kuu).' ';
print date('Y').' ';
print ($paev).'<br>';


$jargmineAasta = date('Y')+1;
$jaanipaev = mktime(0, 0, 0, 6, 24, $jargmineAasta);
$hetkeAeg = time();
$kuni = $jaanipaev - $hetkeAeg;
$paevaSekunditeArv = 60 * 60 * 24;
$paevadeArv = (int)($kuni / $paevaSekunditeArv);
print 'Ül. 4: '.$jargmineAasta.' aasta jaanipäevani on jäänud '.$paevadeArv.' päeva<br>';


$sinuSynd = strtotime("06 June 1980");
$minuSynd = strtotime("03 February 2000");
$minuVanus = date('d.m.Y') - $minuSynd;
$vanusteVahe = $minuSynd - $sinuSynd;
$vaheAastates = (int)($vanusteVahe / (60 * 60 * 24 * 30 * 12) + 1); // andis ilma "+1" vale vanuse, kuna olen aastas varem sündinud (kuude lahutamisel tekib viga)
print 'Ül. 5: '.$vaheAastates.'<br>';


$minuSynnipaevJargmiselAastal = strtotime("03 February ".$jargmineAasta);
$vanusSekundites = $minuSynnipaevJargmiselAastal - $minuSynd;
$vanusAastates = (int)($vanusSekundites / (60 * 60 * 24 * 30 * 12));
if($vanusAastates % 5 == 0) {
    print 'Ül. 6: '.$jargmineAasta.' on mul juubel';
} else {
    print 'Ül. 6: '.$jargmineAasta.' pole mul juubelit';
}
print '<br>';

print 'Ül. 7: ';
$kell = date('H');
if($kell >= 8 and $kell < 13){
    print 'Tere hommikust!';
} else if($kell >= 13 and $kell < 17) {
    print 'Tere päevast!';
} else if($kell >= 17 or $kell > 0) {
    print 'Tere õhtust!';
}