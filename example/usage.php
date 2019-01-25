<?php
require "vendor/autoload.php";

use Mattamorphic\ActionsPHP\Actions as Actions;
$csv = "name,age\nmatt,31";
print_r(Actions::convertCSVToJson($csv));
