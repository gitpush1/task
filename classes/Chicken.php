<?php

namespace classes;

use Interfaces\AnimalInterface;

class Chicken implements AnimalInterface
{

    public function getProduct(): int
    {
        return rand(0,1);
    }
}