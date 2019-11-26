<?PHP

include "./Entities/produit.php";
include "./Core/produitCore.php";


if (isset($_POST['nom'])  and
    isset($_POST['description'])  and
    isset($_POST['localisation']) and
    isset($_POST['id_photo'])   and
    isset($_POST['prix']) and
     isset($_POST['nb_chambre'])) 
 
    {
    	
    	

$produitInstance =new produit($_POST['nom'],$_POST['prix'],$_POST['nb_chambre'],$_POST['localisation'],$_POST['description'],$_POST['id_photo']);

$produitCoreInstance=new produitCore();
$produitCoreInstance->ajouterProduit($produitInstance);


echo'<script>window.location.href = "indexGestproduit.php";</script>';


	
}else{
	echo "vérifier les champs";
}

//*/
