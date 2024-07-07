<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../traits/HasDimension.php';

class Accessory extends Product{
    use HasDimension;
    protected $materials;

    public function __construct($image, $title, $price, Category $category, $materials, $dimensions){

        parent::__construct($image, $title, $price, $category);
        $this->materials = $materials;
        $this->dimensions = $dimensions;
    }

    public function getMaterials(){
        return $this->materials;
    }

    public function setMaterials($materials){
        $this->materials = $materials;
    }
}