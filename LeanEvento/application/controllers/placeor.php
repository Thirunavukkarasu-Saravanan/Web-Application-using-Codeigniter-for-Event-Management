<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Placeor extends CI_Controller {

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
		$this->comprar();

    }

    public function comprar(){
         $sessiondata = array();
        
        
       $userv =$this->session->userdata('username');

       
       $data['fetch_data'] = $this->user_model->fetch_data();

       $pagedata['til'] = "ComprarBoletos";
            $this->load->view('templates/html_header');
            $this->load->view('templates/title',$data);
            $this->load->view('templates/html_body_start');
            $this->load->view('templates/comprarboletos');
            $this->load->view('templates/html_body_end');
            $this->load->view('templates/html_footer');

    }

    public function comprartic(){

        $this->form_validation->set_rules('ticket_num', 'ticket_num', 'trim|required|min_length[1]');
        $this->form_validation->set_rules('buyer_name', 'buyer_name', 'trim|required|valid_email');
         if ($this->form_validation->run() == FALSE) 
         {
       $sessiondata = array(); 
       $userv =$this->session->userdata('username');
       $rand=$this->input->get('eventid');
       $data['fetch_comp']=$this->user_model->fetch_comp($rand);
       
       $this->load->view('templates/html_header');
       $this->load->view('templates/title');
       $this->load->view('templates/html_body_start');
       $this->load->view('templates/comprar_ticket',$data);
       $this->load->view('templates/html_body_end');
       $this->load->view('templates/html_footer');
         }
         else{
              $rand=$this->input->get('eventid');
              $amt = $this->input->post('event_price');
              $numamt = $this->input->post('ticket_num');
              $totalprice = $amt * $numamt;
              $data = array(
                    'eventid' => $rand,
                    'ticketsbought' => $this->input->post('ticket_num'),
                    'buyer' =>  $this->input->post('buyer_name'),
                    'pricepaid' => $totalprice
                    );
              echo $data;
                if ($this->user_model->insertTicket($data)) {
                $this->session->set_flashdata('msg', '<strong>Tickets Purchased Sucessfully!</strong>');
                redirect('placeor/comprar');
            }
            else{
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center"><strong>Oops! Some Error.  Please try again later!!!</strong></div>');
                }

            }



    }

    public function logout(){
            $sessiondata = array();
            $this->session->sess_destroy();
            redirect('lean/login');
    }




    }
?>