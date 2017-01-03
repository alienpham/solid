<?php
namespace BestPractices\DesignPatterns\Observer;

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