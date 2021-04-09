#!/bin/bash
if test -f "hands.txt"; then
   rm hands.txt
fi
sh ./poker.sh

if test -f "../distribution.csv"; then
   rm ../distribution.csv
fi
php ./distribution.php > ../distribution.csv
