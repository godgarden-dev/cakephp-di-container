<?php
declare(strict_types=1);

namespace App\Service;

class ChatworkService implements WebhookServiceInterface
{
    public function send()
    {
        echo 'send message by Chatwork.';
    }
}