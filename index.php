<!DOCTYPE html>
<html lang="fr">

<?php
include 'form.php';
?>


<body>
    




<?php


/******************formulaire*********************/ 



   if ( isset( $_POST['submit'] ) ) {
    
     $nom = $_POST['nom']; 
     $prenom = $_POST['prenom']; 
     $age = $_POST['age'];
     $sexe = $_POST['sexe'];

     echo htmlspecialchars($nom),htmlspecialchars($prenom),htmlspecialchars($age),htmlspecialchars($sexe);
     
  }



?>






</body>
</html>