<?php

class Controller {

    public function model($model) {

        require_once "../app/models/" . $model . ".php";

        return new $model();
    }

    public function view($view, $data = [])
    {
        extract($data);
    
        $content = "../app/views/$view.php";
    
        require_once "../app/views/layouts/master.php";
    }
}

?>  
