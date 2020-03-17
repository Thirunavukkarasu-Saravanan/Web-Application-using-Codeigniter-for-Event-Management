<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lean extends CI_Controller {

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
		$this->home();
		/*$pagedata['til'] = "Home";
		$this->load->view('templates/html_header');
		$this->load->view('templates/title',$pagedata);
		$this->load->view('templates/html_body_start');
		//$this->load->view('templates/nav');
		$pagedata['d1'] = "just a test";
		$this->load->view('templates/comprarboletos.php');
		//$this->load->view('lean_home',$pagedata);
		$this->load->view('templates/html_body_end');
		$this->load->view('templates/html_footer');*/
	}

    public function evt($id){

        $pagedata['til'] = "Home";
        $this->load->view('templates/html_header');
        $this->load->view('templates/title',$pagedata);
        $this->load->view('templates/html_body_start');
        $pagedata['d1'] = $id;
        $this->load->view('lean_home',$pagedata);
        $this->load->view('templates/html_body_end');
        $this->load->view('templates/html_footer');
    }
	public function home()
    {
        //if ($qa == "") {$qa = "Home";}
    	$pagedata['til'] = "Home";
    	$this->load->view('templates/html_header');
    	$this->load->view('templates/title',$pagedata);
    	$this->load->view('templates/html_body_start');
    	$pagedata['d1'] = "just a test";
    	$this->load->view('lean_home',$pagedata);
    	$this->load->view('templates/html_body_end');
    	$this->load->view('templates/html_footer');

    }

    public function quenes()
    {
    	$pagedata['til'] = "Quenes Somos";
    	$this->load->view('templates/html_header');
    	$this->load->view('templates/title',$pagedata);
    	$this->load->view('templates/html_body_start');
    	$this->load->view('templates/quenes');
    	$this->load->view('templates/html_body_end');
    	$this->load->view('templates/html_footer');


    }

    public function registrate()
    {
        $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('Password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );
        $this->form_validation->set_rules('Nombre', 'Nombre', 'required|regex_match[/^[a-zA-Z ]*$/]');
        $this->form_validation->set_rules('Apellido', 'Apellido', 'required|regex_match[/^[a-zA-Z ]*$/]');
        $this->form_validation->set_rules('Address', 'Address', 'required|regex_match[/^[a-zA-Z ]*$/]');
        $this->form_validation->set_rules('City', 'City', 'required|regex_match[/^[a-zA-Z ]*$/]');
        $this->form_validation->set_rules('Postal', 'Postal', 'trim|required|regex_match[/^[0-9]{5}$/]');
        //$this->form_validation->set_rules('Nombre', 'Nombre', 'required|regex_match[/^[a-zA-Z ]*$/]');

         
        if ($this->form_validation->run() == FALSE) 
        {

        	$pagedata['til'] = "register";
        	$this->load->view('templates/html_header');
        	$this->load->view('templates/title',$pagedata);
        	$this->load->view('templates/html_body_start');
        	$this->load->view('templates/registrate');
        	$this->load->view('templates/html_body_end');
        }
        else{
                //$userotype = $this->input->post('userType')
                    $emaill = $this->input->post('Email');
                    $usern = preg_split("/@/", $emaill); 

                    echo $usern[0];
                    echo $this->input->post('Appelido');
                    $data = array(
                    'mail' => $this->input->post('Email'),
                    'username' => $usern[0],
                    'Password'  => $this->input->post('Password'),
                    'fname' => $this->input->post('Nombre'),
                    'lname' => $this->input->post('Apellido'),
                    'fullname' =>  $this->input->post('Nombre').$this->input->post('Apellido'),
                    'address' => $this->input->post('Address'),
                    'city' => $this->input->post('City'),
                    'pin' => $this->input->post('Postal'),
                    'usertype' => $this->input->post('userType'));

            $this->load->view('templates/inciar_session');
            if ($this->user_model->insertUser($data)) {
                $this->session->set_flashdata('msg', '<b>Sucessfully Submitted</b>');
                redirect('lean/registrate');
            }
            else{
                $this->session->set_flashdata('msg', '<b> Unsucessful, Please try again.</b>');
                }
        }    
        	
    }

    public function login()
    {


        $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
       // echo 'after validation';

        if ($this->input->post('entra') == "Entrae" AND $this->form_validation->run() == true) {
            echo 'in loop';

            $username = $this->input->post('Email');
            $password = $this->input->post('lgnpwd');

            echo $username;
            echo $password;

            $is_valid = $this->user_model->is_validuser($username, $password);
            if ($is_valid > 0) {
                $sessiondata = array(
                    'username' => $username,
                    'password' => $password
                );
                $this->session->set_userdata($sessiondata);


                $role = $this->user_model->user_type($username, $password);

                if ($role == 1) {
                    redirect("lean/individual",$sessiondata);
                }elseif ($role == 2){
                    redirect("lean/quenes");
                }
                elseif ($role == 3){
                  redirect("lean/agent");  

                }
            }

                else{
                    echo $username;
                    echo $password;
                    echo $sessiondata;
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center"><strong>Invalid username and password!</strong></div>');
                redirect('lean/login');
                }

                
            }
    	
    	$pagedata['til'] = "login";
    	$this->load->view('templates/html_header');
    	$this->load->view('templates/title',$pagedata);
    	$this->load->view('templates/html_body_start');
    	$this->load->view('templates/inciar_session');
    	$this->load->view('templates/html_body_end');
    }

    public function contact()
    {

        
        $this->form_validation->set_rules('Nombre', 'Nombre', 'required|regex_match[/^[a-zA-Z ]*$/]');
        $this->form_validation->set_rules('Appelido', 'Appelido', 'required|regex_match[/^[a-zA-Z ]*$/]');
        $this->form_validation->set_rules('Correo', 'Correo', 'trim|required|valid_email');
        $this->form_validation->set_rules('Tema', 'Tema', 'trim|required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('Mensaje', 'Mensaje', 'trim|required|min_length[2]');

        if ($this->form_validation->run() == FALSE) 
        {
        	$pagedata['til'] = "Contactus";
        	$this->load->view('templates/html_header');
        	$this->load->view('templates/title',$pagedata);
        	$this->load->view('templates/html_body_start');
        	$this->load->view('templates/contacto');
        	$this->load->view('templates/html_body_end');
        }
        else
        {
            $data = array(
                    'fname' => $this->input->post('Nombre'),
                    'lname' => $this->input->post('Appelido'),
                    'mail'  => $this->input->post('Correo'),
                    'topic' => $this->input->post('Tema'),
                    'message' => $this->input->post('Mensaje'));

            if ($this->user_model->insertContact($data)) {
                $this->session->set_flashdata('msg', '<strong>We received your message! Will get back to you shortly!!!</strong>');
                redirect('lean/contact');
            }
            else{
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center"><strong>Oops! Some Error.  Please try again later!!!</strong></div>');
                }

        }
    }

    public function agent(){
        $sessiondata = array();
        
        
       $userv =$this->session->userdata('username');
       $this->load->view('templates/html_header');
       $this->load->view('templates/agent_nav');
       $this->load->view('templates/agent_hme');
        $this->load->view('templates/indi_nav_footer');

        }

     public function agent_home(){
        $sessiondata = array();
         $this->load->view('templates/html_header');
       $this->load->view('templates/agent_nav');

       $this->load->view('templates/agent_hme');
       $this->load->view('templates/indi_nav_footer');

       
       }   

    public function agent_volunt(){
        $sessiondata = array();
        $this->load->view('templates/html_header');
        $this->load->view('templates/agent_nav');
        //$data['get_data_myevent'] = $this->user_model->get_data_myevent($userv);
        $data['fetch_volunteer'] = $this->user_model->fetch_volunteer();
         $this->load->view('templates/agent_volunt',$data);
          //$this->load->view('templates/indi_nav_footer');

        
    }   

    public function agent_add(){
        $sessiondata = array();
        $data['fetch_data'] = $this->user_model->fetch_data();

         $this->load->view('templates/html_header');
        $this->load->view('templates/agent_nav');
        $this->load->view('templates/agent_mainevent',$data);

        if (!empty($this->input->post('deleid')))
        {

            $deleventid = $this->input->post('deleid');
            $data = array ('eventid' => $deleventid);
           // echo "entered";
            //echo $deleventid;
            //echo $userv;

            if ($this->user_model->delEvent($data)) {
                $this->session->set_flashdata('msg', '<b>Event has been deleted successfully.</b>');
                redirect('lean/agent_add');
                //echo "Event has been deleted from your events successfully!! ";
            }
            else{
                echo "fail myevents";
            }


        }

    }
    public function agent_profile(){
        $sessiondata = array();
        $userv =$this->session->userdata('username');
         
        $email['username'] = $userv;
        
      
        
         $this->data['fetch_us'] = $this->user_model->fetch_user($userv);
        
        $this->load->view('templates/html_header');
        $this->load->view('templates/agent_nav');
        $this->load->view('templates/indi_prof',$this->data);


        $this->load->view('templates/indi_nav_footer');
         
        //$this->data['fetch_us'] = $this->user_model->fetch_user($userv);

    }

    public function individual(){
        
        //$this->load->library('session');

        $sessiondata = array();
        
        
       $userv =$this->session->userdata('username');
       //echo $userv;
        //$pss = $this->session->set_userdata('password');

        //echo "random";
        
        //echo "ez";
        //echo $pss;
        //$this->session->has_userdata($sessiondata);


       // echo $sessiondata;
        //echo $username;
        $this->load->view('templates/html_header');
        $this->load->view('templates/indi_nav.php');

        $data['fetch_data'] = $this->user_model->fetch_data();
        //$data = array('fetch_data'= $this->user_model->fetch_data());['fetch_data'] = $this->user_model->fetch_data();

        $this->load->view('templates/indi_main.php',$data,$sessiondata); 


        if (!empty($this->input->post('eventid')))
            


        {
            $fineventid = $this->input->post('eventid');

            $data = array ('eventid' => $fineventid,'username'=> $userv);
            echo "entered";
            echo $fineventid;
            echo $userv;
            if ($this->user_model->insertMyevent($data)) {

                echo "Successfully added to my events";
            }
            else{
                echo "fail myevents";
            }
        }
        $this->load->view('templates/indi_nav_footer.php');



    }

    public function indi_myevents(){

        $sessiondata = array();
        $userv =$this->session->userdata('username');
         $data['get_data_myevent'] = $this->user_model->get_data_myevent($userv);
        //$this->user_model->get_data_myevent($userv)

        $this->load->view('templates/html_header');
        $this->load->view('templates/indi_nav');
        $this->load->view('templates/indi_myevents',$data);


        if (!empty($this->input->post('delid')))
        {

            $deleventid = $this->input->post('delid');
            $data = array ('_uniqueid' => $deleventid);
           // echo "entered";
            //echo $deleventid;
            //echo $userv;

            if ($this->user_model->delMyevent($data)) {
                $this->session->set_flashdata('msg', '<b>Event has been deleted from your events successfully!!</b>');
                redirect('lean/indi_myevents');
                //echo "Event has been deleted from your events successfully!! ";
            }
            else{
                echo "fail myevents";
            }


        }

        $this->load->view('templates/indi_nav_footer');


    }

    public function indi_profile()
    {
       $sessiondata = array();
        $userv =$this->session->userdata('username');
         //$data['username'] =  $userv;
        $email['username'] = $userv;
        echo $userv;
         //$data['fetch_user'] = $this->user_model->fetch_user($userv);
        $this->data['fetch_us'] = $this->user_model->fetch_user($userv);
         //echo $userv;
        $this->load->view('templates/html_header');
        $this->load->view('templates/indi_nav');
        $this->load->view('templates/indi_prof',$this->data);


        $this->load->view('templates/indi_nav_footer');
         
    } 

    public function fundaciones(){

    }

    

    public function logout(){
            $sessiondata = array();
            $this->session->sess_destroy();
            redirect('lean/login');
    }




}
?>