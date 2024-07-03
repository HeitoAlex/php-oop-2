<?php 

class Toys{
    protected $characteristics;
    protected $dimensions;

    public function __construct($characteristics, $dimensions){
        $this->characteristics = $characteristics;
        $this->dimensions = $dimensions;
        
    }
}