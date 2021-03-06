<?php
/*
    #App Core Class
    #Creates URL & loads core controller
    #URL Format - /controller/method/params
*/

class Core 
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];
    



    public function __construct()
    {
        // print_r($this->getUrl());
        $url = $this->getUrl();
        $controllerFolder = '../app/controllers/';

        // Checks if there is no first value or the url is in the home page

        // Look in controllers for first value
        if(file_exists( $controllerFolder . ucwords($url[0]) . '.php'))
        {
            // If file does exists, set the file as a controller
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        } 

        // Require the controller
        require_once $controllerFolder . $this->currentController . '.php';

        // Instantiate controller class
        $this->currentController = new $this->currentController;

        // Check for second part of url
        if(isset($url[1]))
        {
            // Check to see if method exists in controller
            if(method_exists($this->currentController, $url[1]))
            {
                $this->currentMethod = $url[1];
                // Unset 1 index
                unset($url[1]);
            }
        }

        // Get params
        $this->params = $url ? array_values($url) : [];

        // call a callback with array of params
        call_user_func_array(
            [
                $this->currentController, 
                $this->currentMethod
            ],  $this->params);
    }




    public function getUrl()
    {
        // echo $_GET['url'];
        if(isset($_GET['url'])) 
        {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }


}