<?php 

class Category{
    protected $name;
    protected $icon;

    public function __construct($name, $icon){
        $this->name = $name;
        $this->icon = $icon;
    }
}