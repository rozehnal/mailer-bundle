<?php


namespace Paro\MailingBundle\Model;


class Message implements MessageInterface
{
    /**
     * @var string|array
     */
    private $to;
    /**
     * @var string|array
     */
    private $cc;
    /**
     * @var string|array
     */
    private $bcc;
    /**
     * @var string
     */
    private $plainContent;
    /**
     * @var string
     */
    private $htmlContent;
    /**
     * @var array
     */
    private $attachements;
    /**
     * @var string
     */
    private $title;

    /**
     * @return array|string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param array|string $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return array|string
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @param array|string $cc
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
    }

    /**
     * @return array|string
     */
    public function getBcc()
    {
        return $this->bcc;
    }

    /**
     * @param array|string $bcc
     */
    public function setBcc($bcc)
    {
        $this->bcc = $bcc;
    }

    /**
     * @return string
     */
    public function getPlainContent()
    {
        return $this->plainContent;
    }

    /**
     * @param string $plainContent
     */
    public function setPlainContent($plainContent)
    {
        $this->plainContent = $plainContent;
    }

    /**
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->htmlContent;
    }

    /**
     * @param string $htmlContent
     */
    public function setHtmlContent($htmlContent)
    {
        $this->htmlContent = $htmlContent;
    }

    /**
     * @return array
     */
    public function getAttachements()
    {
        return $this->attachements;
    }

    /**
     * @param array $attachements
     */
    public function setAttachements($attachements)
    {
        $this->attachements = $attachements;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

}