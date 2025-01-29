<?php
class Connect
{
    public $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "rba";

    public function dbconnect()
    {
        $db = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        return $db;
    }
}
?>