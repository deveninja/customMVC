<?php
    

    class Pages extends Controller
    {
        
       
        // public function __construct()
        // {
          
            
        // }

       

        public function index()
        {   
            include '../app/helpers/pages/variables.php';
            $this->view('pages/index', $data);
        }



        public function about()
        {
            include '../app/helpers/pages/variables.php';
            $this->view('pages/about', $data);
           
        }


    }