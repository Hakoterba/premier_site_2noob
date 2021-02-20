<?php
    session_start();
    require_once("_functions.php");
    $titre = secure("titre");
    $auteur = secure("auteur");
    $couverture = secure("couverture");
    $description = secure("description");
    $avis = secure("avis");
    $categorie = secure("categorie");
    $insert = secure("insert");

    if($insert) {
        if($categorie == 1) {
            $q = "INSERT INTO `mangas` VALUES (NULL, '$titre', '$auteur', '$couverture', '$description', '$avis');";
            mysqli_query(startdb(),$q);
            header("location:manga_s.php");            
        }
        if($categorie == 2) {
            $q = "INSERT INTO `animes` VALUES (NULL, '$titre', '$auteur', '$couverture', '$description', '$avis');";
            mysqli_query(startdb(),$q);
            header("location:anime_s.php");            
        }
        if($categorie == 3) {
            $q = "INSERT INTO `films` VALUES (NULL, '$titre', '$auteur', '$couverture', '$description', '$avis');";
            mysqli_query(startdb(),$q);
            header("location:film_s.php");            
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("asset/meta.php"); ?>
    <title>Document</title>
</head>
<body>
    <?php include("header.php"); ?>
	<div class="container p-5">
		<form class="form-horizontal w-75 mx-auto p-5" action="add_i.php" method="post" style="background-color: rgba(0,0,0,0.5) !important;border:solid 0.5px transparent;border-radius:20px;">
        <h1 class="text-center">Ajout d'un article</h1>
			<fieldset>
                <div class="row mt-2">
                    <div class="form-group col-6">
                        <label for="titre"><p>Titre :</p></label>
                        <input type="title" class="form-control" id="titre" name="titre">
                    </div>
                </div>
            
                <div class="row">
                    <div class="form-group col-6">
                        <label for="titre"><p>Auteur :</p></label>
                        <input type="text" class="form-control" id="auteur" name="auteur">
                    </div>
                </div>
            
                <div class="row">
                    <div class="form-group col-6">
                        <label for="couverture"><p>Couverture :</p></label>
                        <input type="text" class="form-control" id="cover" name="couverture">
                    </div>
                </div>
            
                <select name="categorie" class="form-select my-3" aria-label="Default select example">
                <option selected>Choisissez une catégorie :</option>
                    <option value="1">Manga</option>
                    <option value="2">Anime</option>
                    <option value="3">Film</option>
                </select>
                <div class="row">
                    <div class="form-group col-12">
                        <label for="description"><p>Description :</p></label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                    </div>
                </div>
            
                <div class="row">
                    <div class="form-group col-12 mb-5">
                        <label for="avis"><p>Avis :</p></label>
                        <textarea class="form-control" id="avis" rows="3" name="avis"></textarea>
                    </div>
                </div>
            
                <div class="d-flex justify-content-center">
                    <input type="submit" class="btn btn-light" id="insert" name="insert" value="Ajouter"></input>
                </div>
            </div>
			</fieldset>
		</form>
	</div>
    <?php include("asset/script.php") ?>
</body>
</html>