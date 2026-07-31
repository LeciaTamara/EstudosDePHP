<?php 

    class Passenger{
        public $name = "Maria";
        public $age = 30;
        public $seatNumber = "A12";
        
        public function getName(){
            return $this->name;
        }
        
        public function getAge(){
            return $this->age;
        }
        
        public function getSeatNumber(){
            return $this->seatNumber;
        }
        
        public function setSeatNumber($seatNumber){
            $this->seatNumber = $seatNumber;
        }
    }
    
    $passenger = new Passenger();
    
    echo $passenger->getName() . "<br>";
    
    echo $passenger->getAge() . "<br>";
    
    echo $passenger->getSeatNumber();
    
    $passenger->setSeatNumber("B5");



?>