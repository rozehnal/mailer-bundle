<?php

namespace Paro\MailingBundle\Tests;

class DispatchTest extends \PHPUnit_Framework_TestCase
{
    private $container;

    protected function setUp()
    {
        $kernel = new \AppKernel('test', true);
        $kernel->boot();

        $this->container = $kernel->getContainer();
    }

    public function testTrue()
    {
        $this->assertTrue(true);
    }
}