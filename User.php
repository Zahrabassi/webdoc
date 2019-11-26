<?php 
include 'dbconfig.php';
class User{
	private $user_name;
    private $user_pass;
    public $conn;	

	public function __construct($user_name,$user_pass,$conn)
	{
		$this->user_name=$user_name;
		$this->user_pass=$user_pass;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	function getUsername()
	{
		return $this->user_name;
	}
    function getUserpass()
	{
		return $this->user_pass;
		
	}

	public function Logedin($conn,$user_name,$user_pass)
	{
		$req="select * from users where user_name='$user_name' && user_pass='$user_name'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>