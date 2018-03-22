<?php
    

    class Pages extends Controller
    {
        
       
        // public function __construct()
        // {
          
            
        // }

       

        public function index()
        {   
            $data = [
                'title' => 'Welcome',
                'description' => 'Successful programming requires constant practice'
                
            ];
                        
            $this->view('pages/index', $data);
        }



        public function about()
        {
            
            $this->view('pages/about');
           
        }


    }