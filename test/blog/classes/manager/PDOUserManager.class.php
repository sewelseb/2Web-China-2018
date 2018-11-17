<?php
    require('UserManager.class.php');

    class PDOUserManager implements UserManager {
        private $_pdo;

        public function __construct(PDO $pdo) {
            $this->_pdo = $pdo;
        }

        public function authenticate() :?User {
            $sql  = 'SELECT * FROM user WHERE email=:email;';
            
            $stm = $this->_pdo->prepare($sql);
            $stm->execute(
                array(
                    ':email' => $_POST['email']
                )
            );
            $users = $stm->fetchAll(PDO::FETCH_ASSOC);

            /* without prepared statments:
            $usersAsPDO = $this->_pdo->query(
                'SELECT * FROM user WHERE email=\''..'\';'
            );
            $users = $usersAsPDO->fetchAll(PDO::FETCH_ASSOC);
            */
            // example: SELECT * FROM user WHERE email='200400@supinfo.com';
            
            foreach($users as $user) {
                if($user['password'] == $_POST['password']) {
                    $return = new User();
                    $return->setId($user['id']);
                    $return->setFirstName($user['firstname']);
                    $return->setLastName($user['lastname']);
                    $return->setEmail($user['email']);
                    $return->setPassword($user['password']);
                    return $return;
                }
            }

            return null;
        }
    }