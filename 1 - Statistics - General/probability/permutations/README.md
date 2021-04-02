## Factorial permutations

### Files
- **factorial-permutations.pl**
- **for-each-loop-builder.numbers** - Shortcuts for the typing of **factorial-permutations.pl**

#### Purpose

Knowing the value of nPr does not tell you what the permutations are. This code produces a string of permutations for a range between (a..[b..z]).

#### Practical Applications

It takes 8 minutes to calculate the list of permutations for ( a .. (a..z)[10] ) on a Macbook Pro. 

- Generate it once
- Use it by map-and-replace.
	- Example: Use (1-2-3, 1-3-2, 2-1-3, 2-3-1, 3-1-2, 3-2-1) to map the letters of the word h-a-t into their permutations.