<!DOCTYPE html>
<html lang="en">
<head>
<?php include("asset/meta.php"); ?>
    <head><title>Toshokan - Inscription</title></head>
</head>
<body>
<?php include('header.php'); ?>
<div class="col-md-5 inscription">
    <h2 class="text-center">Inscription :</h2>
    <form method="post" action="verification.php">
        <div class="form-group">
            <label for="email">Adresse email :</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="nom@exemple.com" required>
        </div>
        <div class="form-group">
            <label for="pseudo">Pseudo :</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="ex : utilisateurdu75" required>
        </div>
        <div class="form-group">
            <label for="pwd">Mot de passe :</label>
            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Entrez votre mot de passe" required>
        </div>
        <div class="form-group">
            <label for="pwd2">Confirmer votre mot de passe :</label>
            <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="Entrez votre mot de passe" required>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" class="btn btn-light" name="inscription" value="M'inscrire"></input>
        </div>
    </form>
    <p class="text-center">ou</p>
    <a href="log_in.php"><p class="text-center scale">Connexion</p></a>
</div>
<?php include("asset/script.php"); ?>
</body>
</html>