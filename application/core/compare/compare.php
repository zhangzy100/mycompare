<?php
function Min3($a, $b, $c) {
	$d = $a > $b ? $b : $a;
	return $d > $c ? $c : $d;
}
function ComputeDistance($s, $t) {
	$n = strlen ( $s );
	$m = strlen ( $t );
	$distance = array ();
	// matrix
	$cost = 0;
	if ($n == 0)
		return $m;
	if ($m == 0)
		return $n;
		// init1
	for($i = 0; $i <= $n; $distance [$i] [0] = $i ++)
		;
	for($j = 0; $j <= $m; $distance [0] [$j] = $j ++)
		;
	
	var_dump ( $distance );
	
	// find min distance
	for($i = 1; $i <= $n; $i ++) {
		for($j = 1; $j <= $m; $j ++) {
			$cost = (substr ( $t, $j - 1, 1 ) == substr ( $s, $i - 1, 1 ) ? 0 : 1);
			$distance [$i] [$j] = Min3 ( $distance [$i - 1] [$j] + 1, $distance [$i] [$j - 1] + 1, $distance [$i - 1] [$j - 1] + $cost );
		}
	}
	return $distance [$n] [$m];
}

	
	