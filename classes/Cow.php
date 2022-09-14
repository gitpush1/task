<?php

namespace classes;

use Interfaces\AnimalInterface;

class Cow implements AnimalInterface
{
    public function getProduct(): int
    {
        return rand(8,12);
    }
}