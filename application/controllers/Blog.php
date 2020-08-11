<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, OPTIONS");
    
    class Blog extends CI_Controller{

        public function __construct(){
            parent::__construct();
            
            $this->load->model('Blog_model');
            $this->load->helper('url');
        }

        public function index(){
            $this->load->view('blogview');
        }


        public function comments(){
                echo 'Look at this!';
        }

    }