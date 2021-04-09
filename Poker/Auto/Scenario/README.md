# Summary

Insights (Analyses) — calculations, comparisons, and statistics based on relative data (betting, samples, and so on). 

See [/math/Poker/Auto/Insights/scenarios](https://github.com/wrightben/math/tree/master/Poker/Auto/Insights) for examples. 

### Use

1. Create a scenario by configuring texas-holdem.js
2. Place /Scenario adjacent to texas-holdem.js
3. Run scenario.sh as shown below

```
cd Scenario
./scenario.sh
```

## Files

- **scenario.sh** — Executes the scripts below for a scenario defined by texas-holdem.js
	- No need to manually run the scripts below
- **poker.sh** — Creates 1,000 6-person hands using **[texas-holdem.js](https://github.com/wrightben/texas-holdem)**; Configurable
- **distribution.php** — Provides Rank and Position distribution for winning hand in scenarios
