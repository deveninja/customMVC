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
            $url = $_GET['url'];
            echo '<div class="error-msg"><span class="error-span">' . dirname($_SERVER['SCRIPT_FILENAME']) . '/' . $view . '.php' . ' </span>is not found in the app/views folder. Check if the app/view file exists</div>';
            die(require_once '../app/views/errors/404.php');
            // die('404 page');
        }
    }
}
