<?php
    class User 
    {
        private $_id;
        private $_firstName;
        private $_lastName;
        private $_email;
        private $_password;

        public function getId() :?int
        {
        return $this->_id;
        }
        public function getFirstName() :?string
        {
        return $this->_firstName;
        }
        public function getLastName() :?string
        {
        return $this->_lastName;
        }
        public function getEmail() :?string
        {
        return $this->_email;
        }
        public function getPassword() :?string
        {
        return $this->_password;
        }

        public function setId(int $arg)
        {
        $this->_id=$arg;
        }
        public function setFirstName(string $arg)
        {
        $this->_firstName=$arg;
        }
        public function setLastName(string $arg)
        {
        $this->_lastName=$arg;
        }
        public function setEmail(string $arg)
        {
        $this->_email=$arg;
        }
        public function setPassword(string $arg)
        {
        $this->_password=$arg;
        }

        public function __construct() {

        }

        public function hydrate($id, $firstName, $lastName, $email, $password)
        {
            $this->setId($id);
            $this->setFirstName($firstName);
            $this->setLastName($lastName);
            $this->setEmail($email);
            $this->setPassword($password);

        }
    }
    