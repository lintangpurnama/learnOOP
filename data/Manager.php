<?php

class Manager
{
    function hello(string $name): void
    {
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
}
