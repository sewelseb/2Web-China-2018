<?php
    class User {
        private $_id;
        private $_firstname;
        private $_lastname;
        private $_email;
        private $_password;

        public function getId()
        {
        return $this->_id;
        }
        public function getFirstname()
        {
        return $this->_firstname;
        }
        public function getLastname()
        {
        return $this->_lastname;
        }
        public function getEmail()
        {
        return $this->_email;
        }
        public function getPassword()
        {
        return $this->_password;
        }

        public function setId($arg)
        {
        $this->_id=$arg;
        }
        public function setFirstname($arg)
        {
        $this->_firstname=$arg;
        }
        public function setLastname($arg)
        {
        $this->_lastname=$arg;
        }
        public function setEmail($arg)
        {
        $this->_email=$arg;
        }
        public function setPassword($arg)
        {
        $this->_password=$arg;
        }

        public function hydrate($id, $firstname, $lastname, $email, $password)
        {
        $this->setId($id);
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $this->setEmail($email);
        $this->setPassword($password);

        }

    }