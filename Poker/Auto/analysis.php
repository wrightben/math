<?php
	
	
	$line = '[[3],[{"rank":5,"label":"Straight","value":[9],"cards":[28,44,32,22,21,29,7],"faceValues":["3s","6c","7s","Td","9d","4s","8h"],"straight":9,"suit":-1,"flush":-1,"groups":{"nominals":[[],[],[28],[29],[],[44],[32],[7],[21],[22],[],[],[]],"suits":[[7],[22,21],[28,32,29],[44]],"collections":[[2,3,5,6,7,8,9],[],[],[]]},"position":3},{"rank":3,"label":"Two Pair","value":[9,3,6],"cards":[6,42,32,22,21,29,7],"faceValues":["7h","4c","7s","Td","9d","4s","8h"],"straight":-1,"suit":-1,"flush":-1,"groups":{"nominals":[[],[],[],[42,29],[],[],[6,32],[7],[21],[22],[],[],[]],"suits":[[6,7],[22,21],[32,29],[42]],"collections":[[7,8,9],[3,6],[],[]]},"position":0},{"rank":2,"label":"One Pair","value":[7,8,13,9],"cards":[0,9,32,22,21,29,7],"faceValues":["Ah","Th","7s","Td","9d","4s","8h"],"straight":-1,"suit":-1,"flush":-1,"groups":{"nominals":[[0],[],[],[29],[],[],[32],[7],[21],[9,22],[],[],[]],"suits":[[0,9,7],[22,21],[32,29],[]],"collections":[[3,6,7,8,13],[9],[],[]]},"position":4},{"rank":2,"label":"One Pair","value":[6,7,9,8],"cards":[41,47,32,22,21,29,7],"faceValues":["3c","9c","7s","Td","9d","4s","8h"],"straight":-1,"suit":-1,"flush":-1,"groups":{"nominals":[[],[],[41],[29],[],[],[32],[7],[47,21],[22],[],[],[]],"suits":[[7],[22,21],[32,29],[41,47]],"collections":[[2,3,6,7,9],[8],[],[]]},"position":2},{"rank":2,"label":"One Pair","value":[6,7,9,8],"cards":[1,8,32,22,21,29,7],"faceValues":["2h","9h","7s","Td","9d","4s","8h"],"straight":-1,"suit":-1,"flush":-1,"groups":{"nominals":[[],[1],[],[29],[],[],[32],[7],[8,21],[22],[],[],[]],"suits":[[1,8,7],[22,21],[32,29],[]],"collections":[[1,3,6,7,9],[8],[],[]]},"position":5},{"rank":2,"label":"One Pair","value":[8,9,12,6],"cards":[19,38,32,22,21,29,7],"faceValues":["7d","Ks","7s","Td","9d","4s","8h"],"straight":-1,"suit":-1,"flush":-1,"groups":{"nominals":[[],[],[],[29],[],[],[19,32],[7],[21],[22],[],[],[38]],"suits":[[7],[19,22,21],[38,32,29],[]],"collections":[[3,7,8,9,12],[6],[],[]]},"position":1}]]';
	
// 	if ( isset( $argv[1] ) ) {
// 		$line = $argv[1]; // READ FROM COMMAND LINE IF AVAILABLE
// 	}

forEachLine("hands 2.txt");



function processHandStat($line) {

	$hand = json_decode($line);
	
	$count = count($hand[0]);
	
	if ($count == 1) {
		$best = $hand[1][0]; // best hand, already decoded
		$rank = $best->rank;
		$label = $best->label;
		$hole1 = $best->cards[0];
		$hole2 = $best->cards[1];
	} else {
		return 0;
	}
	
	
	
	// HOLE CARD TESTS
	// ✓ Is there a high card? (Arbitrarily, 9 or higher)
	// ✓ Is there a Q,K,A?
	// ✓ Are they suited?
	// ✓ Are they threatening a straight?
	// ? Are they the "best" hole cards?
	// 	? Do the best hole cards usually win?
	// ? Are there unknown attributes defining "good" hole cards?
	
	$nominals = [
		0,	1,	2,	3,	4,	5,	6,	7,	8,	9,	10,	11,	12, 	// ] nominals
		0,	1,	2,	3,	4,	5,	6,	7,	8,	9,	10,	11,	12,
		0,	1,	2,	3,	4,	5,	6,	7,	8,	9,	10,	11,	12,
		0,	1,	2,	3,	4,	5,	6,	7,	8,	9,	10,	11,	12

// Ordinals		
// 		13,	14,	15,	16,	17,	18,	19,	20,	21,	22,	23,	24,	25,		
// 		26,	27,	28,	29,	30,	31,	32,	33,	34,	35,	36,	37,	38,		
// 		39,	40,	41,	42,	43,	44,	45,	46,	47,	48,	49,	50,	51	

//		A	2	3	4	5	6	7	8	9	10	J	Q	K	A
	];	
	
	$n1 = $nominals[$hole1];
	$n2 = $nominals[$hole2];
	
	
	$high = 0;
	if ( ($n1 > 7) || ($n2 > 7) || ($n1 % 13 == 0) || ($n2 % 13 == 0)  ) {
		$high = 1;
	}
	
	$face = 0;
	if ( ($n1 > 10) || ($n2 > 10) || ($n1 % 13 == 0) || ($n2 % 13 == 0)  ) {
		$face = 1;
	}
	
	$straight = 0;
	if ( abs($n1 - $n2) <= 4 ) {
		$straight = 1;
	}
	
	$suited = 0;
	if ( floor($hole1 / 13) == floor($hole2 / 13) ) {
		$suited = 1;
	}



	// ECHO SUMMARY
	$n1 += 1;
	$n2 += 1;
	echo "INSERT INTO \"poker\" (\"id\",\"hole1\",\"nominal1\",\"hole2\",\"nominal2\",\"high_card\",\"face_card\",\"straight\",\"suited\",\"notes\") VALUES (NULL,'$hole1','$n1','$hole2','$n2','$high','$face','$straight','$suited',null);", "\n";
	

	
}


function forEachLine($fh) {
	$fn = fopen( $fh ,"r");

	while(! feof($fn))  {
		$line = fgets($fn);
		processHandStat($line);
	}

	fclose($fn);
}

?>