<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Accessory extends Product{
    protected $materials;
    protected $dimensions;

    public function __construct($image, $title, $price, Category $category, $materials, $dimensions){

        parent::__construct($image, $title, $price, $category);
        $this->materials = $materials;
        $this->dimensions = $dimensions;
        
    }

    public function getMaterials(){
        return $this->materials;
    }

    public function getDimensions(){
        return $this->dimensions;
    }
}
}