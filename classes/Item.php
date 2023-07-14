<?php 

include_once __DIR__ . "/Category.php";
class Item extends Category{
    public $title; 
    public $description;
    public $image;
    public $price;
    public $type;

    function __construct(string $_description, string $_title, string $_image, string $_category, string $_type, float $_price){
        $this->description = $_description;
        $this->title = $_title;
        $this->image = $_image;
        $this->price = $_price;
        $this->type = $_type;
        parent::__construct($_category);
    }
}
?>