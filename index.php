<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Suivi des élèves </title>

  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/heroic-features.css" rel="stylesheet">

  <link href="/css/select.css" rel="stylesheet">

</head>

<body>


  <!-- Navigation -->
<?php
 include "./header.html" ;
 // 4. En php récupérer la classe correspondante dans l'url de la page
 $classe= isset($_GET['class'])
 ? $_GET['class']
 : '';

  if (isset($_GET['class']))
  {
    $classe = $_GET['class'];
  }
  else
  {
    $classe = '';
  }

 
 $base = new PDO('mysql:host=localhost;dbname=st_joseph', 'root', '');
 ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Aménagement pour les élèves</h1>
      <p1> Choisir une classe :  </p1>

     <select class="class_select">
     <option></option>

      <option value="6ème"> 6ème</option>
      <option value="5ème"> 5ème</option>
      <option value="4ème"> 4ème</option>
      <option value="3ème"> 3ème</option>
      
      <option></option>
</select>
<a href="eleve.php">création d'élève </a>  <a href="modif.php">aménagement </a>
    </header>
   
    
    <!-- Page Features -->
    <div class="row text-center">

    <?php
if ($classe=='6ème')
{
  $data = $base->query("SELECT * FROM eleve WHERE classe='$classe'")->fetchAll();
  
    foreach ($data as $eleve)
     {
       $id_eleve=$eleve['id']; 
      $dispositifs = $base->query("SELECT id, Nom
      FROM   eleve_dispositifs 
             INNER JOIN dispositifs
                   ON eleve_dispositifs.dispo_id = dispositifs.id
      WHERE eleve_dispositifs.eleve_id ='$id_eleve'")->fetchAll();

      $amenagements = $base->query("SELECT id, nom
      FROM   eleve_amenagements 
       INNER JOIN amenagement
             ON eleve_amenagements.amen_id = amenagement.id
      WHERE eleve_amenagements.eleve_id ='$id_eleve'")->fetchAll();
?>
      
      <div class="col-lg-6 col-md-6 mb-4">
    <div class="card h-100">
      <img class="card-img-top" src="http://placehold.it/500x325" alt="">
      <div class="card-body">
        <h4 class="card-title"><?php echo $eleve['prenom'] ; echo " "; echo $eleve['nom']; ?> </h4>
        <h5 class="dispositifs">Dispositifs : </h5>

        <?php foreach($dispositifs as $dispo)
        { ?>
        <p class="card-text"><?php echo $dispo['Nom']; ?></p>
        <?php } ?>



        <h6 class="amenagements">Aménagements : </h6>
        <?php foreach($amenagements as $amen)
        { ?>
        <p class="card-text"><?php echo $amen['nom']; ?> </p>
        <?php } ?>


<?php if( $eleve['info_comp'] !='')
{?>
        <h6 class="IC">Informations complémentaires: </h6>
        <p class="card-text"><?php echo $eleve['info_comp']; ?> </p>
<?php } ?>

      </div>
      <div class="card-footer">
       
      </div>
    </div>
   </div>
   <?php
       
     
    }
}
   else if ($classe=='5ème') 
   {
    $data = $base->query("SELECT * FROM eleve WHERE classe='$classe'")->fetchAll();
  
    foreach ($data as $eleve)
    {
      $id_eleve=$eleve['id']; 
      $dispositifs = $base->query("SELECT id, Nom
      FROM   eleve_dispositifs 
             INNER JOIN dispositifs
                   ON eleve_dispositifs.dispo_id = dispositifs.id
      WHERE eleve_dispositifs.eleve_id ='$id_eleve'")->fetchAll();

$amenagements = $base->query("SELECT id, nom
FROM   eleve_amenagements 
 INNER JOIN amenagement
       ON eleve_amenagements.amen_id = amenagement.id
WHERE eleve_amenagements.eleve_id ='$id_eleve'")->fetchAll();
      ?>
        ?>
         <div class="col-lg-6 col-md-6 mb-4">
    <div class="card h-100">
      <img class="card-img-top" src="http://placehold.it/500x325" alt="">
      <div class="card-body">
        <h4 class="card-title"><?php echo $eleve['prenom'] ; echo " "; echo $eleve['nom']; ?> </h4>
        <h5 class="dispositifs">Dispositifs : </h5>
        <?php foreach($dispositifs as $dispo)
        { ?>
        <p class="card-text"><?php echo $dispo['Nom']; ?></p>
        <?php } ?>

    

        <h6 class="amenagements">Aménagements : </h6>
        <?php foreach($amenagements as $amen)
        { ?>
        <p class="card-text"><?php echo $amen['nom']; ?> </p>
        <?php } ?>


<?php if( $eleve['info_comp'] !='')
{?>
        <h6 class="IC">Informations complémentaires: </h6>
        <p class="card-text"><?php echo $eleve['info_comp']; ?> </p>
<?php } ?>

      </div>
      <div class="card-footer">
       
      </div>
    </div>
   </div>
     <?php
       }
       
  }
  else if ($classe=='4ème') 
  {
    $data = $base->query("SELECT * FROM eleve WHERE classe='$classe'")->fetchAll();
  
    foreach ($data as $eleve)
    {
      $id_eleve=$eleve['id']; 
      $dispositifs = $base->query("SELECT id, Nom
      FROM   eleve_dispositifs 
             INNER JOIN dispositifs
                   ON eleve_dispositifs.dispo_id = dispositifs.id
      WHERE eleve_dispositifs.eleve_id ='$id_eleve'")->fetchAll();

$amenagements = $base->query("SELECT id, nom
FROM   eleve_amenagements 
 INNER JOIN amenagement
       ON eleve_amenagements.amen_id = amenagement.id
WHERE eleve_amenagements.eleve_id ='$id_eleve'")->fetchAll();
      ?>
        ?>
          <div class="col-lg-6 col-md-6 mb-4">
    <div class="card h-100">
      <img class="card-img-top" src="http://placehold.it/500x325" alt="">
      <div class="card-body">
        <h4 class="card-title"><?php echo $eleve['prenom'] ; echo " "; echo $eleve['nom']; ?> </h4>
        <h5 class="dispositifs">Dispositifs : </h5>
        <?php foreach($dispositifs as $dispo)
        { ?>
        <p class="card-text"><?php echo $dispo['Nom']; ?></p>
        <?php } ?>
        

       

        <h6 class="amenagements">Aménagements : </h6>
        <?php foreach($amenagements as $amen)
        { ?>
        <p class="card-text"><?php echo $amen['nom']; ?> </p>
        <?php } ?>
 

        <p class="card-text"><?php echo $eleve['aménagements']; ?> </p>

        <?php if( $eleve['info_comp'] !='')
{?>
        <h6 class="IC">Informations complémentaires: </h6>
        <p class="card-text"><?php echo $eleve['info_comp']; ?> </p>
<?php } ?>

      </div>
      <div class="card-footer">
       
      </div>
    </div>
   </div>
    <?php
      }
      
 }
 else if ($classe=='3ème') 
 {
  $data = $base->query("SELECT * FROM eleve WHERE classe='$classe'")->fetchAll();
  
    foreach ($data as $eleve)
    {
      $id_eleve=$eleve['id']; 
      $dispositifs = $base->query("SELECT id, Nom
      FROM   eleve_dispositifs 
             INNER JOIN dispositifs
                   ON eleve_dispositifs.dispo_id = dispositifs.id
      WHERE eleve_dispositifs.eleve_id ='$id_eleve'")->fetchAll();

$amenagements = $base->query("SELECT id, nom
FROM   eleve_amenagements 
 INNER JOIN amenagement
       ON eleve_amenagements.amen_id = amenagement.id
WHERE eleve_amenagements.eleve_id ='$id_eleve'")->fetchAll();
      ?>
        ?>
         <div class="col-lg-6 col-md-6 mb-4">
    <div class="card h-100">
      <img class="card-img-top" src="http://placehold.it/500x325" alt="">
      <div class="card-body">
        <h4 class="card-title"><?php echo $eleve['prenom'] ; echo " "; echo $eleve['nom']; ?> </h4>
        <h5 class="dispositifs">Dispositifs : </h5>
        <?php foreach($dispositifs as $dispo)
        { ?>
        <p class="card-text"><?php echo $dispo['Nom']; ?></p>
        <?php } ?>
        

   
        <h6 class="amenagements">Aménagements : </h6>
        <?php foreach($amenagements as $amen)
        { ?>
        <p class="card-text"><?php echo $amen['nom']; ?> </p>
        <?php } ?>


        <?php if( $eleve['info_comp'] !='')
{?>
        <h6 class="IC">Informations complémentaires: </h6>
        <p class="card-text"><?php echo $eleve['info_comp']; ?> </p>
<?php } ?>

      </div>
      <div class="card-footer">
       
      </div>
    </div>
   </div>
   <?php
     }
     
}
include './footer.html';
?>
<script src="js/liste.js"></script>
   