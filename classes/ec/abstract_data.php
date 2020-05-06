<?php

class AbstractData
{
    protected $pdo;

    public function __construct()
    {
        $this->connectDb();
    }

    protected function connectDb()
    {
        $this->pdo = new PDO('mysql:dbname=ec;host=127.0.0.1', 'root', '28fa8Iuy');
    }

    protected function query($sql)
    {
        return $this->pdo->query($sql);
    }

    protected function exec($sql)
    {
        return $this->pdo->exec($sql);
    }
}

?>
