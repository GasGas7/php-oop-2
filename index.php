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
    protected $birth;
    protected $address;
    protected $phoneNumber;
    protected $paymeantMethod;
    protected $userVip;

    public function __construct($name,$lastname,$email,$birth,$address,$phoneNumber,$paymeantMethod,$userVip) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->birth = $birth;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->paymeantMethod = $paymeantMethod;
        $this->userVip = $userVip;
    }

    public function getUserVip()
    {
        return $this->userVip;
    }
}

class Products
{   
    protected $nameProd;
    protected $descrProd;
    protected $techSpecs;
    protected $inStock;
    protected $onSale;//booleano...se true restituisce lo sconto con funzione se è false non ritorna niente.

    public function getInStock()
    {
        return $this->inStock;
    }

    public function isOnSale()
    {
        if ($this->getInStock() < 5){
            $this->onSale = true;
        } else {
            $this->onSale = false;
        }
    }
}

class TypeOfProducts extends Products
{   
    
    protected $typeOfProd;

    function __construct($nameProd, $descrProd, $techSpecs, $inStock, $onSale, $typeOfProd) {
        parent::__construct($nameProd, $descrProd, $techSpecs, $inStock, $onSale);
        $this->typeOfProd = $typeOfProd;
    }
}
?>