<?php

class Product
{
    private $name;
    private $price;
    private $stock;

    public function increaseStock($units)
    {
        if (is_numeric($units) && $units >= 0)
            $this->stock += $units;
    }

    public function decreaseStock($units)
    {
        if (is_numeric($units) && $units >= 0)
            $this->stock -= $units;
    }

    public function readjustPrice($percent)
    {
        if (is_numeric($percent)  && $percent >= 0)
            $this->price *= (1 + ($percent / 100));
    }
}