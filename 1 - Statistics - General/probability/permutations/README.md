## Algorithms for generating permutations

### About this algorithm (factorial-permutations.pl)

#### Purpose

Knowing the value of nPr does not tell you what the permutations are. This code produces a string of permutations for a range between (a..[b..z]).

#### Practical Applications

With any completed factorial permutation string of non-duplicates, a new one can be created by map-and-replace. See the code on permutations in CodeEval folder.

It takes 8 minutes to calculate the list of permutations for 11! on a Macbook Pro. 

- Generate it once
- Use it by map-and-replace.
	- Example: Use (1-2-3, 1-3-2, 2-1-3, 2-3-1, 3-1-2, 3-2-1) to map the letters of the word h-a-t into their permutations.