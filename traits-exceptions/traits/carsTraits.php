<?php

trait get_method
{
    public function getBrand()
    {
        return $this->brand;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getSegment()
    {
        return $this->segment;
    }
    public function getFuel()
    {
        return $this->fuel;
    }
    public function getHP()
    {
        return $this->horse_power;
    }
    public function getSafety()
    {
        return $this->safety;
    }
    public function getPrice()
    {
        return $this->price;
    }
}

trait SET_GET_price
{   
    /**
     * Undocumented function
     *
     * @param integer $price
     * @return integer
     */
    public function setFuel($fuel)
    {   
        if($fuel != "Electric")
        {
            throw new Exception("Queste auto sono Elettriche, non a Benzina");
        }
        $this->fuel = $fuel;
        return $this->fuel;
    }
}
