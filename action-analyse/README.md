# Action Analyse

This uses composer to sniff the code ensuring it meets PSR coding standards on push:
```
composer run-script analyse
```

Which in composer.json is defined as:
```
vendor/bin/phpcs src tests
```
