<?php
namespace BestPractices\DesignPatterns\Observer;

class Mailer implements Observer
{

    public function update(Subject $account)
    {
        $state = $account->getState();

        if ($state == Account::LOGIN_SUCCESS) {
            echo "Email sent.";
        }
    }
}