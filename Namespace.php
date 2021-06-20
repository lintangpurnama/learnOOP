<?php

use Data\one\Conflict;

require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict = new Data\one\Conflict();
$conflict = new Data\two\Conflict();

echo Helper\APPLICATION . PHP_EOL;
Helper\helpme();
