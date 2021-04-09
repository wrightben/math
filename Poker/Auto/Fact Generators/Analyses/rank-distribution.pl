#!/usr/bin/perl

@contents = (<STDIN>);
chomp @contents;

@rank = ( 0,0,0,0,0,0,0,0,0,0 );
foreach $line (@contents) {
	$line =~ /"rank":(\d+?)/;
	$rank[$1 - 1] += 1;
}

print join "\n", @rank;