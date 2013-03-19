<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search_model extends CI_Model {

     function __construct()
    {
       parent::__construct();
   $this->load->database();

          }
    public function getsearch($name,$lastname,$department)
    
    {
        if ($lastname!=''){ $this->db->where('lastName',$lastname);}
         if ($department!=''){ $this->db->where('department',$department);}
        //  if ($jobtitle!=''){ $this->db->where('title',$jobtitle);}
      $this->db->where('firstName',$name);
      $this->db->from('lecturers', 10, 20);
    //  $this->db->join('titles', 'titles.emp_no = employees.emp_no');
     // $this->db->join('dept_emp', 'dept_emp.emp_no = employees.emp_no');
     // $this->db->join('departments', 'departments.dept_no = dept_emp.dept_no');
     
      // $this->db->select('product_title');
       // $res = $this->db->get('employees');
        $query = $this->db->get();
       // $rowcount = $query->num_rows();
        $data = $query->result_array();

       return $data;
         
         
    }
  }