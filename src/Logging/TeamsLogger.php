<?php

namespace Osama\LaravelTeamsNotification\Logging;

use Monolog\Logger as MonologLogger;

class TeamsLogger extends MonologLogger
{

    public function __construct(string $url, $level = null)
    {
        parent::__construct('teams-logger',[
            new TeamsLoggerHandler($url, $level)
        ]);
    }
}
