<?php

// exercice  1
	$life = 0;
	$force = 100;

	while ($life<$force) 
	{
		echo  ++$life ."\n"; // retour à la ligne dans le fichier mettre des doubles côtes
	}

// exercice 2
// 15 / 2 = 7 reste 1 15 = 7*2 + 1 <- modulo 2

if (0) echo "zéro"; else echo "faux";
if (1) echo "un"; else echo "faux";

while ($force) {

	if($force % 2 == 1) echo $force ;

	$force--;
}
// exercice 3 

$force = 0;
$dayEnd = 24 * 60 * 60 ; // paquet de secondes d'une journée
$time = 0 ;

while($time < $dayEnd)
{
	$time++;
	if($time % 3 == 0) {
		$force += 5 ;
	}
}

echo '<pre>' ;
print_r($force);
echo '</pre>';

// exercice 4 
function inverse_str($string)
{
	$len = strlen($string);

	$inv = '' ;

	while($len != 0 )
	{
		$inv .= $string[$len -1] ;
		$len--;

	}

	return $inv;

}

    echo '<pre>' ;
    print_r(inverse_str('Engage le jeu que je le gagne'));
    echo '</pre>';

// exercice 5

function gen_num_alea($length,$interval){
$result = 0;
for ($i=0; $i <$length ; $i++) { 
	if ($i = $length-1) {
		$result += pow(10,$i)*mt_rand(1,$interval);
	}else{
		$result += pow(10,$i)*mt_rand(0,$interval);
		}
	}
	echo $result;
}
gen_num_alea(3,500);

// exercice 6
$cartes = ['c1', 'c2', 'c3', 'c4', 'c5', 'c6', 'c7', 'c8', 'c9', 'c10', 'c11', 'c12', 'c13', 'c14', 'c15','c16', 'c17', 'c18', 'c19', 'c20'];

function tirage_alea($array, $num){
	$result = [];
	$index_array = array_rand($array, $num);

	for ($i=0; $i < count($index_array); $i++) {
	 	$index = $index_array[$i];
		$result[] = $array[$index];
	}

	return $result;
}

echo '<pre>' ;
print_r(tirage_alea($cartes, 2));
echo '</pre>';


// exercice 7

function calcul_time()
{
	$time = time();

	$min = (int) ($time / 60);

	$secondes = $time % 60;

	$h = (int) ($min / 60);
	$min = 0;
}
// exercice 11.1

$list = [1, 7, 45, 2, 100, 548, 21, 18, 180];

function is_in_array($value, $list){
	$one_list = [];

	for ($i=0; $i < count($list) ; $i++) { 

		if($value == $list[$i] ) return true;

	}
	return $one_list;
}

echo '<pre>' ;
print_r(is_in_array(2, $list));
echo '</pre>';

// exercice 11.2

$list = [1, 7, 45, 2, 100, 548, 21, 18, 180];

function get_higher( $list)
{
	$big_list = 0;

	for ($i=0; $i < count($list); $i++) { 
		if ($list[$i] > $big_list) $big_list = $list[$i];
	}
	return $big_list;
}

echo '<pre>' ;
print_r(get_higher($list));
echo '</pre>';

// exercice 11.3

$list = [1, 7, 45, 2, 100, 548, 21, 18, 180];

function median($list){
	if (empty($list)) throw new Exception('array empty');
	sort($list);
	
	$len = count($list);
	$median_list = 0;
	if($len % 2 == 1 ) {
		$median = ($len - 1)/2;
		$median_list = $list[$median];
	}
	if ($len % 2 == 0) {
		$median = $len/2;
		$median_list = ($list[$median-1]+ $list[$median])/2;
	}
	return $median_list;
}
try{	
	echo '<pre>' ;
	print_r(median($list));
	echo '</pre>';
}  catch (Exception $e){
	echo '<pre>' ;
	print_r($e->getMessage());
	echo '</pre>';
}
// exercice 11.4

function get_nb_string($question, $nb){
    $cpt = 0;
    for ($i=0; $i < count($question); $i++) { 
        if(strlen($question[$i]) >= $nb) $cpt++;
    }
        return $cpt;
}