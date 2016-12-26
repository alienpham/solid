<?php
namespace SOLID\LSP;

require_once 'Rectangle.php';

class Square extends Rectangle
{
    public function setWidth($width)
    {
        $this->_width = $width;
        $this->_height = $width;
    }

    public function setHeight($height)
    {
        $this->_height = $height;
        $this->_width = $height;
    }
}