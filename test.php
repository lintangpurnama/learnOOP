<?php

class Manusia
{
    var  $name;
    var  $address;
    var  $negara;

    function Nama(?string $name)
    {
        if (is_null($name)) {
            echo " $this->name makan nasi" . PHP_EOL;
        } else {
            echo "$this->name makan nasi yang berumah di $this->address" . PHP_EOL;
        }
    }
}
