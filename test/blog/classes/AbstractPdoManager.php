<?php

/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 25-04-17
 * Time: 10:07
 */
abstract class AbstractPdoManager
{
    protected $_pdo;
    protected $_dataBaseName = "maDb";
    protected $_password = 'root';
    protected $_user = 'root';

    function __construct()
    {
        try{
            $this->_pdo = new PDO('mysql:'.$this->_dataBaseName_,$this->_user,$this->_password);
        }
        catch (PDOException $e)
        {
            die('Data base connexion error');
        }

    }



}