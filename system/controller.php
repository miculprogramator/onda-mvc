<?php

class Controller {

  public function loadModel($name){
    require(APP_DIR .'models/'. strtolower($name) .'.php');
    $model = new $name;
    return $model;
  }

  public function loadView($name){
    $view = new View($name);
    return $view;
  }
  
  public function redirect($loc){
    global $config;
    header('Location: '. $config['base_url'] . $loc);
  }

}

?>
