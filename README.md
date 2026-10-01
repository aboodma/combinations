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

