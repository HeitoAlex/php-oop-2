<?php 

class Accessories{
    protected $materials;
    protected $dimensions;

    public function __construct($materials, $dimensions){
        $this->materials = $materials;
        $this->dimensions = $dimensions;
        
    }
}