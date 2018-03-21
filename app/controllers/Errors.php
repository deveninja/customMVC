<?php

    class Errors extends Controller
    {
        // public function __construct()
        // {
            
        // }

        public function index()
        {
            http_response_code(404);
            header('HTTP/1.0 404 Not Found');
            include('../app/views/errors/404.php'); // provide your own HTML for the error page
            // var_dump(http_response_code());
            // die();
        }
          
    }