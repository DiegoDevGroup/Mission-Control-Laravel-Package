<?php

namespace DiegoDevGroup\MissionControlLaravel;

use DiegoDevGroup\MissionControl\IssueService;

class Issue
{
    public function __construct()
    {
        $this->issueService = new IssueService(config('mission-control.api_token', null));
    }

    public function exception($exception)
    {
        return $this->issueService->exception($exception);
    }

    public function log($message, $flag)
    {
        return $this->issueService->log($message, $flag);
    }
}
