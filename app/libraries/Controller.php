<?php
/*
    #Base Controller Class
    #Loads the models and views
*/

class Controller
{
    // Load Model
    public function model($model)
    {
        // Require model file
        require_once '../app/models/' . $model . '.php';


        // Instantiate Model
        return new $model();
    }


    // Load View
    public function view($view, $data = [])
    {
        // check for the view file
        if(file_exists('../app/views/' . $view . '.php'))
        {
            require_once '../app/views/' . $view . '.php';
        } 
        else
        {
            require_once '../app/views/404.php';
            die('404 page');
        }
    }
}
