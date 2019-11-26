  <?php
 //connexion à la base de données
 try{
 $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
 $bdd = new PDO('mysql:host=localhost;dbname=infos','root','',$pdo_options);
 
  
  if(!empty($_POST['user_name']) && !empty($_POST['user_pass']))
  {
      $user_name= $_POST['user_name'];
      $user_pass= $_POST['user_pass'];
   
      $req = $bdd->prepare('SELECT user_name FROM users WHERE user_name = :user_name');
      $req->execute(array(':user_name' => $user_name));
      $res = $req->fetch();
       
      if($res)
      {
          var_dump($res);
          die();
        if($user_pass == $res['user_pass'])
        {
            header('Location:indexc.html');
        }
        else
        {
            echo 'Votre pseudo ou mot de passe est incorrect';
        }
      }
   }
   else
   {
       //renvoi du formulaire
   }
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
//}
  
 ?>