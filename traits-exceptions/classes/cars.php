<?php

class Cars
{   
    protected $brand;
    protected $model;
    protected $segment;
    protected $price;
    protected $horse_power;
    protected $fuel;
    protected $safety_star;

    public function __construct($brand, $model, $segment,$price, $horse_power, $fuel, $safety_star)
    {      
        $this->brand = $brand;
        $this->model =$model;
        $this->segment = $segment;
        $this->price->$price;
        $this->horse_power = $horse_power;
        $this->fuel = $fuel;
        $this->safety_star = $safety_star;
    }
}

