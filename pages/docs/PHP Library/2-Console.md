:::warning
Document in **progress**.
:::

## Setup

Inside the composer.json :

```
    "scripts": {
        "tests": "./vendor/prestaflow/php-library/bin/prestaflow run ./Tests"
    },
```

:::info
There, the *./Tests* folder will contain the suites to be tested.
:::

## Run

```bash
composer run tests
```

### Options
#### Stats
#### Output

Available formats :
- Full (full) :
- Compact (compact) :
- JSON (json) :

:::tip
The default value is **full**.
:::

## Output
