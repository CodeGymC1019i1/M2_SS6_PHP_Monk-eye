<?php
 include_once "Resize.php";

class Circle implements Resize{
   public $name;
   public $radius;
   function __construct($name,$radius)
   {
       $this->name = $name;
       $this->radius = $radius;
   }
   public function resizeShape($rate)
   {
        $this->radius *= $rate;
        return $this->radius;
   }
}
