<?php
//sisend–>mARiO; väljund–>Tere, Mario!
$tekst = 'mARiO';
echo 'Tere, '.ucfirst(strtolower($tekst)).' !';
echo '<hr>';

//sisend–>stalker; väljund–>S.T.A.L.K.E.R.
$tekst = 'stalker';
$loetleja = strlen($tekst);
for($i = 0; $i < $loetleja; $i += 1){
    echo strtoupper(substr($tekst, $i, 1) . '.');
}

echo '<hr>';

//sisend–>Sa oled täielik noob; väljund–>Sa oled täielik ***
$tekst = 'Sa oled täielik noob';
$otsi = 'noob';
$asenda = '****';
echo str_replace($otsi, $asenda, $tekst);
echo '<hr>';

//sisend–>Ülle ja Doos; väljund–>ylle.doos@hkhk.edu.ee
$enimi = 'Ülle';
$pnimi = 'Doos';
$otsi = array('ä', 'ö', 'ü', 'õ');
$asenda = array('a', 'o', 'y', 'o');
$enimivaike = str_replace($otsi, $asenda, $enimi);
$pnimivaike = str_replace($otsi, $asenda, $pnimi);

echo strtolower($enimivaike.'.'.$pnimivaike. '@hkhk.edu.ee');