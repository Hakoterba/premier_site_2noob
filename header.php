<?php 

    $nbr = rand(0,3);
    $bg_tab = array("/../asset/img/anime_bg1.jpg","/../asset/img/anime_bg2.jpg","/../asset/img/anime_bg3.jpg","/../asset/img/anime_bg4.jpg");
    $bg = "background-image: url($bg_tab[$nbr]);";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<?php include("asset/meta.php"); ?>

    <style>
        body {
            <?php echo $bg ?> 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            margin: 0;
            color : white!important;
            font-family: sofia-pro, sans-serif;
        }

        a {
            color : white!important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg" id="barre_menu">

<a class="navbar-brand" href="index.php"><span class="barre_header scale">Accueil</span></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="background-color: white !important;padding: auto;"></i></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="manga_s.php"><span class="barre_header scale mr-3">Manga</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="anime_s.php"><span class="barre_header scale mr-3">Anime</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="film_s.php"><span class="barre_header scale mr-3">Film</span></a>
        </li>
    </ul>
    
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="add_i.php"><span class="barre_header scale mr-3">Add</span></a>
    </li>


        <?php 
            if(isset($_SESSION['pseudo'])) {
                echo '<li><a href="profil.php" class="nav-link"><span class="barre_header scale mr-3">'.$_SESSION["pseudo"].'</span></a></li>';
            }
            else 
                echo '<li><a href="log_in.php" class="nav-link"><span class="barre_header scale mr-3">Connexion</span></a></li>'
        ?>
    </ul>
</div>

</nav>
<?php //include("script.php") ?>
</body>
</html>