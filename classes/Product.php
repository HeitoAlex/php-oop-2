<?php 

require_once __DIR__ . '/Dog.php';
require_once __DIR__ . '/Cat.php';
require_once __DIR__ . '/Bird.php';
require_once __DIR__ . '/Fish.php';


/**
 * New class Product 
 */

class Product{
    protected $image;
    protected $title;
    protected $price;
    protected $category;

    public function __construct($image, $title, $price, Category $category){
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
    }



}