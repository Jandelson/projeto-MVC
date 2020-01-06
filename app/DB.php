<?php

namespace app;

class DB
{
    public $db;
    public $query;
    private $config;
    private $connectionParams;
    
    public function __construct()
    {
        $this->config = new \Doctrine\DBAL\Configuration();

        $this->connectionParams = array(
            'dbname' => DBNAME,
            'user' => USER,
            'password' => PASS,
            'host' => HOST,
            'port' => 3306,
            'charset' => 'utf8',
            'driver' => 'pdo_mysql',
        );

        $this->db = \Doctrine\DBAL\DriverManager::getConnection($this->connectionParams, $this->config);
        $this->query = $this->db->createQueryBuilder();
    }
}
