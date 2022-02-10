<?php

require_once 'LoggerInterface.php';

class Logger implements LoggerInterface
{
    private static Logger $instance;

    private function __construct()
    {

    }

    private function __clone()
    {

    }

    public static function getInstance(): Logger
    {
        if (!isset(self::$instance )) {
            self::$instance = new Logger();
        }

        return self::$instance;
    }

    public function log(string $message): void
    {
        //flags: pour ne pas écraser les fichiers à enregistrer
        file_put_contents(date('Y-m-d').'.log', $message.PHP_EOL, FILE_APPEND);
    }
}