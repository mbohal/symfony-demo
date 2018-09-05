<?php
namespace App\Tests\Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Functional extends \Codeception\Module
{
    /**
     * @param bool $followRedirects
     * @throws \Codeception\Exception\ModuleException
     */
    public function followRedirects($followRedirects)
    {
        $this->getModule('Symfony')->client->followRedirects($followRedirects);
    }

    /**
     * @throws \Codeception\Exception\ModuleException
     */
    public function followRedirect()
    {
        $this->getModule('Symfony')->client->followRedirect();
    }
}
