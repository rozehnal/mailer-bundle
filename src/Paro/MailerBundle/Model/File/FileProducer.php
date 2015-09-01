<?php

namespace Paro\MailerBundle\Model\File;

use Paro\MailerBundle\Model\MessageInterface;
use Paro\MailerBundle\Model\ProducerInterface;

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