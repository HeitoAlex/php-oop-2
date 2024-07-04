<?php 

class Food extends Product{
    protected $weight;
    protected $ingredients;

    public function __construct($image, $title, $price, Category $category, $weight, $ingredients){

        parent::__construct($image, $title, $price, $category);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
        
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getIngredients(){
        return $this->ingredients;
    }
}