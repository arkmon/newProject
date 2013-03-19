<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

    //    $this->load->helper('form');
          $this->load->helper('url');

        $this->load->model('search_model');
        $this->load->view('search_form');
    }

    public function index()
    {
        //$this->load->view('search_form');
        redirect('/search/home');
    }


   public function home()

{  

$this->load->view('search_form');

    }

   public function findemp()
{            
    
       
       
       $department =$this->input->get('dept');
     
       
       $name = $this->search_model->getsearch($department);
       echo json_encode($name);
} 

}