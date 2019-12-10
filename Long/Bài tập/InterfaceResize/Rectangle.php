<?php
include_once "Resize.php";

class Rectangle implements Resize
{
public $width;
public $height;
function __construct($width,$height)
{
    $this->width = $width;
    $this->height = $height;
}
public function resizeShape($rate)
{
    $this->width *= $rate;
    $this->height *= $rate;
    return "Width:".$this->width."And Height".$this->height;
}
}