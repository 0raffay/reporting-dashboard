<?php
include_once "../config/Database.php";
class Query
{
    private $dbConnect;
    private $contractTable = 'contract';
    public function __construct()
    {
        $database = new Database();
        $this->dbConnect = $database->getConnection();
        if (!$this->dbConnect) {
            die("Failed to Connect to Database: " . $this->dbConnect);
        }
    }
}
