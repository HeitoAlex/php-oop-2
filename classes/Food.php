<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

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

    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function setIngredients($ingredients){
        $this->ingredients = $ingredients;
    }
}