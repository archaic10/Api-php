<?php
require 'Controller.php';
require 'Service.php';
require 'Validator.php';
    class Routes extends Controller{
     
        public function __constructor(){
            parent::__construct();
        }

        public function listServices(){
            $route = $_GET['r'];
            if($this->isGet()){
               if($this->isRoute($route)) {
                $service = new $route() ;
                $service->list();
               }
            }
        }

        public function registerService(){
            $route = $_GET['r'];
            if($this->isPost()){
                if($this->isRoute($route)) {
                    $service = new $route();
                    $service->registred();
                }
            }
        }

        public function isRoute($route){
            if(!class_exists($route)) {
                    echo json_encode("Essa rota não existe", JSON_UNESCAPED_UNICODE);
               }else {
                   return true;
               }
        }

        public function isGet(){
            return isset($_GET['action']) && $_GET['action'] != "" ?  true :  false;
        }

        public function isPost(){
            return isset($_POST['action']) && $_POST['action'] != "" ?  true :  false;
        }
        public function isPut(){
            return isset($_SERVER['REQUEST_METHOD'])  && $_SERVER['REQUEST_METHOD'] ==="PUT" ? true : false;
        }

    }
?>