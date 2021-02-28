<?php 
    class Message{
        public function messageSuccess ($mensagem ){
            $response  = array("message" => $mensagem );
            echo json_encode($response, JSON_UNESCAPED_UNICODE);
        }

        public function messageError ($mensagem ){
            $response  = array("messageError" => $mensagem );
            echo json_encode($response, JSON_UNESCAPED_UNICODE);
         }
         
    }
?>