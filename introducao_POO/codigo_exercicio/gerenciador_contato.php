<?php 

    class Contact{
    public $name = "João";
    public $email = "joao@example.com";
    public $phone = 123456789;
    
    public function getName(){
        return $this->name;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getPhone(){
        return $this->phone;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    
    public function setPhone($phone){
        $this->phone = $phone;
    }
}

$contato = new Contact();

echo $contato->getName() ."<br>";

echo $contato->getEmail() ."<br>";

echo $contato->getPhone() ."<br>";

$contato->setEmail("Jessica150@gmail.com");

$contato->setPhone = 87654321;


?>