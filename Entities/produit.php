<?PHP
class produit{

	private $id;
	private $nom;
	private $description;
	private $prix;
	private $id_photo;
	private $localisation;
	private $nb_chambre;
		private $id_user;
	

	function __construct($nom,$prix,$nb_chambre,$localisation,$description,$id_photo){
		$this->nom=$nom;
		$this->description=$description;
		$this->prix=$prix;
		$this->id_photo=$id_photo;
		$this->localisation=$localisation;
		$this->nb_chambre=$nb_chambre;
			
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getDescription(){
		return $this->description;
	}
	function getPrix(){
		return $this->prix;
	}
	function getId_photo(){
		return $this->id_photo;
    }
    function getLocalisation(){
        return $this->localisation;
    }
     function getNb_chambre(){
        return $this->nb_chambre;
    }
    
   

	function setId($id){
		$this->id = $id;
	}
	function setNom($nom){
		$this->nom = $nom;
	}
	function setDescription($description){
		$this->description = $description;
	}
	function setPrix($prix){
		$this->prix= $prix;
	}
	function setId_photo($id_photo){
		$this->id_photo = $id_photo;
    }
     function setLocalisation($localisation){
        $this->localisation= $localisation;
    }
    function setNb_chambre($nb_chambre){
        $this->nb_chambre = $nb_chambre;
    }
    
}

?>