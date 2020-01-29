<?php
$tekst = 'Life Is About Ignoring The Drama.';

echo strtolower($tekst);
echo '<br>';
echo strtoupper($tekst);
echo '<br>';

$tekst = 'Life Is About Ignoring The Drama.';
echo ucfirst(strtolower($tekst));
echo '<br>';

$tekst = 'Experience is the teacher of fools';
echo strlen($tekst);			//34
echo '<br>';
echo str_word_count($tekst);	//6
echo '<br>';

$tekst = ' 	A woman should soften but not weaken a man   ';
echo "<pre>$tekst</pre>";
echo "<pre>".trim($tekst)."</pre>";
echo "<pre>".ltrim($tekst)."</pre>";
echo "<pre>".rtrim($tekst)."</pre>";
echo '<br>';

$tekst = 'A woman should soften but not weaken a man';
echo trim($tekst, "A, a, k..n, w");	//oman should soften but not weake
echo '<br>';

$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst); 	//Experience is the teacher of fools
echo '<br>';

$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst, '<b>, <br>'); 	//<b>Experience</b> is the teacher <br>of fools
echo '<br>';

$tekst = 'All thinking men are atheists';
echo $tekst[0]; 				//A
echo '<br>';
echo $tekst[4]; 				//t
echo '<br>';

$tekst = 'All thinking men are atheists';
echo substr($tekst, 3, 5);		//thin
echo '<br>';
echo substr($tekst, 4, -13);	//thinking men
echo '<br>';
echo substr($tekst, -8, 7);		//atheist
echo '<br>';

$tekst = 'All thinking men are atheists';
print_r(str_word_count($tekst, 1));		//Array ( [0] => All [1] => thinking [2] => men [3] => are [4] => atheists )
echo '<br>';

$tekst = 'All thinking men are atheists';
$sona = str_word_count($tekst, 1);
echo $sona[2];							//men
echo '<br>';

$tekst = 'All thinking men are atheists';
print_r(str_word_count($tekst, 2));
//Array ( [0] => All [4] => thinking [13] => men [17] => are [21] => atheists )
echo '<br>';

$tekst = 'Happiness in intelligent people is the rarest thing I know.';
$otsitav = 'in';
$leia_tekstist = strpos($tekst, $otsitav, 0);	//4
$leia_tekstist = strpos($tekst, $otsitav, 6);	//10
echo $leia_tekstist;
echo '<hr>';

$tekst = 'Happiness in intelligent people is the rarest thing I know.';
$otsitav = 'in';
$nihe = 0;
while($leia_tekstist = strpos($tekst, $otsitav, $nihe)){	//4 10 13 48
    echo $leia_tekstist.'<br>';
    $nihe = $leia_tekstist+strlen($otsitav);
}
echo '<hr>';

$tekst = 'Pai papa, pane paadile punased purjed peale';
$asendus = 'emme';
$otsitav_algus = 4;
$otsitav_pikkus = 4;
echo substr_replace($tekst, $asendus, $otsitav_algus, $otsitav_pikkus);
echo '<hr>';

$tekst = 'Pai papa, pane paadile punased purjed peale';
$asendus = 'emme';
$otsitav = 'papa';
$nihe = 0;
$asenduse_algus = strpos($tekst, $otsitav, $nihe);
$asenduse_markide_arv = strlen($otsitav);
echo substr_replace($tekst, $asendus, $asenduse_algus, $asenduse_markide_arv);
echo '<hr>';

$tekst = 'Musta lehma saba musta lehma taga, valge lehma saba valge lehma taga';
$otsi = 'lehm';
$asenda = 'koer';
echo str_replace($otsi, $asenda, $tekst);
echo '<hr>';

$tekst = 'Musta lehma saba musta lehma taga, valge lehma saba valge lehma taga';
$otsi = array('lehm', 'saba', 'taga');
$asenda = array('koer', 'sarv', 'ees');
echo str_replace($otsi, $asenda, $tekst);
