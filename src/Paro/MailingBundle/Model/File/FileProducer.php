<?php

namespace Paro\MailingBundle\Model\File;

use Paro\MailingBundle\Model\MessageInterface;
use Paro\MailingBundle\Model\ProducerInterface;

class FileProducer implements ProducerInterface
{

    private $dirname;

    public function __construct($dirname)
    {
        $this->dirname = $dirname;
    }

    public function add(MessageInterface $message)
    {
        $filename = tempnam($this->dirname, 'message');
        $fp = fopen($filename, 'w');
        $data = serialize($message);
        fwrite($fp, $data);
        fclose($fp);
    }
}