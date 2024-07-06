<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Toy extends Product{
    protected $characteristics;
    protected $dimensions;

    public function __construct($image, $title, $price, Category $category, $characteristics, $dimensions){

        parent::__construct($image, $title, $price, $category);
        $this->characteristics = $characteristics;
        $this->dimensions = $dimensions;
        
    }

    public function getCharacteristics(){
        return $this->characteristics;
    }

    public function getDimensions(){
        return $this->dimensions;
    }
}