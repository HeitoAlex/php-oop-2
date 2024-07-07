<?php 

trait HasDimension{
    protected $dimensions;

    public function getDimensions (){
        return $this->dimensions;
    }

    public function setDimensions ($dimensions){
        $this->dimensions = $dimensions;
    }
}