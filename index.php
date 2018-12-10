<?php
$nomErr = $prenomErr = $emailErr = $messageErr =  "";
$nom = $prenom = $email = $message =  "";
  
  

 $options = array(
   'genre' => FILTER_SANITIZE_STRING,
  'nom' 	=> FILTER_SANITIZE_STRING,
  'prenom' 	=> FILTER_SANITIZE_STRING,
  'email' 		=> FILTER_VALIDATE_EMAIL,
  'pays' 	=> FILTER_SANITIZE_STRING,
  'sujet' 		=> FILTER_SANITIZE_STRING,
  'message' 		=> FILTER_SANITIZE_STRING);
  $result = filter_input_array(INPUT_POST, $options);
  
 
     
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["nom"])) {
        $nomErr = "Votre nom est requis";
      } else {
        $nom = ($_POST["nom"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
          $nomErr = "Seulement les lettres et espaces sont possible"; 
        }
      }
        if (empty($_POST["prenom"])) {
          $prenomErr = "Votre prénom est requis";
        } else {
          $prenom = ($_POST["prenom"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
            $prenomErr = "Seulement les lettres et espaces sont possible"; 
          }
        }
      
      if (empty($_POST["email"])) {
        $emailErr = "Votre e-mail est requis";
      } else {
        $email = ($_POST["email"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
          $emailErr = "Seulement les lettres et espaces sont possible"; 
        }
      }
      if (empty($_POST["message"])) {
        $messageErr = "Votre message est requis";
      } else {
        $message = ($_POST["message"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
          $messageErr = "Seulement les lettres et espaces sont possible"; 
        }
      }
    
    }
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

<form method="post" action="index.php"class = "container fullForm">
  
  <div class="form-row ">
    <div class="form-group col-md-3">
      <img src="assets/img/hackers-poulette-logo-form.png" alt="logo-hackers-poulette" class ="img-fluid logopoulette">
    </div>
    <div class="form-group col-md-9 titreform">
      <h2>Hackers Poulette Contact</h2>
    </div>
    <div class="form-group col-md-2">
      <label for="inputName">Mr/Mme</label>
      <select id="inputState" class="form-control" name ="genre">
        <option selected>Mme.</option>
        <option>Mr.</option>
      </select>
    </div>
    <div class="form-group col-md-5">
      <label for="inputName">Nom</label>
      <span class="error">* <?php echo $nomErr;?></span>
      <input type="text" name = "nom" class="form-control" id="inputName" placeholder="Votre nom">
    </div>
    <div class="form-group col-md-5">
      <label for="inputNikname">Prénom</label>
      <span class="error">* <?php echo $prenomErr;?></span>
      <input type="text" name = "prenom" class="form-control" id="inputNikname" placeholder="Votre prénom">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <span class="error">* <?php echo $emailErr;?></span>
      <input type="text" name = email class="form-control" id="inputEmail" placeholder="Votre e-mail">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPays">Pays</label>
      <input type="text" name = "pays" class="form-control" id="inputPays" placeholder="Votre pays">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputState">Sujet</label>
      <select id="inputState" name = "sujet" class="form-control">
        <option selected>Au sujet de ...</option>
        <option>Livraison</option>
        <option>Materiel</option>
        <option>Nous contacter</option>  
      </select>
    </div>
    <div class="form-group col-md-12">
      <label for="inputtextaraea">Message</label>
      <span class="error">* <?php echo $messageErr;?></span>
      <textarea name = "message" class="form-control"  id="message" placeholder="Votre message ici."></textarea>
    </div>    
  </div>
  
  <button type="submit" class="btn btn-primary btn-formpoulette">Contacter</button>

<?php
print_r($result);

 if ($result != null AND $result != FALSE) {

  echo "Tous les champs ont été nettoyés !";

} else {

  echo "Un champ est vide ou n'est pas correct!";

}

?>

</form>


</body>
</html>
