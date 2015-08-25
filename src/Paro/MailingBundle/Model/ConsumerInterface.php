<?php


namespace Paro\MailingBundle\Model;


interface ConsumerInterface
{
    /**
     * @return MessageInterface
     */
    public function get();

}