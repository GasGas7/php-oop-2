<?php class Products
{   
    protected $nameProd;
    protected $descrProd;
    protected $techSpecs;
    protected $inStock;
    protected $price;
    public function __construct($nameProd, $descrProd, $techSpecs, $inStock, $price) {
        $this->nameProd = $nameProd;
        $this->descrProd = $descrProd;
        $this->techSpecs = $techSpecs;
        $this->inStock = $inStock;
        $this->price=$price;
    }

    public function setPrice($price)
    {
        $this->price=$price;
    }
}

$telefono = new Products('Apple Iphone', 'smartphone super', 'superpwr',30,null);
var_dump($telefono);
var_dump($telefono->setPrice(900));
var_dump($telefono);

?> 