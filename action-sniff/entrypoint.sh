#!/bin/sh -l
sh -c "echo $1"

composer install
composer run-script sniff
