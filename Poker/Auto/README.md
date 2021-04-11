## Auto Play and Analysis
I've been aware of programs that calculate statistics of **[texas-holdem.js](https://github.com/wrightben/texas-holdem)** scenarios for about 25 years. Still, computers are faster and languages more accessible, so getting answers to questions about poker scenarios can still be fun. And the programming part is good practice for entry-level statistics and chained processes, and it's a  precursor for things like bots and machine learning.

Once you've created all of the scenarios you can think of, try playing with real cards facing up. See how many times you can predict which hole cards will win any particular hand.

Just 50 years ago, it was almost impossible to know what anybody with O'Reilly Media's [Learning JavaScript](https://www.oreilly.com/library/view/learning-javascript-3rd/9781491914892/) can know today about poker.

<br />

## Poker/Auto

Writing code to learn and auto-play poker.

### To-Do List
- [x] Play n hands: n = 500,000
- Create a list of questions below:
	- [x] Does the winning rank distribution stay the same within a defined hand? No.
		- Example: If you play a pair of 7s, are 30% of its wins as two pair?
		- Example: 6s9s wins more often as a straight or flush.
	- [x] Which hands win most often (when no one folds): Two Pair, 30%
	- [x] Do the best hole cards usually become the winning hand if no one folds? No.
		- [ ] How much "insight" should be used when comparing hole cards to each other or to the shared cards?
			- [ ] Should hole cards be compared to each other using probabilities adjusted by the knowledge of the other hole cards?
	- [ ] Is betting *a language* or is it *maths*?
	- [ ] What attributes are necessary to codify a player?
	- [x] Is it necessary for auto play to have hands fold? No.
	- [x] Is it worthwhile to play the same hand using every player as the dealer. Only if betting is calculated.
		- [ ] How do intermediate likelihoods prevent the "inevitable" winning hand from actually winning?
