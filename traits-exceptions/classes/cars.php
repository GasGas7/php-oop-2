<?php

class Cars
{   
    protected $brand;
    protected $model;
    protected $segment;
    protected $fuel;
    protected $safety_star;

    public function __construct($brand, $model, $segment,$fuel, $safety_star)
    {      
        $this->brand = $brand;
        $this->model =$model;
        $this->segment = $segment;
        $this->fuel = $fuel;
        $this->safety_star = $safety_star;
    }

    public function setBrand($brand)
    {   
        if(!is_string($brand))
        {
            throw new Exception("Can't find the brand...");
        }
        $this->brand = $brand;
        return $this->brand;
    }
}

