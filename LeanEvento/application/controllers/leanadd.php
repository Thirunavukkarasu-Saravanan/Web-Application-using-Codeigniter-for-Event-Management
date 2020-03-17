<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leanadd extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html', 'email'));
        $this->load->library(array('session', 'form_validation', 'email'));

        $this->load->database();
        $this->load->model('user_model');
    }

	public function index()
	{
		$this->mainn();

    }

    public function mainn()

    {
        $sessiondata = array();
        $userv =$this->session->userdata('username');
        $email['username'] = $userv;
        //echo $userv;

         $this->form_validation->set_rules('nombre', 'nombre', 'trim|required');
         $this->form_validation->set_rules('resp', 'resp', 'required|regex_match[/^[a-zA-Z ]*$/]',
                        array('required' => 'You must provide a %s.')
                );
         $this->form_validation->set_rules('lugar', 'lugar', 'required|regex_match[/^[a-zA-Z ]*$/]',
                        array('required' => 'You must provide a %s.')
                );
         $this->form_validation->set_rules('fetcha', 'fetcha', 'required');
         $this->form_validation->set_rules('hora', 'hora', 'trim');
         $this->form_validation->set_rules('valor', 'valor', 'required');


         if ($this->form_validation->run() == FALSE) 
        {
         $this->load->view('templates/html_header');
        $this->load->view('templates/agent_nav');
        $this->load->view('templates/agent_addd');
        }
        else
        {
                $num = $this->user_model->checkcount();
                 $mynum = -1;
                 echo $num;
                    echo $mynum;
                    $mynum = $num;
                    $mynum = $mynum + 1;
                    echo $mynum;

                    $respp = 'saravanan t';
                    echo $respp;
                     $data = array(
                    'eventname' => $this->input->post('nombre'),
                    'eventid' => $mynum,
                    'eventplace'  => $this->input->post('lugar'),
                    'responsible' => $respp,
                    'date' => $this->input->post('fetcha'),
                    'time' => $this->input->post('hora'),
                    'price' => $this->input->post('valor'),
                    'eventcreatedby' => $respp);


                     /*$count_no  = -1;
                     echo $count_no;
                        if($checkcount->num_rows() > 0)
                        {
                            foreach($checkcount->result() as $row)
                            {
                                $count_no = $row['eventid'];
                            }
                             echo 'COUNTER'.$count_no;
                        }  */

                       if ($this->user_model->insertAgevnt($data)) {
                       $this->session->set_flashdata('msg', '<strong>We received your message! Will get back to you shortly!!!</strong>');
                        redirect('leanadd/mainn');
                        }
                else{
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center"><strong>Oops! Some Error.  Please try again later!!!</strong></div>');
                }
       
                    
                    

             redirect('leanadd/mainn');
        }



    }

    public function logout(){
            $sessiondata = array();
            $this->session->sess_destroy();
            redirect('lean/login');
    }




    }
?>