<?PHP

include "../Entities/produit.php";
include "/Core/produitCore.php";


$produitCoreInstance=new produitCore();
$list = $produitCoreInstance->afficherListProduits();
$data = array();

  foreach($listProduits as $row) {
    

   array_push($data, ["id" => $row['id'] , 
      "nom" => $row['nom'], 
      "prix" => $row['prix'] ,
      "nb_chambre"=>$row['nb_chambre'],
      "description" => $row['description'] ,
       "localisation"=>$row['localisation']] );
  }



  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // filename for download
  $filename = "product_data_" . date('Ymd') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  $flag = false;
  foreach($data as $row) {
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\r\n";
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    echo implode("\t", array_values($row)) . "\r\n";
  }
  exit;
?>


