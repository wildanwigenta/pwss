<?php
class Database
{
    private $host = "localhost"; //Sesuaikan jika host database Anda berbeda
    private $db_name = "simpeg"; //sesuaikan bila nama database berbeda
    private $username = "root"; // Sesuaikan bila username berbeda
    private $password = ""; // Sesuaikan bila password berbrda
    public $conn;
    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" .
                $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
