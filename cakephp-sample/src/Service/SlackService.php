<?php
declare(strict_types=1);

namespace App\Service;

class SlackService implements WebhookServiceInterface
{
    public function send()
    {
        echo 'send message by Slack.';
    }
}