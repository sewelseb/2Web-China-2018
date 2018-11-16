<?php
    interface UserManager {
        public function authenticate() :User;
    }