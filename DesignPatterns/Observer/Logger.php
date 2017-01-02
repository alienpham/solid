<?php
namespace SOLID\DesignPatterns\Observer;

require_once 'Account.php';
require_once 'Observer.php';

class Logger implements Observer
{

    public function update(Subject $account)
    {
        $state = $account->getState();

        if ($state == Account::LOGIN_SUCCESS) {
            echo "Message logged.";
        }
    }
}