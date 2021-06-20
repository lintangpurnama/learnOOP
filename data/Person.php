<?php

class Person
{
    const AUTHOR = "Lintang Purnama";

    var  $name;
    var  $address;
    var  $country = "indonesia";

    function Hello(?string $name)
    {
        if (is_null($name)) {
            echo "hi myname is $this->name" . PHP_EOL;
        } else {
            echo "hi $name myname is $this->name my address in $this->country" . PHP_EOL;
        }
    }
    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }
}
