<?php
$circle = [
			"x" => 6,
			"y" => 4,
			"r" => 10,
];
function circle_colli( $circle, $x, $y){

	$long_x = $circle["x"] - $x;
	$long_y = $circle["y"] - $y;

	$hptnuse_carre = ($long_x * $long_x) + ($long_y * $long_y);
	$hptnuse = sqrt($hptnuse_carre);

	if ($hptnuse < $circle["r"]) {
		return "true";
	}

	return "false";
}

    echo '<pre>' ;
    print_r(circle_colli($circle, 5, 4));
    echo '</pre>';
    echo "<br/>".circle_colli($circle, 10, 7);