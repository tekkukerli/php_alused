<?php

date_default_timezone_set('Europe/Tallinn');
//Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31
$hetkeAeg = time();
$vormindatudAeg = date('d.m.Y G:i', $hetkeAeg);
$konkreetneaeg = mktime(12,31,0,3,20,2013);
$vormindatudKonkreetneAeg = date('d.m.Y G:i', $konkreetneaeg);
echo $vormindatudAeg.'<br>';
echo $vormindatudKonkreetneAeg.'<br>';

//Kuva tänane eestikeelne nädalapäev, N: kolmapäev
$nadal = array(
    '1' => 'esmaspäev',
    '2' => 'teisipäev',
    '3' => 'kolmapäev',
    '4' => 'neljapäev',
    '5' => 'reede',
    '6' => 'laupäev',
    '7' => 'pühapäev',
);
echo '<hr>';
$hetkeAeg = time();
$nadalaPaevaNumber = date('N', $hetkeAeg);
echo $nadal[$nadalaPaevaNumber];
echo '<hr>';

//Kuva eestikeelne kuupäev koos nädalapäevaga. Näiteks: 23.veebruar 2013 laupäev
$kuud = array(
    '1' => 'jaanuar', '2' => 'veebruar', '3' => 'märts', '4' => 'aprill', '5' => 'mai', '6' => 'juuni', '7' => 'juuli', '8' => 'august', '9' => 'september', '10' => 'oktoober', '11' => 'november', '12' => 'detsember',
);
$kuuNumber = date('n', $hetkeAeg);
$vajund = date('d . ').$kuud[$kuuNumber].date(' Y ').$nadal[$nadalaPaevaNumber];
echo $vajund;
echo '<hr>';

//Leia mitu päeva on jäänud järgmise jaanipäevani. Näiteks: 2014 aasta jaanipäevani on jäänud 236 päeva!
$hetkelSekundid = time();
$jaaniPaev = mktime(0,0,0,6,24, date(' Y '));
$vaheSekundites = $jaaniPaev - $hetkelSekundid;
$vahePaevades = round($vaheSekundites / (60 * 60 * 24), 0);
$valjund = date('Y ').'aasta jaanipäevani on jäänud '.$vahePaevades. ' päeva';
echo $valjund;
echo '<hr>';

//Minu sünnipäev on 06.11.1980! Leia kumb on meist vanem. Kuva mõlema sünnikuupäevad ning vahe aastates.
$temaSynniKuupaev = mktime(0,0,0,11,6,1980);
$temaSynnaNyyd = mktime(0,0,0,11,6, date('Y'));
$temaVanusSekundites = $temaSynnaNyyd - $temaSynniKuupaev;
$temavaljund = date('d.m.Y', $temaSynniKuupaev );

$minuSynniKuupaev = mktime(0,0,0,6,30,1992);
$minuSynnaNyyd = mktime(0,0,0,6,30, date('Y'));
$minuVanusSekundites = $minuSynnaNyyd - $minuSynniKuupaev;
$minuvaljund = date('d.m.Y', $minuSynniKuupaev);

echo 'Tema sünnikuupäev '.$temavaljund.'<br>';
echo 'Minu sünnikuupäev '.$minuvaljund.'<br>';

$vaheSekundites = $temaVanusSekundites - $minuVanusSekundites;
if($vaheSekundites > 0) {
    echo 'Tema on vanem <br>';
} else if($vaheSekundites < 0){
    echo 'Mina olen vanem <br>';
} else {
    echo 'Oleme sama vanad <br>';
}
echo 'Vahe aastates on '.round($vaheSekundites / (60 * 60 * 24 * 30.4 * 12), 0).'<br>';
echo '<hr>';

//Leia, kas sul on järgmine aasta juubel?
$minuVanusAastates = round($minuVanusSekundites / (60 * 60 * 24 * 30.4 * 12),0);
echo 'Saan see aasta '.$minuVanusAastates.' aastat vanaks<br>';
$juubel = $minuVanusAastates % 5;
echo 'Juubelini on jäänud '.$juubel.'aastat <br>';
if($juubel = 0) {
    echo 'Mul on juubel.<br>';
} else {
    echo 'Mul ei ole juubel.<br>';
}
echo '<hr>';

//Koosta kood, mis tervitab sind vastavalt ajale. N: 8:00+ “Tere hommikust!”, 13:00+ “Tere päevast!” ja 17:00+ “Tere õhtust!”
echo date("h:i a");
$morningTime = "08:00:00";
$dayTime = "13:00:00";
$eveningTime = "17:00:00";
$currentTime = date("h:i a");
echo '<br>';
if($currentTime > $morningTime and $currentTime < $dayTime) {
    echo " Tere hommikust Kerli!<br>";
} else if ($currentTime > $dayTime and $currentTime < $eveningTime) {
    echo " Tere päevast Kerli!<br>";
} else if ($currentTime > $eveningTime) {
    echo " Tere õhtust Kerli!<br>";
}
echo '<hr>';