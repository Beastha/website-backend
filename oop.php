<?php
class fruit{
    // properties
    public $name;
    public $color;

    // method
    function set_name($name){
        $this->name =$name;
    }
        function get_name(){
            return $this->name;
        

    }
}
$apple = new fruit();
$apple->set_name("apple");

echo $apple->get_name();
echo"<br>";
$mango =new fruit();
$mango->set_name("mango");

echo $mango->get_name();
echo"<br>";


class color{
    public $color;

    function set_color($color){
        $this->color =$color;
    }
        function get_color(){
            return $this->color; 
        }
    }
$purple =new color();
$purple->set_color("purple");

echo $purple->get_color();

echo"<br>";


class car{
    public $color;
    public $model;

    function __construct($model){
        $this->model =$model;
    }
        function get_model(){
            return $this->model; 
        }
    }
$toyota =new car("2025");

echo $toyota->get_model();

$toyota->color  ="red";

echo $toyota->color;

class vegetables extends fruits{
    public $nutrients;
}

$ponkinleaf




?>