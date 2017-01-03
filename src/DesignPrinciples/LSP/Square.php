<?php
namespace BestPractices\DesignPrinciples\LSP;

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