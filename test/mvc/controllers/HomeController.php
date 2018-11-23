<?php
    require_once(__DIR__.'/../models/UserDao.php');
    require_once(__DIR__.'/../models/User.php');

    class HomeController {
        public function about() {

        }
        public function default() {
            // $user = new User();
            $userDao = new UserDao();
            $user = $userDao->get(1);
            $var = array();

            $var['user'] = $user;

            return $var;
        }
    }