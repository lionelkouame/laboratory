<?php


namespace App\Message;


class WelcomeMessage
{
    private string $messageId;

    public function __construct( string $messageId)
    {
        $this->messageId = $messageId;
    }

    /**
     * @return string
     */
    public function getMessageId(): string
    {
        return $this->messageId;
    }



}
