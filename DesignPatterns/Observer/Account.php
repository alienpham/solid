<?php
namespace SOLID\DesignPatterns\Observer;

require_once 'Subject.php';
require_once 'Observer.php';
require_once 'Logger.php';
require_once 'Mailer.php';

class Account implements Subject
{
    const LOGIN_SUCCESS = 1;

    private $_state;
    private $_observers = [];

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    public function attach(Observer $observer)
    {
        $hasObserver = array_search($observer, $this->_observers);
        if ($hasObserver === false) {
            $this->_observers[] = $observer;
        }
    }

    public function detach(Observer $observer)
    {
        foreach ($this->_observers as $key => $ob) {
            if ($ob == $observer) {
                unset($this->_observers[$key]);
            }
        }
    }

    public function notify()
    {
        foreach ($this->_observers as $observer) {
            $observer->update($this);
        }
    }

    public function login()
    {
        $this->setState(self::LOGIN_SUCCESS);
        $this->notify();
    }
}

$account = new Account();
$account->attach(new Logger());
$account->attach(new Mailer());
$account->login();