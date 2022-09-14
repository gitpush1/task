<?php

namespace classes;
use Interfaces\AnimalInterface;

class CreateCow extends AnimalManager
{
    function CreateAnimal(): AnimalInterface
    {
        return new Cow();
    }
}