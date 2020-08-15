<?php

class Dbh
{
    // Variables
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    // PDO Connection Function
    public function connect()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "root";
        $this->dbname = "real_estate_test";
        $this->charset = "utf8mb4";

        // Try Catch function to regurgitate error message if needed
        try {
            $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;           
        } catch (PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
        }
    }
}
