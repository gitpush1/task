<?php

namespace classes;
use Interfaces\AnimalInterface;

class CreateChicken extends AnimalManager
{

    function CreateAnimal(): AnimalInterface
    {
        return new Chicken();
    }




}