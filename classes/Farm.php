<?php

namespace classes;

class Farm
{
    private array $cows;
    private array $chickens;
    private int $productCountCow = 0;
    private int $productCountChicken = 0;
    private int $productCountAllAnimals = 0;
    private const WEEK_COUNT_DAY = 7;


    function __construct(array $cows, array $chickens)
    {
        $this->cows = $cows;
        $this->chickens = $chickens;
    }


    public function countTypeAnimals(): string
    {
        return "Кол-во коров на ферме: " . count($this->cows) . " " .
            "Кол-во кур на ферме: " . count($this->chickens) . PHP_EOL;
    }


    public function getProductAllAnimal(): string
    {
        for ($i = 1; $i <= self::WEEK_COUNT_DAY; $i++){
            $this->getProductsCow();
            $this->getProductsChicken();
        }

        $result = "общее кол-во собранных за неделю яиц: $this->productCountChicken шт., молока: $this->productCountCow л." . PHP_EOL;
        $this->productCountCow = 0;
        $this->productCountChicken = 0;

        return $result;
    }


    public function addCow(array $cows): void
    {
        $this->cows = array_merge($this->cows, $cows);
    }

    public function addChicken(array $chickens): void
    {
        $this->chickens = array_merge($this->chickens, $chickens);
    }


    private function getProductsCow(): void
    {
        $cows = $this->cows;

        foreach ($cows as $cow){
           $this->productCountCow += $cow->getProduct();
        }
    }


    private function getProductsChicken(): void
    {
        $chickens = $this->chickens;

        foreach ($chickens as $chicken){
            $this->productCountChicken += $chicken->getProduct();
        }
    }

}