<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Création/Modification élève </title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

  <link href="select.css" rel="stylesheet">

</head>

<body>
  <!-- Navigation -->
 <?php
 include 'header.html';
 $base = new PDO('mysql:host=localhost;dbname=st_joseph', 'root', '');
 $datadispositif = $base->query("SELECT * FROM dispositifs")->fetchAll();
 $dataaménagements = $base->query("SELECT * FROM amenagement")->fetchAll();
?>

<!-- /.row -->


<!-- /.container -->

    <form method="POST" action="gestion.php">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputNom4">Nom</label>
          <input type="text" name="nom" class="form-control" id="inputEmail4" placeholder="Nom">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPrenom4">Prenom</label>
          <input type="text" name="prenom" class="form-control"  placeholder="Prenom">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputState">Classe</label>
          <select id="inputState" class="form-control" name="classe">
            <option selected>Choisir...</option>
            <option>6ème</option>
            <option>5ème</option>
            <option>4ème</option>
            <option>3ème</option>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label >Dispositif</label>
          <select id='select_dispositif'  class="form-control" name="dispositifs">
          <option selected>Choisir...</option>
          <?php  foreach($datadispositif as $dispositif)
            { ?>
             <option value="<?php echo $dispositif['id']?>"  >
              <?php echo $dispositif['Nom'] ?>
             </option> 
            <?php } ?>
          </select>
          <div class="row" id="row1"></div>
        </div>

        <div class="form-group col-md-6">
          <label >Aménagements</label>
          <select id='select_amenagements'  class="form-control" name="amenagements">
          <option selected>Choisir...</option>
          <?php  foreach($dataaménagements as $aménagements)
            { ?>
             <option value="<?php echo $aménagements['id']?>"  >
              <?php echo $aménagements['nom'] ?>
             </option> 
            <?php } ?>
          </select>
          <div class="row" id="row2"></div>
        </div>

      </div>
      <p>
       <label for="ameliorer">Informations complémentaires</label><br />
       <textarea class="col-lg-6" name="info" id="info"></textarea>
   </p>
      
        </div>
        
      <button type="submit" class="btn btn-primary" >Créer</button>
    </form>


    






<script src="js/modif.js"></script>
<script src="js/modifamenagement.js"></script>





<br><br><br>


<?php
    $base = new PDO('mysql:host=localhost;dbname=st_joseph', 'root', '');
 $dataeleve = $base->query("SELECT * FROM eleve")->fetchAll(); ?>

    <select  class="select_infoeleve">
    <option selected>Choisir un élève à modifier...</option>
   <?php  foreach($dataeleve as $info)
  { ?>
   <option value="<?php echo $info['id']?>" ><?php echo $info['prenom']?>   <?php echo $info['nom']?>
  </option> 
  <?php } ?>
</select>
