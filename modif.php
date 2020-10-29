<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Création/Modification élève </title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/heroic-features.css" rel="stylesheet">
  <link href="modif.css" rel="stylesheet">


</head>

<body>


  <!-- Navigation -->
 <?php
 include 'header.html';
 
 $base = new PDO('mysql:host=localhost;dbname=st_joseph', 'root', '');
 $datadispositif = $base->query("SELECT * FROM dispositifs")->fetchAll();

 ?>
  <select class="class_select2">
     <option></option>

      <option value="6ème"> 6ème</option>
      <option value="5ème"> 5ème</option>
      <option value="4ème"> 4ème</option>
      <option value="3ème"> 3ème</option>
      
      <option></option>
</select>
<br><br><br><br><br><br><br><br><br>

<select  class="select_dispositif">
    <option id="w" selected>Choisir...</option>
   <?php  foreach($datadispositif as $dispositif)
  { ?>
   <option value="<?php echo $dispositif['id']?>"  >
    <?php echo $dispositif['Nom'] ?>
  </option> 
  <?php } ?>
</select>
<div class="row" id="row1"></div>






<script src="js/modif.js"></script>
<?php include 'footer.html' ?>