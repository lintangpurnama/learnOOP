<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Lintang";
$person->Hello('lintang');
$person->address = "indonesia";

$joko = new Person();
$joko->name = "joko";
$joko->Hello(null);

$joko->info();
