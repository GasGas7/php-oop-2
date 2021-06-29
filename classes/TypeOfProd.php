
<?php class TypeOfProducts extends Products
{   

    protected $typeOfProd;
    protected $onSalePrice;
    /**
     * Undocumented function
     *
     * @param string $nameProd
     * @param string $descrProd
     * @param string $techSpecs
     * @param int $inStock
     * @param int $price
     * @param string $typeOfProd
     */
    public function __construct($nameProd, $descrProd, $techSpecs, $inStock, $price, $onSalePrice, $typeOfProd){
        parent::__construct($nameProd, $descrProd, $techSpecs, $inStock, $price);
        $this->typeOfProd = $typeOfProd;
        $this->onSalePrice = $onSalePrice;
    }

    public function setTypeOf($typeOf)
    {
        $this->typeOfProd = $typeOf;
    }

    public function getTypeOf()
    {
        return $this->typeOfProd;
    }

    public function getDiscountByType()
    {
        if($this->typeOfProd == 'Smartphone' && $this->inStock < 10){
            return $this->onSalePrice = $this->price - ($this->price * 5 /100);
        } elseif($this->typeOfProd == 'Computer' && $this->inStock < 5){
            return $this->onSalePrice = $this->price - ($this->price * 10 /100);
        } else {
            return $this->onSalePrice = $this->price;
        }
    }
}

$telefonoDiscount = new TypeOfProducts('Apple Iphone', 'smartphone super', 'superpwr',4 ,null,null,null);
$telefonoDiscount->setTypeOf('Smartphone');
$telefonoDiscount->setPrice(1200);
var_dump($telefonoDiscount);
var_dump($telefonoDiscount->getDiscountByType());
var_dump($telefonoDiscount); ?>
