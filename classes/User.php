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
?>
