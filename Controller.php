<?php

    class Controller {
        public function __construct(){
            $url = $_REQUEST;
            $action = $url['action'];
            if(method_exists($this, $action)){
                $this->{$action}();
            }    
        }
    }

?>