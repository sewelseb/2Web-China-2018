<?php
    require_once('UserManager.class.php');
    require_once(__DIR__.'/../User');

    class SimpleUserManager implements UserManager
    {
        public function authenticate() :?User {
            if ($_POST['email'] == "test@test.com" && $_POST['password'] == "1234") {
                $user = new User();
                $user->setPassword($_POST['password']);
                $user->setUsername($_POST['email']);
                return $user;
            }
            $myException = new Exception("Bad credential", -1);
            throw $myException;
        }
    }
    