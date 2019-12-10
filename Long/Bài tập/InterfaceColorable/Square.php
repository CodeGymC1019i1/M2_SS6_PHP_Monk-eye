<?php
include_once "Colorable.php";


class Square implements Colorable
{
    public $width;
    public function __construct($width)
    {
        $this->width = $width;
    }

    public function howToColor()
{
    echo "Color all four sides";
}
}