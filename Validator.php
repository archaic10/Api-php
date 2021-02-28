<?php 
    require 'Message.php';
    class Validator extends Message{

         public function validData ($data ){
             if(isset($data) && $data != null || $data != ""  ){
                 $showData = array("data"=> $data);
                echo json_encode($showData , JSON_UNESCAPED_UNICODE);
             }else {
               $this->messageError("Data not found!");
             }
         }

         public function validRequest($resquest ){
         
            if( isset($resquest) && $resquest != null || $resquest != "" ){
                $this->messageSuccess("Successful request!") ;
            }else{
                $this->messageError("An error occurred while making the request!") ;
            }
         
        }
    }

?>