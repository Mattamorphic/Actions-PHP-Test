# Action Analyse

This uses composer to analyse the code on push
```
composer run-script analyse
```

Which in composer.json is defined as:
```
vendor/bin/phpstan --level=7 analyse src tests
```
