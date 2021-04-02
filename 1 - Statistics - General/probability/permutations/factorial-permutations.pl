#!/usr/bin/perl


$counter = 0;

$l = (a..z)[0];
$h = (a..z)[10]; # 0-based. (= #LOOPS -1)

foreach $1 (${l}..${h}) { 	

foreach $2 (${l}..${h}) { if (
($2 ne $1)	) {

foreach $3 (${l}..${h}) { if (
($3 ne $1)	&& 
($3 ne $2)	) {

foreach $4 (${l}..${h}) { if (
($4 ne $1)	&&
($4 ne $2)	&&
($4 ne $3)	) {

foreach $5 (${l}..${h}) { if (
($5 ne $1)	&&
($5 ne $2)	&&
($5 ne $3)	&&
($5 ne $4)	) {
	
foreach $6 (${l}..${h}) { if (
($6 ne $1)	&&
($6 ne $2)	&&
($6 ne $3)	&&
($6 ne $4)	&&
($6 ne $5)	) {

foreach $7 (${l}..${h}) { if (
($7 ne $1)	&&
($7 ne $2)	&&
($7 ne $3)	&&
($7 ne $4)	&&
($7 ne $5)	&&
($7 ne $6)	) {

foreach $8 (${l}..${h}) { if (
($8 ne $1)	&&
($8 ne $2)	&&
($8 ne $3)	&&
($8 ne $4)	&&
($8 ne $5)	&&
($8 ne $6)	&&
($8 ne $7)	) {

foreach $9 (${l}..${h}) { if (
($9 ne $1)	&&
($9 ne $2)	&&
($9 ne $3)	&&
($9 ne $4)	&&
($9 ne $5)	&&
($9 ne $6)	&&
($9 ne $7)	&&
($9 ne $8)	) {

foreach $10 (${l}..${h}) { if (
($10 ne $1)	&&
($10 ne $2)	&&
($10 ne $3)	&&
($10 ne $4)	&&
($10 ne $5)	&&
($10 ne $6)	&&
($10 ne $7)	&&
($10 ne $8)	&&
($10 ne $9)	) {

foreach $11 (${l}..${h}) { if (
($11 ne $1)	&&
($11 ne $2)	&&
($11 ne $3)	&&
($11 ne $4)	&&
($11 ne $5)	&&
($11 ne $6)	&&
($11 ne $7)	&&
($11 ne $8)	&&
($11 ne $9)	&&
($11 ne $10)	) {

		$counter ++;
		print ( $counter, " - ", "{$1 $2 $3 $4 $5 $6 $7 $8 $9 $10 $11}", "\n");

# IFS (= #LOOPS -1)	
}
}
}
}
}
}
}
}
}
}

# LOOPS (= highest for-each loop number)
}
}
}
}
}
}
}
}
}
}
}