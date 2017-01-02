<?php
namespace SOLID\DesignPatterns\Factory;

class ConcreteProduct implements ProductInterface
{
    protected $_id = null;

    public function __construct($id)
    {
        $this->_id = $id;
    }

    public function makeIt()
    {
        return "Product made with id {$this->_id}";
    }
}