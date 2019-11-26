<?PHP


class PhotoCore {



	function ajouterPhoto($photo){
		$sql="insert into photo (img,id_photo) values (:img,:id_photo)";
		$db =new PDO('mysql:host=localhost;dbname=immobilier_db', 'root', '');
		try{
        $req=$db->prepare($sql);

        $img=$photo->getImg();
        
        $id_photo=$photo->getId_photo();
        


        
        //$stat=$menu->getStat();


		$req->bindValue(':img',$img);
		
		$req->bindValue(':id_photo',$id_photo);
		


            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}
     function afficherlistPhotosParCat($id_photo){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From photo where id_photo ='".$id_photo."' ";

        $db =new PDO('mysql:host=localhost;dbname=immobilier_db', 'root', '');
        try{

            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherlistPhotosParCat2($id_photo){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From photo where id_photo ='".$id_photo."' limit 1 ";

        $db =new PDO('mysql:host=localhost;dbname=immobilier_db', 'root', '');
        try{

            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimerPhoto($id){

        $sql="DELETE FROM photo where id= :id";

       $db =new PDO('mysql:host=localhost;dbname=immobilier_db', 'root', '');
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

    /*function afficherListMenus(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From menu";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



    function afficherlistPhotosParCat($nature){
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
*/
}

?>