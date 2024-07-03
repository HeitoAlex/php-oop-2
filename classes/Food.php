<?php 

class Food{
    protected $weight;
    protected $ingredients;

    public function __construct($weight, $ingredients){
        $this->weight = $weight;
        $this->ingredients = $ingredients;
        
    }
}