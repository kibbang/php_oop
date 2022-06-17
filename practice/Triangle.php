<?php

class Triangle
{
    private float $base;
    private float $height;

    public function __construct(float $base, float $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    /**
     * @param float $base
     */
    public function setBase(float $base): void
    {
        $this->base = $base;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function getArea(): float
    {
        return ($this->base * $this->height) / 2;
    }
}

$obj1 = new Triangle(30, 5);
echo "넓이: ".$obj1->getArea()."\n";
$obj1->setBase(14);
$obj1->setHeight(10);
echo "넓이: ".$obj1->getArea()."\n";
