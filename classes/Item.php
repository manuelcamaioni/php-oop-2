<?php 

include_once __DIR__ . "/Category.php";
class Item extends Category{
    public $description;
    public $title;
    public $imageItem;

    function __construct($_description, $_title, $_imageItem, $_type){
        $this->description = $_description;
        $this->title = $_title;
        $this->imageItem = $_imageItem;
        parent::__construct($_type);
    }
}

var_dump(new Item("lorem ipsum", "titolo", "", "tipo"));
?>