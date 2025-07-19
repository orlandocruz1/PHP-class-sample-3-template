<?php

class Animal{
        
        private $type;
        private $age;
        private $size;
        

        public function __construct( $type, $age, $size)
        {
            
            $this->type=$type;
            $this->age=$age;
            $this->size=$size;
        }


        public function functionDiet() {
            $types =  match($this->type){
                "cat"=>"michi",
                "dog"=>"Firulai",
              };

            if ($this->age <= 1){
                $food = "baby";
            }elseif ($this->age <12){
                $food = "adult";
            }elseif($this->age >11){
                $food = "senior";
            }
             echo "The diet for you ". $types . " with a age of " . $this->age .  " and their size of " . $this->size . " therefor the food type is: " . $food ;
        }
}



?>