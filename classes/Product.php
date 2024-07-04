<?php 
require_once __DIR__ . '/Category.php';

/**
 * New class Product 
 */

class Product{
    /** Product image URL */
    protected $image; 
    /** Product title  */
    protected $title; 
    /** Product price */
    protected $price; 
    /** Product category */
    protected $category; 

    public function __construct($image, $title, $price, Category $category){
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
    }



}