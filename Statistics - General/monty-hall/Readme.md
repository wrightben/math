# Monty Hall

## Game
There are 3 doors. A contestant is offered a choice: pick a door. Once the contestant has chosen a door, one of the non-chosen doors is removed. Then the contestant is offered a second choice: pick the previously chosen door or the other remaining door.

The situation after the first choice is persuasively conveyed by a natural perception of equity. Think of the game show as another person. If you, as the contestant, choose a door with your first choice, the other person then has two doors. It should be immediately obvious that the other person has a better chance of winning whatever prize may be behind the doors.

Then a door is removed.

The other person, with two doors, always has at least one door without a prize, and removing it reduces his doors from two to one. And doing so creates the appearance of 1:1 odds against the contestant, **incorrectly** equalizing the contestant's perception of inferior equity. However, the likelihood created by the contestant's initial choice is unchanged. It's as if the other person still has two doors and a 2-in-3 likelihood of having the door with a prize.

Then the second choice: pick either the previously chosen door or the other person's remaining door.

### Choices

**Choice**: Select door 1, 2, or 3

Contestant — Door 1 (33% chance of prize)<br />
Other person — Door 2 and Door 3 (66% chance of prize)

**Then**: Either door 2 or door 3 MUST NOT have the prize, so remove either door that does not.

**Choice**: Select either the previously chosen door or the other person's remaining door.

### Strategy
Statistically, the best strategy is to choose a door and then claim the other person's two doors with the second choice.

Whatever one believes, the second choice has odds of either 1:1 or 1:2. Both are consistent with the suggested strategy. Choosing the other person's door is always sensible.

So here are interesting questions:
- Why did I react the way I did when it was suggested that I could *improve* my odds by following the suggested strategy? In fact, that's what made the problem so interesting: The stubborn belief that it was not possible to do any better.
- 

<br />

## Computers

Computers (and the basic math they do) say the choose-and-swap strategy wins two-thirds, or 66%, of the time.