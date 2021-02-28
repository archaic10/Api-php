<?php
    class Service{
        public function list (){
          $validator = new Validator();
            $response  = array("CPF" =>"9999999",
            "RG"=> 999999,
            "CTPS"=> 4444
            );            
            $validator->validData($response);
        }
        public function registred (){   
          $response  = "teste";
          $validator = new Validator();
          $validator->validRequest($response);
        }
    }
?>