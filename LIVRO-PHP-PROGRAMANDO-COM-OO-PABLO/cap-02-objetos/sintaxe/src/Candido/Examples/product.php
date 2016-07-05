<?php

/**
 * Class product
 */
class product
{
    public $description;

    public $stock;

    public $price;

    /**
     * Aumenta o estoque
     *
     * @param $units
     */
    public function increaseStock($units)
    {
        if (is_numeric($units) && $units >= 0)
            $this->stock += $units;
    }

    /**
     * Diminue o estoque
     *
     * @param $units
     */
    public function decreaseStock($units)
    {
        if (is_numeric($units) && $units >= 0)
            $this->stock -= $units;
    }

    /**
     * Reajusta o valor
     *
     * @param $percent
     */
    public function readjustPrice($percent)
    {
        if (is_numeric($percent))
            $this->price *= (1 + ($percent / 100));
    }
}
