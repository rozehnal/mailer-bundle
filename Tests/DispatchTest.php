<?php

namespace Paro\MailingBundle\Tests;

use Paro\MailingBundle\Model\File\FileConsumer;
use Paro\MailingBundle\Model\File\FileProducer;
use Paro\MailingBundle\Model\Message;

class DispatchTest extends \PHPUnit_Framework_TestCase
{
    private $container;

    protected function setUp()
    {
        $kernel = new \AppKernel('test', true);
        $kernel->boot();

        $this->container = $kernel->getContainer();
    }

    public function testAllCycle()
    {
        $message = new Message();
        $message->setTo('tester@tester.cz');
        $message->setPlainContent('plain_text');

        $folder = '/Applications/XAMPP/htdocs/mailer-bundle/Tests/data';

        $producer = new FileProducer($folder);
        $producer->add($message);

        $consumer = new FileConsumer($folder);
        $messageRecieved = $consumer->get();


        $this->assertTrue(true);
    }
}