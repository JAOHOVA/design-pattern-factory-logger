<?php

require_once 'LoggerInterface.php';
require_once 'DatabaseLogger.php';

class DatabaseLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        file_put_contents('database.log', $message.PHP_EOL, FILE_APPEND);
    }
}