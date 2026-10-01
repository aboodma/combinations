# combinations

Generate the Cartesian product of named sets of values with
`Aboodma\Combinations\Combinations::makeCombinations()`.
Each result contains one value from each set, which is useful for building product
variants such as colors and sizes.

## Standalone usage

The package declares PHP 8.1 or later in [composer.json](composer.json).
To try the core class directly from this repository, save the following as
`example.php` in the repository root and run `php example.php`:

```php
<?php

require __DIR__ . '/src/Combinations.php';

use Aboodma\Combinations\Combinations;

$variants = Combinations::makeCombinations([
    'color' => ['red', 'blue'],
    'size' => ['S', 'M'],
]);

print_r($variants);
```

The returned array is:

```php
[
    ['color' => 'red', 'size' => 'S'],
    ['color' => 'red', 'size' => 'M'],
    ['color' => 'blue', 'size' => 'S'],
    ['color' => 'blue', 'size' => 'M'],
]
```

This example loads only the core class; it does not require Laravel or Composer
autoloading.

## Input behavior and result size

Pass an associative array of property names, each containing an array of possible
values. String property names such as `color` and `size` are preserved in each
result. Numeric property keys are reindexed by the implementation's `array_merge()`
calls, so use string keys when property names matter.

- With no properties, `makeCombinations([])` returns `[[]]`: one empty combination.
- If any property has no values, the result is `[]`.
- Duplicate input values produce duplicate combinations; values are not deduplicated.
- Results follow input iteration order, with the last property's values changing fastest.

All combinations are built in memory. The result count is the product of the
number of values for each property: 3 colors and 4 sizes produce 12 combinations.
Keep input sets small enough for the resulting array to fit in memory.
