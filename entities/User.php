<?PHP
class User{

	private $user_id;
	private $user_email;
	private $user_name;
	private $user_pass;

	private $joining_date;
	private $description;
	

	
	

	function __construct($user_name,$user_email,$user_pass,$joining_date){
		
		$this->user_name=$user_name;
		$this->user_email=$user_email;
		$this->user_pass=$user_pass;
		$this->joining_date=$joining_date;
	
		

		
	}
	
	function getUser_id(){
		return $this->user_id;
	}
	function getUser_name(){
		return $this->user_name;
	}
	function getUser_email(){
		return $this->user_email;
	}
	function getUser_pass(){
		return $this->user_pass;
	}
	function getJoining_date(){
		return $this->joining_date;
    }
    
   
   

	function setUser_id($user_id){
		$this->user_id = $user_id;
	}
	function setUser_name($user_name){
		$this->user_name = $user_name;
	}
	function setUser_email($user_email){
		$this->user_email = $user_email;
	}
	function setUser_pass($user_pass){
		$this->user_pass= $user_pass;
	}
	function setJoining_date($joining_date){
		$this->joining_date = $joining_date;
    }
   
   
}

?>