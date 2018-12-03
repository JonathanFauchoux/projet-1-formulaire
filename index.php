<?php


?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>projet-1-formulaire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href = "assets/css/styles.css">
    <link rel="stylesheet" href="assets/font/bellota_regular_macroman/stylesheet.css" type="text/css" charset="utf-8" />

</head>
<body>

<form class = "container fullForm">
  <div class="form-row ">
    <div class="form-group col-md-3">
      <img src="assets/img/hackers-poulette-logo-form.png" alt="logo-hackers-poulette" class ="img-fluid logopoulette">
    </div>
    <div class="form-group col-md-9 titreform">
      <h2>Hackers Poulette</h2>
    </div>
    <div class="form-group col-md-2">
      <label for="inputName">Mr/Mme</label>
      <select id="inputState" class="form-control">
        <option selected>Mme.</option>
        <option>Mr.</option>
      </select>
    </div>
    <div class="form-group col-md-5">
      <label for="inputName">Nom</label>
      <input type="text" class="form-control" id="inputName" placeholder="Votre nom">
    </div>
    <div class="form-group col-md-5">
      <label for="inputNikname">Prénom</label>
      <input type="text" class="form-control" id="inputNikname" placeholder="Votre prénom">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="text" class="form-control" id="inputEmail" placeholder="Votre e-mail">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPays">Pays</label>
      <input type="text" class="form-control" id="inputPays" placeholder="Votre pays">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputState">Sujet</label>
      <select id="inputState" class="form-control">
        <option selected>Au sujet de ...</option>
        <option>Livraison</option>
        <option>Materiel</option>
        <option>Nous contacter</option>  
      </select>
    </div>
    <div class="form-group col-md-12">
      <label for="inputtextaraea">Message</label>
      <textarea class="form-control"  id="message" placeholder="Votre message ici."></textarea>
    </div>    
  </div>
  
  <button type="submit" class="btn btn-primary btn-formpoulette">Contacter</button>
</form>

</body>
</html>
