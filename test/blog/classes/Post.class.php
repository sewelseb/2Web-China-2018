<?php
    class Post {
        private $_id;
        private $_title;
        private $_body;
        private $_publicationDate;
        private $_user;

        public function getId() :?int
        {
        return $this->_id;
        }
        public function getTitle() :?string
        {
        return $this->_title;
        }
        public function getBody() :?string
        {
        return $this->_body;
        }
        public function getPublicationDate() :?int
        {
        return $this->_publicationDate;
        }
        public function getUser() :?User
        {
        return $this->_user;
        }

        public function setId(int $arg)
        {
        $this->_id=$arg;
        }
        public function setTitle(string $arg)
        {
        $this->_title=$arg;
        }
        public function setBody(string $arg)
        {
        $this->_body=$arg;
        }
        public function setPublicationDate(int $arg)
        {
        $this->_publicationDate=$arg;
        }
        public function setUser(User $arg)
        {
        $this->_user=$arg;
        }

        public function __construct() {

        }

        public function hydrate($id, $title, $body, $publicationDate, $user)
        {
            $this->setId($id);
            $this->setTitle($title);
            $this->setBody($body);
            $this->setPublicationDate($publicationDate);
            $this->setUser($user);

        }

    }