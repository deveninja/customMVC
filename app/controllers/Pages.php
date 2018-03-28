<?php
    

    class Pages extends Controller
    {
        
        // Instantiate the Models passed
        public function __construct()
        {
          $this->postModel = $this->model('Post');
          $this->milestoneModel = $this->model('Milestone');
            
        }

       
        // The default page to display
        public function index()
        {   
            $id = 22;
            $milestones = $this->milestoneModel->getMilestones($id);
            
            include '../app/helpers/pages/variables.php';
            
            // $data = [
            //     'title' => 'Welcome',
            //     'description' => 'Successful programming requires constant practice!',
            //     'tasks' => $tasks
                
            //     ];
            
            $this->view('pages/index', $data);
        }


        // The about page
        public function about()
        {
            include '../app/helpers/pages/variables.php';
            $this->view('pages/about', $data);
           
        }

        // The query page
        public function query()
        {
            include '../app/helpers/pages/variables.php';
            $this->view('pages/query', $data);
           
        }


    }