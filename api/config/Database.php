<?php
class Database
{
    private $host = 'localhost';
    private $user = 'arrauuqq_rite';
    private $password = 'arrauuqq_rite';
    private $database = 'arrauuqq_rite';

    public function getConnection()
    {
        $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($conn->connect_error) {
            die("Failed to connect to Database: " . $conn->connect_error);
        } else {
            return $conn;
        }
    }
}
