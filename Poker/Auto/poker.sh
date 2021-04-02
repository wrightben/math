#!/bin/bash
COUNTER=500000
until [  $COUNTER -lt 1 ]; do
	let COUNTER-=1
	echo COUNTER $COUNTER
	node texas-holdem.js  >> ~/Desktop/hands.txt
done