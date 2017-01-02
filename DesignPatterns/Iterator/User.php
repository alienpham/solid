<?php
namespace SOLID\DesignPatterns\Iterator;

class User
{
    private $_name;
    private $_email;

    public function __construct($_name, $_email)
    {
        $this->_name = $_name;
        $this->_email = $_email;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function setEmail($email)
    {
        $this->_email = $email;
    }
}