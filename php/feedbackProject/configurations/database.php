<?php
//PDO - PHP Data Object
define('DATABASE_SERVER', 'mysql-php-container'); // DATABASE_SERVER = container name
define('DATABASE_USER', 'root');
define('DATABASE_PASSWORD', 'root');
define('DATABASE_NAME', 'phpapp');

function getConnection(): PDO {
    static $connection = null;

    if ($connection === null) {
        $connection = new PDO(
            "mysql:host=" . DATABASE_SERVER . ";dbname=" . DATABASE_NAME,
            DATABASE_USER,
            DATABASE_PASSWORD
        );
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    return $connection;
}
