<?php
$vso19 = array(
    'Anne-Mari',
    'Andre',
    'Rene',
    'Martin',
    'Mairit',
    'Erko',
    'Kerli',
    'Hanna-Liisa',
    'Jaana'
);
echo $vso19[0].'<br>';
echo $vso19[6].'<br>';

$opilasteArv = count($vso19);
echo 'VSo19 rühmas on ' .$opilasteArv.' õpilasi<br>';
echo 'Need on:<br>';
for($i = 0; $i < $opilasteArv; $i++) {
    echo $vso19[$i].'<br>';
}
echo '<hr>';
foreach ($vso19 as $opilane){
    echo $opilane.'<br>';
}