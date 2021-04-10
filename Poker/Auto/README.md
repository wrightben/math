## Auto Play and Analysis
I've been aware of poker tools that calculate odds of scenarios for about 25 years. Still, computers are faster and I know how to program now, so getting answers to questions about poker scenarios can still be fun. And the programming part is good practice for entry-level statistics and chained processes, and it's a  precursor for things like bots and machine learning.

Once you've created all of the scenarios you can think of, try playing with all of the cards face up. See how many times you can predict which hole cards will win any particular hand.

A note about computers: Computers are different sizes now. But just 50 years ago, it was essentially impossible to know what any random guy with Learning JavaScript by O'Reilly Media can know today about poker.

<br />

## Poker/Auto

Writing code to learn and auto-play poker.

### To-Do List
- [x] Play n hands: n = 500,000
- Create a list of questions below:
	- [ ] Does the winning distribution stay the same within a defined hand?
		- Example: If you play a pair of 7s, for example, are 30% of its wins as two pair?
	- [x] Which hands win most often (when no one folds): Two Pair, 30% of hands- 
	- [x] Do the best hole cards usually become the winning hand if no one folds? No.
		- [ ] How much "insight" should be used when comparing hole cards to each other or to the shared cards?
			- [ ] Should hole cards be compared to each other using probabilities adjusted by the knowledge of the other hole cards?
	- [ ] Is betting *a language* or is it *maths*?
	- [ ] What attributes are necessary to codify a player?
	- [x] Is it necessary for auto play to have hands fold? No.
	- [x] Is it worthwhile to play the same hand using every player as the dealer. Only if betting is calculated.
		- [ ] How do intermediate likelihoods prevent the "inevitable" winning hand from actually winning?
