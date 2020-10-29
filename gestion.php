<?php

  $prenom= $_POST['prenom'];
  $nom= $_POST['nom'];
  $class= $_POST['classe'];
  $dispositifs= $_POST['dispositifs'];
  $amenagements= $_POST['amenagements'];
  $info=$_POST['info'];

  if ($nom==''){
    die("S'il vous plaît entrez un nom");
  }

  if ($prenom==''){
    die("S'il vous plaît entrez un prenom");
  }

  if ($class=='Choisir...'){
    die("S'il vous plaît choisissez une classe");
  }

  

  $base = new PDO('mysql:host=localhost;dbname=st_joseph', 'root', '');
 
  $sth = $base->prepare("INSERT INTO eleve(prenom, nom, classe, info_comp)
  VALUES(:prenom, :nom, :classe, :info_comp)");
  
  $sth->bindParam(':prenom',$prenom);
  $sth->bindParam(':nom',$nom);
  $sth->bindParam(':classe',$class);
  $sth->bindParam(':info_comp',$info);
  $sth->execute();
  $id_eleve = $base->lastInsertId();


  $sth = $base->prepare("INSERT INTO eleve_dispositifs(dispo_id,eleve_id )
  VALUES(:dispo_id, :eleve_id)");
  
  foreach($dispositifs as $id_dispo)
  {
    $sth->bindParam(':dispo_id',$id_dispo); 
    $sth->bindParam(':eleve_id',$id_eleve);
    $sth->execute();
  }

  $sth = $base->prepare("INSERT INTO eleve_amenagements(amen_id,eleve_id )
  VALUES(:amen_id, :eleve_id)");
  
  foreach($amenagements as $id_amen)
  {
    $sth->bindParam(':amen_id',$id_amen); 
    $sth->bindParam(':eleve_id',$id_eleve);
    $sth->execute();
  }

  
?>
