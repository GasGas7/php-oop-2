<?php

trait get_brand_model
{
    public function getBrand()
    {
        return $this->brand;
    }
    public function getModel()
    {
        return $this->model;
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
    public function setPrice($price)
    {
        $this->price = $price;
        return $this->price;
    }
}
