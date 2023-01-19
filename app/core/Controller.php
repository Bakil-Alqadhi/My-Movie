<?php 
    class Controller {
        public function model($model, $params=[]){
            //global $con;
            require_once '../app/models/'. $model .'.php';
            return new $model($params);
            //echo $model;
          }
  
          public function view($view, $data= []){
            global $con;
              require_once '../app/views/'.$view.'.php';
          }
    }

?>