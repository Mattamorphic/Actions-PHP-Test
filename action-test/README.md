# Action Test

This uses composer to run the unit tests on push
```
composer run-script test
```

Which in composer.json is defined as:
```
vendor/bin/phpunit tests/
```
