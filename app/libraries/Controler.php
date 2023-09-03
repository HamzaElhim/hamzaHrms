<?php 

  /*

  === main controler
  === load the model and the view

  */

  // each controleres class it's going to extends this controler class

  class Controler {
    // load the models
    public function models($model){
      $model=ucfirst($model);
      // bring the model file
      require_once '../app/models/'.$model.'.php';

      // create the obj model
      return new $model();
    }

    // load the views
    public function views($view,$data=[]){
      $view=ucfirst($view);
      if(file_exists('../app/views/'.$view.'.php')){
        // bring the view file
        require_once '../app/views/'.$view.'.php';
      }else {
        die('the view does not exist');
      }
    }

  }