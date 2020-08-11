<?php
    class Index extends CI_Controller {

        public function index(){
            $this->load->view('Index');

        }

        public function comments(){

            echo 'Look at this!';

        }

        public function _output($output){
            echo $output;
            if ($this->output->cache_expiration > 0){
                    $this->output->_write_cache($output);
            }
        }
        

        

    }
    

    