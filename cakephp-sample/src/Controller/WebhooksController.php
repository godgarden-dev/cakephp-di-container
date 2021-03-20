<?php
declare(strict_types=1);

namespace App\Controller;

use App\Service\WebhookServiceInterface;

class WebhooksController extends AppController
{
    public function index(WebhookServiceInterface $client)
    {
        $client->send();
        exit;
    }
}
