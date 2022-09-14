<?php


namespace classes;

use Interfaces\AnimalInterface;

abstract class AnimalManager
{
    private int $countCreateObject;
    private array $countReadyObject = [];


    function __construct(int $count = 1)
    {
        $this->countCreateObject = $count;
    }


    abstract function CreateAnimal(): AnimalInterface;


    public function getAnimals(): array
    {
        for ($i = 1; $i <= $this->countCreateObject; $i++){
            $this->countReadyObject[] = $this->CreateAnimal();
        }

        return $this->countReadyObject;

    }

    public function updateCountAnimals($count = 1): array
    {
        $this->countReadyObject = [];

        for ($i = 1; $i <= $count; $i++){
            $this->countReadyObject[] = $this->CreateAnimal();
        }

        return $this->countReadyObject;

    }

}