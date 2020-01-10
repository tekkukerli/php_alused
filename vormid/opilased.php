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
echo '<hr>';

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
echo '<hr>';

$jaana = array(  //seos asjade vahel, assotsiatsioon
    'eesnimi' => 'Jaana', //koosneb elementidest
    'perenimi' => 'Šeffer'
);
echo '<pre>'; //preformatted text
print_r($jaana);
echo '</pre>';

foreach ($jaana as $element => $vaartus){
    echo $element.' - '.$vaartus.'<br>';
}
echo '<hr>';

$opilased = array(
    array(
    'eesnimi' => 'Jaana',
    'perenimi' => 'Šeffer'
),
    array(
        'eesnimi' => 'Kerli',
        'perenimi' => 'Tekku'
    ),
    array(
        'eesnimi' => 'Anne-Mari',
        'perenimi' => 'Eensaar'
    )
);

foreach ($opilased as $opilane){
    foreach ($opilane as $element => $vaartus){
        echo $element.' - '.$vaartus.'<br>';
    }
    echo '<br>';
}
echo '<hr>';

echo $opilased[1]['perenimi'];
