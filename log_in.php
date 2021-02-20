<?php
session_start();
require_once("_functions.php");
$connexion = secure("connexion");
$error = secure("e");
if($connexion) {
    $login = securebdd("login");
    $password = securebdd("password");
	$q="
    SELECT id_user, login, pseudo, password
    FROM users
	WHERE login='$login' AND password='$password';
    ";
    echo $q;
	$num = mysqli_query(startdb(),$q);
	if(mysqli_num_rows($num) === 1) {
		$tab = mysqli_fetch_array($num);
        $_SESSION["id_user"] = (int)$tab["id_user"];
        $_SESSION["login"] = $tab["login"];
        $_SESSION["pseudo"] = $tab["pseudo"];
		header("location:index.php");
	} 
    else {
		header("location:log_in.php?e=1");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("asset/meta.php"); ?>
    <head><title>Toshokan - Connexion</title></head></head>
    
<body>
<?php include('header.php'); ?>
<div class="col-md-5 connexion">
    <h2 class="text-center">Connexion</h2>
    <form method="post" action="log_in.php">
        <div class="form-group">
            <label for="login">Login :</label>
            <input type="text" class="form-control" id="login" name="login" aria-describedby="emailHelp" placeholder="Entrez votre login">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe">
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" class="btn btn-light" name="connexion" value="Connexion"></input>
        </div>
    </form>
    <p class="text-center">ou</p>
    <a href="sign_in.php"><p class="text-center scale">Inscription</p></a>
</div>
<?php include("asset/script.php"); ?>
</body>
</html>