<?php

/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 10-03-17
 * Time: 15:53
 */
class ClientManager
{
    private $_pdo;

    public function __construct(PDO $pdo)
        {
             $this->_pdo = $pdo;
        }
    public function connectUser()
    {
        $this->_pdo->query();
    }
}