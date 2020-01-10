<?php
echo "<h1>Tellimine</h1>";
//lisab vormist saadud andmed muutujasse
$toode1 = $_GET['t1'];
$toode2 = $_GET['t2'];
$toode3 = $_GET['t3'];
echo 'Toode 1: '.$toode1.'tk<br>';
echo 'Toode 2: '.$toode2.'tk<br>';
echo 'Toode 3: '.$toode3.'tk<br>';



echo "<h1>Kera ruumala</h1>";
$raadius = $_GET['r']; //viitab nimele mitte id
$diameeter = $raadius*2;
$pindala = pi()*$diameeter*$diameeter;
$ruumala = 4/3*3.14*$raadius*$raadius*$raadius;
echo '<br>';
echo 'Kera ruumala on: '.$ruumala.' m3<br>';



echo "<h1>Koonuse ruumala</h1>";
$pohja_raadius = $_GET['kr'];
$korgus = $_GET['ko'];
$r2 = $pohja_raadius*$pohja_raadius;
$kruumala = 1/3*pi()*$r2*$korgus;
echo '<br>';
echo 'Koonuse ruumala on: '.$kruumala.' m3<br>';



echo "<h1>Silindri ruumala</h1>";
$sraadius = $_GET['sr'];
$skorgus = $_GET['sk'];
$r2raadius = $sraadius*$sraadius;
$sruumala =pi()*$r2raadius*$skorgus;
echo '<br>';
echo 'Koonuse ruumala on: '.$sruumala.' m3<br>';

//  <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>"