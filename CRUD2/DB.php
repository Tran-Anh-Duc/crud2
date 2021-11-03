<?php

class DB
{
    private string $dsn;
    private string $username;
    private string $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=shop-online;charset=utf8";
        $this->username = "root";
        $this->password = "password";
    }

    public function connect(): PDO
    {
        try {
            return new PDO($this->dsn,$this->username,$this->password);
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }




}