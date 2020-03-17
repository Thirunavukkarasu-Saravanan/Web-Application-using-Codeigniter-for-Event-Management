<?php 
class User_model extends CI_Model
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //insert into user table
    function insertContact($data)
    {
        return $this->db->insert('contact_t', $data);
    }

    function insertUser($data)
    {
        return $this->db->insert('user_t', $data);
    }
    function insertMyevent($data)
    {
    	//$sql = "INSERT INTO `volunteer_t` (`eventid`, `username`) VALUES ('".$fineventid."', '".$userv."')"; 
  
    	return $this->db->insert('volunteer_t', $data);
    }
    function delMyevent($data)
    {
    	return $this->db->delete('volunteer_t',$data);
    }

    function delEvent($data)
    {
        return $this->db->delete('events_t',$data);
    }


    function checkcount()
    {
        //$query= 'SELECT COUNT(eventid) as "eventid" FROM `events_t`';
        $this->db->select('eventid');
        $num_cnt = $this->db->count_all_results('events_t');
        
        return $num_cnt;

    }

    function insertAgevnt($data)
    {
         return $this->db->insert('events_t', $data);
    }
    function is_validuser($email,$password)
    {
    	$sql = "select * from user_t where mail = '" . $email . "' and password = '" . $password. "'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    function user_type($email, $password)
    {
        $this->db->where('mail', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('user_t');
        $row = $query->row();
        $user_id = $row->usertype;

        return $user_id;
    }

    function fetch_data()
    {

    	$query = $this->db->get("events_t");
    	return $query;
    }

    function fetch_comp($rand)
    {
         $this->db->select("eventid, eventname, price  ");
         $this->db->where('eventid', $rand);
        $this->db->from('events_t');
        $query=$this->db->get();
        return $query->result();
        
        //$query = $this->db->get("events_t");
        //return $query;
    }

    function insertTicket($data){
        return $this->db->insert('tickets_t', $data);
    }

    function fetch_volunteer(){
    	$query= "SELECT a.eventid,a.eventname,a.eventplace,a.responsible,b.fullname,b.address,b.mail FROM events_t a,user_t b,volunteer_t c WHERE c.eventid = a.eventid AND c.username = b.mail";
    	$voluntdet = $this->db->query($query);
    	return $voluntdet;
    }

    function fetch_user($email)
    {
    	$this->db->select("mail,fname,lname,password,pin,usertype");
    	$this->db->from('user_t');
    	$this->db->where('mail',$email);
    	$query=$this->db->get();
    	return $query->result();
    }

    function get_data_myevent($userv)
    {
    	$query1= "SELECT a.eventname, a.eventid, a.price, a.date, a.eventplace, b._uniqueid FROM events_t a, volunteer_t b WHERE a.eventid = b.eventid and b.username = '".$userv."' ";
    	$myeventfetch = $this->db->query($query1);
    	return $myeventfetch;

    }





}
?>