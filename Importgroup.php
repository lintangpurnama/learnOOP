<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\{Conflict as Conflict1, Sample, Dummy as Dump};
use Data\two\Conflict;

use function Helper\{helpme};

$conflict = new Conflict1();
$dummy = new Dump();
