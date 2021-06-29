<?php

class Cupra extends Cars
{   

    use get_method, SET_GET_price;
    protected $brand;
    protected $model;
    protected $price;

    public function __construct($segment, $horse_power, $fuel, $safety_star, $brand, $model, $price)
    {
        $this->segment = $segment;
        $this->horse_power = $horse_power;
        $this->fuel = $fuel;
        $this->safety_star = $safety_star;
        $this->brand = $brand;
        $this->price = $price;
        $this->model = $model;
    }

}

$carOne = new Cupra("Sport SUV",310 , "Electric", 5, "CUPRA", "Formentor", 32000);

#var_dump($carOne);

?>

