<?php
    class ConnectionErrorException extends Exception {
        public function __construct($message = "Bad credential at login", $code = -1) {

        }
    }