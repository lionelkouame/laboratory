<?php


namespace App\Message;


class HomeMessage
{
    private $messageId;

    public function __construct(int $messageId)
    {
        $this->messageId = $messageId;
    }

    /**
     * @return int
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }




}