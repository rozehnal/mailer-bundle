<?php


namespace Paro\MailingBundle\Model;


interface ProducerInterface
{
    public function add(MessageInterface $message);
}