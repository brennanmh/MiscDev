<?php

// I chose to limit the rand amounts to 0-100. 0 randmax() was a little absurd.

function moneyin() {

	$mi = rand(0, 100);
	// $mi = 50; // test the rare occurance
	print "You gave \$$mi, ";
	return $mi;

}

function itemcost() {

	$ic = rand(0, 100);
	// $ic = 50; // test the rare occurance
	print "Your item costs \$$ic, ";
	return $ic;

}

function changeback($mi, $ic) {

	$cb = $mi - $ic;
	
	if ($cb < 0) {
		print "You didn't put in enough money, please add \$" . (-1 * $cb) . ".";
	} else if ($cb == 0) {
		print "You put in the exact amount, you get no change.";
	} else {
		print "You put in more than needed, you get \$" . $cb . " back";
    }
    
    return $cb;

}

$itemcost = itemcost();
$moneyin = moneyin();
$changeback = changeback($moneyin, $itemcost);

