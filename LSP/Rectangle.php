<?php
namespace SOLID\LSP;

class Rectangle
{
    protected $_width;
    protected $_height;

    public function getWidth()
    {
        return $this->_width;
    }

    public function setWidth($width)
    {
        $this->_width = $width;
    }

    public function getHeight()
    {
        return $this->_height;
    }

    public function setHeight($height)
    {
        $this->_height = $height;
    }

    public function getArea()
    {
        return $this->_width * $this->_height;
    }
}