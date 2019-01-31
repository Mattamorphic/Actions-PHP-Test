# Actions PHP Test

## Overview
GitHub Actions allows users to implement custom logic (without having to create an app to perform the task). GitHub Actions can be combined to create workflows, using an action defined in a public repository or a published Docker container image. This example uses a base PHP project as an example of the implementation.

## So what the heck does this example do?

The Actions class contains a single static method that can be called to convert a CSV string into a JSON string - which is a fairly routine process.

For instance we can call this like:
```
<?php
require "vendor/autoload.php";

use Mattamorphic\ActionsPHP\Actions as Actions;
$csv = "name,age\nmatt,31";
print_r(Actions::convertCSVToJson($csv));
```

When you trigger a `pull_request` event on this repository the workflow that is triggered runs 3 GitHub actions:

1. Analyse the code against PHP 7 best practices
2. Sniff the code for PSR coding standards
3. Test the code running the unit tests defined in /tests


## Installation
- Clone it
```
$ git clone git@github.com:Mattamorphic/Actions-PHP-Test.git
```

- Install the dependancies using [composer](https://getcomposer.org/)
```
$ composer install
```

## Running the 3 operations locally

```
composer run-script analyse
composer run-script sniff
composer run-script test
```

## Roadmap
- Creating an issue when any of the checks fail with context
