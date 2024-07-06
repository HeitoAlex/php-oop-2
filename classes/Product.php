<?php 

require_once __DIR__ . '/Category.php';

/**
 * New class Product 
 */

class Product{
    /** Product image URL @var String*/
    protected $image; 
    /** Product title @var String */
    protected $title; 
    /** Product price @var Number */
    protected $price; 
    /** Product category */
    protected $category; 

    public function __construct($image, $title, $price, Category $category){
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
    }

    public function getImage(){
        return $this->image;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getCategory(){
        return $this->category;
    }


}