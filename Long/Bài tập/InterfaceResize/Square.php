<?php
include_once "Resize.php";
include_once "Rectangle.php";

class Square extends Rectangle implements Resize
{
public $width;
public function __construct($width, $height)
{
    parent::__construct($width, $height);
}
public function resizeShape($rate)
{
    $this->width *= $rate;
    return $this->width;
}
}