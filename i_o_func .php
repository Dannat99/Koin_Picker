<?php

function i1_fn() {
	return file('i1.txt');
}

function unite($a,$b) {
	for ($i=0; $i<count($a); $i++) { 
		
		fwrite(fopen('result.txt', 'a'), " $a[$i]=>$b[$i]\n");

	}
}

?>
