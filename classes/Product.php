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
    /** Product price @var Float
     */
    protected $price; 
    /** Product category */
    protected $category; 

    public function __construct($image, $title, $price, Category $category){
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
    }

        // GETTER

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

        // SETTER

    public function setImage($image){
        $this->image = $image;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function setCategory($category){
        $this->category = $category;
    }
}