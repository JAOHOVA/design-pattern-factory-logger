<?php

require_once 'User.php';
require_once 'DatabaseLogger.php';

$databaseLogger = new DatabaseLogger();

$john = new User('John', $databaseLogger);
$laure = new User('laure', $databaseLogger);
echo $john->sayHello();
echo '<br>';
echo $laure->sayHello();
$samantha = new User('Sam', $databaseLogger);
