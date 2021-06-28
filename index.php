<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.

Strutturare le classi gestendo l'ereditarietà dove necessario; 

ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.

Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...

$c = new CreditCard(..); 
$user->insertCreditCard($c); -->


<?php 

class Users 
{
    protected $name;
    protected $lastname;
    protected $email;
    protected $address;
    protected $phoneNumber;
    protected $paymeantMethod;
    protected $userVip;

    public function __construct($name,$lastname,$email,$address,$phoneNumber,$paymeantMethod,$userVip) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->paymeantMethod = $paymeantMethod;
        $this->userVip = $userVip;
    }

    /**
     * ## Set the name
     *
     * @param string $name
     * @return string
     */
    public function setName($name)
    {
        return $this->name = $name;
    }

    /**
     * Get the name
     *
     * @return void
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Undocumented function
     *
     * @return boolean userVip
     */
    public function getUserVip(){
        return $this->userVip;
    }
}

class Products
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



class TypeOfProducts extends Products
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
var_dump($telefonoDiscount);

?>