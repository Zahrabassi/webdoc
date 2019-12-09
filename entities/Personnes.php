<?PHP
class Personnes{

	private $id;
	private $nom;
	private $prenom;
	private $sexe;
	private $adresse;
	private $password;
	private $telephone;
	

	
	

	function __construct($id,$nom,$prenom,$sexe,$adresse,$password,$telephone){
		
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->sexe=$sexe;
		$this->adresse=$adresse;
		$this->password=$password;
		$this->telephone=$telephone;
	
		

		
	}
	
	function getid(){
		return $this->id;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getsexe(){
		return $this->sexe;
	}
	function getadresse(){
		return $this->adresse;
	}
	function getpassword(){
		return $this->password;
    }
	function gettelephone(){
		return $this->telephone;
    }
   
   

	function setid($id){
		$this->id = $id;
	}
	function setprenom($prenom){
		$this->prenom = $prenom;
	}
	function setnom($nom){
		$this->nom = $nom;
	}
	function setsexe($sexe){
		$this->sexe = $sexe;
	}
	function setadresse($adresse){
		$this->adresse= $adresse;
	}
	function setpassword($password){
		$this->password = $password;
    }
	function settelephone($telephone){
		$this->telephone = $telephone;
    }   
   
}

?>