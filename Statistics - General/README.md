# Statistics - General


## Factorial 9! — Notes on computing
9! = 362,880; This is related to, but not exactly the same as, the list of permutations for the 9-digit string 123456789.

The cached list of permutations is useful for several programming tasks like Sudoku and search-and-replace algorithms for other symbolic permutation output.

I can't generate output several million lines long on my computer in a reasonable time. So the method of 9 nested for-each loops is still the fastest way to get that computed list for 9!. (Counting from 123456789 to 987654321 is so much longer.) The least recursive way is to create the counter-management function that increments each digit.

#### The repetition of nines in the permutation list
I put several of the lists for strings < 9! into excel and noticed an interesting recurring pattern of nines across various sections. I wonder if the pattern is similar in different bases.