<?php
  //connection au serveur
  $cnx = @mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "INFOS" ) ;
 
  //récupération des valeurs des champs:
  //username:
  $user_name     = $_POST["user_name"] ;
  //adresseMAIL:
  $user_email= $_POST["user_email"] ;
  //PASSWORD:
  $user_pass        = $_POST["user_pass"] ;
 
  //création de la requête SQL:
  $sql = "INSERT  INTO users (user_name,user_email,user_pass)
            VALUES ( '$user_name', '$user_email', '$user_pass') " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    header('Location: insertinfo.html');
  exit();
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>