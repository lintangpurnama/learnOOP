<?php

require_once "data/Person.php";

$person = new Person();

$person->name = "Lintang";
$person->address = "Jakarta";
$person->country;
var_dump($person);
echo "Name : $person->name" . PHP_EOL;
echo "addres : $person->address" . PHP_EOL;
echo "country : $person->country" . PHP_EOL;
