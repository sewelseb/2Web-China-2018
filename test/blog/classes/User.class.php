<?php

/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 10-03-17
 * Time: 09:32
 */
class User
{
    private $_id;
    private $_username;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }

    public function __construct()
    {

    }


}