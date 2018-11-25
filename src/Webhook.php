<?php

namespace DiegoDevGroup\MissionControlLaravel;

use DiegoDevGroup\MissionControl\WebhookService;

class Webhook
{
    public function __construct()
    {
        $this->webhookService = new WebhookService(config('mission-control.webhook', null));
    }

    public function send($title, $message, $flag)
    {
        return $this->webhookService->send($title, $message, $flag);
    }
}
