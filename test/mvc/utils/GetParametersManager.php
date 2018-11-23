<?php
    class GetParametersManager {
        private $_controller;
        private $_view;

        public function __construct() {
            if(isset($_GET['controller']) && isset($_GET['view'])){
                $this->_controller = $_GET['controller'];
                $this->_view = $_GET['view'];
            }
            else {
                $this->setDefaultValues();
            }
            
        }

        public function getController() :string {
            return $this->_controller;
        }
        public function getView() :string {
            return $this->_view;
        }

        public function setDefaultValues() {
            $this->_controller = 'default';
            $this->_view = 'default';
        }

        public function loadController() {
            switch ($this->_controller) {
                case 'home':
                    include(__DIR__.'/../controllers/HomeController.php');
                    $controller = new HomeController();
                    return $controller->default();
                    break;
                
                default:
                    # code...
                    break;
            }
        }

        public function loadView($var) {
            switch ($this->_view) {
                case 'default':
                    include(__DIR__.'/../views/home/default.php');
                    break;
                
                default:
                    # code...
                    break;
            }
        }
    }