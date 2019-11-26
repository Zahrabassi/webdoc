<?PHP
include "photoCore.php";

$photoCoreInstance=new photoCore();

if (isset($_POST["id"]))
 	{
    $photoCoreInstance->supprimerPhoto($_POST["id"]);

	header('Location: ../indexGestproduit.php');
	}

?>