<?php

require_once 'Logger.php';

class User
{
    public string $username;
    public LoggerInterface $logger;

    //Injection de LoggerInterface ds le constructeur
    public function __construct(string $username, LoggerInterface $logger)
    {
        $this->username = $username;
        $this->logger =  $logger;
        $this->logger->log('Utilisateur '.$this->username.' crée');
    }

    public function sayHello(): string
    {
        $this->logger->log($this->username.' dit bonjour');

        return 'Bonjour '.$this->username;
    }
}