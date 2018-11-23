<?php
    include('User.php');

    class UserDao {
        private $_pdo;

        public function __construct() {
            $this->_pdo = DataBaseConection::getPDO();
        }

        public function get($id) {
            $sql  = 'SELECT * FROM user WHERE id=:id;';
            
            $stm = $this->_pdo->prepare($sql);
            $stm->execute(
                array(
                    ':id' => $id
                )
            );
            $users = $stm->fetchAll(PDO::FETCH_ASSOC);
            foreach($users as $user) {
                
                $return = new User();
                $return->setId($user['id']);
                $return->setFirstName($user['firstname']);
                $return->setLastName($user['lastname']);
                $return->setEmail($user['email']);
                $return->setPassword($user['password']);
                return $return;
                
            }
        }
    }