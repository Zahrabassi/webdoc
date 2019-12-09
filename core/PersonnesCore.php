<?PHP
include "../config.php";


class PersonnesCore {

	function ajouterPersonnes($Personnes){
		$sql="insert into Personnes (nom,prenom,sexe,adresse,password,telephone) values (:nom,:prenom,:sexe,:adresse,:password,:telephone)";
        $sql2="insert into historique (description) values (:des)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $req2=$db->prepare($sql2);

        $nom=$Personnes->getnom();
        $prenom=$Personnes->getprenom();
        $sexe=$Personnes->getsexe();
        $adresse=$Personnes->getadresse();
        $password=$Personnes->getpassword();
        $telephone=$Personnes->gettelephone();
        $des = "un client " .$nom." ".$prenom . " a ete ajouté ";


		$req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
		$req->bindValue(':sexe',$sexe);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':password',$password);
		$req->bindValue(':telephone',$telephone);
        $req2->bindValue(':des',$des); 

        $req->execute();
        $req2->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherListpersonnes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From personnes";
		$db = config::getConnexion();
		try{
            $liste=$db->query($sql);
            return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

    function supprimerPersonnes($Personnes_id){

        $sql="DELETE FROM Personnes where id= :Personnes_id";
        $sql2="insert into historique (description) values (:des)";

        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req2=$db->prepare($sql2);

        $des = "le client avec l'id :".$Personnes_id." a ete supprimé";
        $req->bindValue(':Personnes_id',$Personnes_id);
        $req2->bindValue(':des',$des);
        try{
            $req->execute();
            $req2->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierPersonnes($Personnes,$Personnes_id){

        $sql="UPDATE Personnes SET nom=:nom,prenom=:prenom,sexe=:sexe,password=:password,adresse=:adresse,telephone=:telephone  WHERE id=:Personnes_id";
        $sql2="insert into historique (description) values (:des)";
        $db = config::getConnexion();
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{
        

        

        $req=$db->prepare($sql);
        $req2=$db->prepare($sql2);
        $password=$Personnes->getpassword();
        $nom=$Personnes->getnom();
        $prenom=$Personnes->getprenom();
        $sexe=$Personnes->getsexe();
        $adresse=$Personnes->getadresse();
        $telephone=$Personnes->gettelephone();

        $des = "le client " .$nom." ".$prenom . " a modifié ses informations ";   

                $datas = array(':Personnes_id'=>$Personnes_id,':email'=>$email, ':nom'=>$nom, ':prenom'=>$prenom, ':password'=>$password,':adresse'=>$adresse,':telephone'=>$telephone);

        $req->bindValue(':Personnes_id',$Personnes_id);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':sexe',$sexe);
        $req->bindValue(':password',$password);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':telephone',$telephone);

        $req2->bindValue(':des',$des);


        //$req->bindValue(':img_name',$img_name);
        
                $s= $req->execute();
                $s2= $req2->execute();

                   // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }
    }
    function recupererPersonnes($Personnes_id){
        $sql="SELECT * from Personnes where id=$Personnes_id";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
     function verifPersonnes($Personnes_email,$Personnes_pass){
        $sql="SELECT * from personnes where Personnes_email=$Personnes_email and Personnes_pass=$Personnes_pass";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }





/*
	function afficherlistMenusParCat($type){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From menu where type ='".$type."'";

        $db = config::getConnexion();
		try{

            $liste=$db->query($sql);
            return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function Incrementerstat($menu,$id){

		$sql="UPDATE menu SET stat=:stat WHERE id=:id";

        $sql="SELECT * from menu where id=$id";
        $db = config::getConnexion();
        try{
            $result=$db->query($sql);
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

        foreach($result as $row){
            $stat = $row['stat'];
        }

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{

                $req=$db->prepare($sql);


                if(!$stat){
                    $stat= 1;
                }else{
                   $stat ++ ;
                }


                $datas = array(':id'=>$id,':stat'=>$stat);

                $req->bindValue(':id',$id);
                $req->bindValue(':stat',$stat);
                $s= $req->execute();

                   // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }
	}

	function supprimerMenu($id){

		$sql="DELETE FROM menu where id= :id";

		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierMenu($menu,$id){

		$sql="UPDATE menu SET name=:name,type=:type,price=:price,ref=:ref,calories=:calories,img=:img,img_name=:img_name,description=:description WHERE id=:id";

		$db = config::getConnexion();
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{
                $req=$db->prepare($sql);

                $name=$menu->getName();
                $type=$menu->getType();
                $price=$menu->getPrice();
                $ref=$menu->getRef();
                $img=$menu->getImg();
                $img_name=$menu->getImgName();
                $calories=$menu->getCalories();
                $description=$menu->getDescription();

                $datas = array(':id'=>$id,':name'=>$name, ':type'=>$type, ':price'=>$price,':ref'=>$ref,':calories'=>$calories,':img'=>$img,':img_name'=>$img_name,':description'=>$description);

                $req->bindValue(':name',$name);
                $req->bindValue(':id',$id);
                $req->bindValue(':type',$type);
                $req->bindValue(':price',$price);
                $req->bindValue(':ref',$ref);
                $req->bindValue(':calories',$calories);
                $req->bindValue(':img',$img);
                $req->bindValue(':img_name',$img_name);

                $req->bindValue(':description',$description);


                $s= $req->execute();

                   // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }
	}


	function recupererMenu($id){
		$sql="SELECT * from menu where id=$id";
		$db = config::getConnexion();
		try{
		    $liste=$db->query($sql);
		    return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}
*/}

?>