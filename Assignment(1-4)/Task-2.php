<?php

interface LoggerInterface
{
    public function log($email, $message);
}

class DatabaseLogger implements LoggerInterface
{
    protected $dbConnection;

    public function __construct($dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function log($email, $message)
    {
        echo "Logging to database for email $email: $message\n";
    }
}

class FileLogger implements LoggerInterface
{
    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function log($email, $message)
    {
        file_put_contents($this->filePath, "Email: $email, Message: $message\n", FILE_APPEND);
    }
}


$dbLogger = new DatabaseLogger('dummy_db_connection');
$fileLogger = new FileLogger('user.txt');

$email = 'user@example.com';
$id = 123;

$dbLogger->log($email, "This is a database log entry with ID $id.");
$fileLogger->log($email, "This is a file log entry with ID $id.");
