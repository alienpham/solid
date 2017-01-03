<?php
namespace BestPractices\DesignPatterns\Iterator;

class UserList implements \Iterator
{
    private $_users = [];
    private $_currentIndex = 0;

    public function addUser(User $user)
    {
        $this->_users[] = $user;
    }

    public function current()
    {
        return $this->_users[$this->_currentIndex];
    }

    public function next()
    {
        $this->_currentIndex++;
    }

    public function key()
    {
        $this->_currentIndex;
    }

    public function valid()
    {
        return isset($this->_users[$this->_currentIndex]);
    }

    public function rewind()
    {
        $this->_currentIndex = 0;
    }
}

/*$userList = new UserList();
$userList->addUser(new User("Dummy 1", "dummy1@binkmail.com"));
$userList->addUser(new User("Dummy 2", "dummy2@binkmail.com"));
$userList->addUser(new User("Dummy 3", "dummy3@binkmail.com"));

$userList->rewind();

while ($userList->valid()) {
    $user = $userList->current();
    echo $user->getName() . "<{$user->getEmail()}>";

    $userList->next();
}*/